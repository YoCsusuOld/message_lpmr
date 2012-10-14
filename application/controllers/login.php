<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function index()
  {
    $data["content"]= 'login/login';
    $this->load->view ('template/template',$data);
  }

  public function modif_passwrd()
  {
    $this->form_validation->set_rules('password1', 'Mot de passe 1', 'trim|required|matches[password2]');
    $this->form_validation->set_rules('password2', 'Mot de passe 2', 'trim|required');

    if ($this->form_validation->run())
    {
      $data = array('pass' => sha1($this->input->post('password2')) ,
                    'token' => '' );

      $this->load->model('login_model');
      $this->login_model->setNewPassword($data,$this->input->post('token'));
       $this->session->set_flashdata('error', '<div class="alert-box success">Mot de passe modifié !<a href="" class="close">×</a></div>');
       redirect('login/login');
    } else {
      redirect('login/recuperer/'.$this->input->post('token'));
    }
  }


  public function inscription()
  {
    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('mail', 'Mail', 'trim|required|valid_email|is_unique[membre.mail]');
    $this->form_validation->set_rules('login', 'Login', 'trim|required|is_unique[membre.login]');
    $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required|min_length[6]');

    if ($this->form_validation->run())
    {
      $this->load->model('login_model');
      $data = array(
        'name'=>$this->input->post('name'),
        'mail'=>$this->input->post('mail'),
        'login'=>$this->input->post('login'),
        'pass'=>sha1($this->input->post('pass'))
        );
      $this->login_model->inscription($data);

      $this->session->set_flashdata('error', '<div class="alert-box success">Ta mère la  Cambodgienne !!!<a href="" class="close">×</a></div>');
      $this->session->set_userdata($newdata);
      redirect('login/inscription');
    }
    else
    {
      $this->session->set_flashdata('error', '<div class="alert-box alert">Inscription incorrect <a href="" class="close">×</a></div>');
      $data["content"]= 'login/login';
      $data['active'] = 'inscription';
      $this->load->view ('template/template',$data);
    }
  }

  public function oubli_pass()
  {
    $this->form_validation->set_error_delimiters('<small class="error">', '</small>');
    $this->form_validation->set_rules('email', 'eMail', 'trim|required|valid_email');

    if ($this->form_validation->run()) {
      $this->load->model('login_model');

      $id_user = $this->login_model->issetUser($this->input->post('email'));

        //Si l'email postée existe
       if ($id_user) {
         $token = md5(uniqid(rand(), true));
         $this->login_model->insertToken($id_user,$token);
         
         $this->load->library('email');

         $user = $this->login_model->getMailClient($id_user);
         // ENVOI DU MAIL
        $this->email->from('anthony.tournier25@gmail.com', 'anthony tournier');
        $this->email->to($user->mail);

        $this->email->subject('eMessage - Récupération de votre mot de passe');
        $message = '
        <html>
          <head></head>
          <body>
            <p>Bonjour ,</p>
            <p>Vous avez demandé à changer votre mot de passe. Pour cela, rendez-vous à l\'adresse suivante :</p>
            <p><a href="'.base_url().'login/recuperer/'.$token.'">'.base_url().'login/recuperer/'.$token.'</a></p>
          </body>
        </html>
        ';
        $this->email->message($message);  

        $this->email->send();

        // FIN ENVOI DU MAIL

          $this->session->set_flashdata('error', '<div class="alert-box success">Un email vous a été envoyé !<a href="" class="close">×</a></div>');
         redirect('login/login');
       } else {
          $this->session->set_flashdata('error', '<div class="alert-box alert">L\'adresse email n\'existe pas !<a href="" class="close">×</a></div>');
          redirect('login/login');
       }
    } else {
      $data["content"]= 'login/login';
      $data['active'] = 'oubli_password';
      $this->load->view ('template/template',$data);
    }
  }

    public function recuperer($token)
    {
      if (!$token) {
        redirect('login');
      } else {
        $data["content"]= 'login/recuperer';
        $this->load->view ('template/template',$data);
      }
    }

    public function connexion()
    {
      $this->form_validation->set_rules('login', 'login', 'required');
      $this->form_validation->set_rules('pass', 'Mot de passe', 'required');
      $this->form_validation->set_error_delimiters('<small class="error">', '</small>');

      if ($this->form_validation->run())
      {
        $this->load->model('login_model');

        $data_client = $this->login_model->getClient($this->input->post('login'),$this->input->post('pass'));

        //si l
                if ($data_client->logged == TRUE) {
                    $newdata = array(
                   'logged'  => $data_client->logged,
                   'email'     => $data_client->email,
                   'prenom' => $data_client->prenom,
                   'nom' => $data_client->nom,
                   'id_client' => $data_client->id_client,
                );
        $this->session->set_flashdata('error', '<div class="alert-box success">Ta mère la  Cambodgienne !!!<a href="" class="close">×</a></div>');
        $this->session->set_userdata($newdata);
        redirect('login/connexion');
      } else {
        $this->session->set_flashdata('error', '<div class="alert-box alert">Le compte n\'existe pas/Mot de passe incorrect <a href="" class="close">×</a></div>');
        redirect('login/connexion');
      }
    }else{
      $data["content"]= 'login/login';
      $data['active'] = 'connexion';
      $this->load->view ('template/template',$data);
    }
  }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function index()
  {
    $data["content"]= 'login/login';
    $this->load->view ('template/template',$data);
  }

  public function signup()
  {
    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('mail', 'Mail', 'trim|required|valid_email|is_unique[membre.mail]');
    $this->form_validation->set_rules('login', 'Login', 'trim|required|is_unique[membre.login]');
    $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required|min_length[6]');

    if ($this->form_validation->run())
    {
      $data = array(
        'name'=>$this->input->post('name'),
        'mail'=>$this->input->post('mail'),
        'login'=>$this->input->post('login'),
        'pass'=>sha1($this->input->post('pass'))
        );

      $this->load->model('login_model');
      $this->login_model->signup($data);
      $data["success"] = 'Inscription réussie';
      $data["content"] = 'login/login';
      $this->load->view ('template/template',$data);
    }
    else
    {
      $data["content"]= 'login/login';
      $data['show_register'] = TRUE;
      $this->load->view ('template/template',$data);
    }
  }

  public function oubli_pass()
  {
    $this->form_validation->set_error_delimiters('<small class="error">', '</small>');
    $this->form_validation->set_rules('email', 'eMail', 'trim|required|valid_email');

    if ($this->form_validation->run()) {
      $this->load->model('login_model');

      $id_user = $this->login_model->issetUser($this->input->post('mail'));

        //Si l'email postée existe
       if ($id_user) {
         $token = md5(uniqid(rand(), true));
         $this->login_model->insertToken($id_user,$token);
          $this->session->set_flashdata('error', '<div class="alert-box success">Un email vous a été envoyé !<a href="" class="close">×</a></div>');
         redirect('login/oubli_password');
       } else {
          $this->session->set_flashdata('error', '<div class="alert-box alert">L\'adresse email n\'existe pas !<a href="" class="close">×</a></div>');
          redirect('login/oubli_password');
       }
    } else {
      $data["content"]= 'login/login';
      $data['active'] = 'oubli_password';
      $this->load->view ('template/template',$data);
    }
  }

public function connexion()
    {
      $this->form_validation->set_rules('mail', 'mail', 'required|valid_email');
      $this->form_validation->set_rules('pass', 'Mot de passe', 'required');
      $this->form_validation->set_error_delimiters('<small class="error">', '</small>');

      if ($this->form_validation->run())
      {
        $this->load->model('login_model');

        $data_client = $this->login_model->getClient($this->input->post('mail'),$this->input->post('pass'));

        //si l'utilisateur existe
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
        redirect('http://google.fr');
      } else {
        $this->session->set_flashdata('error', '<div class="alert-box alert">Le compte n\'existe pas <a href="" class="close">×</a></div>');
        redirect('http://facebook.com');
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

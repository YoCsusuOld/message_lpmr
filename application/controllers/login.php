<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function index()
  {
    $data["content"]= 'login/login';
    $this->load->view ('template/template',$data);
  }

  public function oubli_password()
  {
    $data["content"]= 'login/oubli_pass';
    $this->load->view ('template/template',$data);
  }

  public function inscription()
  {
    $data["content"]= 'login/inscription';
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
        // $this->session->flashdata('error', '<p class="message green-gradient" style="display: block; ">Un email vient de vous être envoyé !<span class="close show-on-parent-hover">✕</span><span class="block-arrow bottom"><span></span></span></p>');
         $this->session->flashdata('error', 'TEST');
         redirect('login/oubli_password');
       } else {
          $this->session->flashdata('error', '<p class="message red-gradient" style="display: block; ">L\'adresse email n\'existe pas !<span class="close show-on-parent-hover">✕</span><span class="block-arrow bottom"><span></span></span></p>');
          redirect('login/oubli_password');
       }
    } else {
      $data["content"]= 'login/login';
      $data['active'] = 'oubli_password';
      $this->load->view ('template/template',$data);
    }
  }





}

/* End of file login.php */
/* Location: ./application/controllers/login.php */

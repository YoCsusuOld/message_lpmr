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
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */

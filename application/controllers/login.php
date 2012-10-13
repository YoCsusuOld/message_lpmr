<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
   {
      parent::__construct();
      //Load Dependencies

   }

  public function index()
  {
    $this->load->library('javascript');
    $this->load->library('form_validation');
    $data["content"]= 'login/index';
    $this->load->view ('template/template',$data);
  }

  public function signup()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|is_unique[membre.name');
    $this->form_validation->set_rules('mail', 'Mail', 'trim|required|xss_clean|valid_email|is_unique[membre.mail]');
    $this->form_validation->set_rules('login', 'Login', 'trim|required|xss_clean|is_unique[membre.login]');
    $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required|xss_clean|min_length[6]');

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
      $data["success"] = 'Inscription résussie';
      $data["content"] = 'login/index';
      $this->load->view ('template/template',$data);
    }
    else
    {
      $data["content"]= 'login/index';
      $data['show_register'] = TRUE;
      $this->load->view ('template/template',$data);
    }
  }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */

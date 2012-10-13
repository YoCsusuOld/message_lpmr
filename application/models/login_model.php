<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct()
    {
       parent::__construct();
       //Do your magic here
    }

    function signup ($data)
    {
    	$this->db->insert('membre',$data);
    }
}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */

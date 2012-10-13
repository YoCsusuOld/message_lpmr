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

    function issetUser($email)
    {
		$this->db->from('membre');
		$this->db->where('mail' , $email);

		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			$row = $query->row();
			return $row->id;
		}
    }

    function insertToken($id_user, $token)
    {
    	$data = array('token' => $token);
    	$this->db->where('id',$id_user);
    	$this->db->update('membre', $data); 
    }
}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */

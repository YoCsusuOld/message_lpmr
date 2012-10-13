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

    function getClient($email,$password)
    {
        $this->db->from('clients');
        $this->db->where('email' , $email);
        $this->db->where('pass_crypted' , sha1($password));

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();

            $data->email = $row->email; 
            $data->nom = $row->nom; 
            $data->prenom = $row->prenom; 
            $data->id_client = $row->id_client; 
            $data->logged = TRUE; 
        } else {
            $data->logged = FALSE; 
        }
        return $data;
    }
}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */

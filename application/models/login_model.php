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

    function getClient($login,$pass)
    {
        $this->db->from('membre');
        $this->db->where('login' , $login);
        $this->db->where('pass' , sha1($pass));

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();

            $data->mail = $row->mail; 
            $data->name = $row->name; 
            $data->login = $row->login; 
            $data->id_client = $row->id_client; 
            $data->logged = TRUE; 
        } else {
            $data->logged = FALSE; 
        }
        return $data;
    }

    function getMailClient($id_user)
    {

        $this->db->from('membre');
        $this->db->where('id' , $id_user);

        $query = $this->db->get();
        foreach ($query->result() as $row)
        {
            $data[] = $row; 
        }
        return $data[0];
    }
}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */

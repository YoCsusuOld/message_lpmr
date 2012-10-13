<?php 
/**
* *
*/
class Board_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
function get_all ()
	{
		$this->db->order_by('date','desc');
		$query = $this->db->get('message');
		if ($query->num_rows() > 0 ) 
		{
			foreach ($query->result() as $row ) 
			{
				$data[] = $row;
			}
			return $data ; 
		}
	}
	function get($id)
	{
		$query = $this->db->get('message');
		if ($query->num_rows() > 0 ) 
		{
			foreach ($query->result() as $row ) 
			{
				$data[] = $row;
			}
			return $data[0] ; 
		}
	}
}
?>
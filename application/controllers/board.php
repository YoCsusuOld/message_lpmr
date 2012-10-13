<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Board extends CI_Controller {

	public function __construct()
	{
      parent::__construct();
      //Load Dependencies
  	}

  	public function index()
  	{
      $this->load->model('board_model');
      $data["results"] = $this->board_model->get_all();
    	$data["content"]= 'board/index';
    	$this->load->view ('template/template',$data);
  	}

    public function test()
    {
      $this->load->model('board_model');
      $data["results"] = $this->board_model->get($id);
      $data["content"]= 'board/index';
      $this->load->view ('template/template',$data);
    }

}

/* End of file board.php */
/* Location: ./application/controllers/board.php */
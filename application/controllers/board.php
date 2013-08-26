<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Board extends CI_Controller {
	
	public function __construct(){
		
			parent::__construct();

		
	}
	
	public function index(){
	
		$this->load->model('Moves_Model', 'moves');	
		echo '<pre>';
		print_r($this->moves->get_possible_move('I1'));		
		echo '</pre>';
	}
	
	
	public function show_board(){
	
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
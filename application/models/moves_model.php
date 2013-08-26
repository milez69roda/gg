<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Moves_Model extends CI_Model{
	
	 
	function __construct(){
	
		parent::__construct();
	}
	
	/**
	* $current_loc = current location of the piece
	*@return list of possible moves
	*/
	function get_possible_move( $piece_loc ){
	
		$x = ord(strtolower($piece_loc[0]))-96;
		$y = $piece_loc[1];
		
		echo $x.','.$y.'<br/>';
		
		$board_x_axis = $this->config->item('board_x_axis');
		$posible_moves = array();
		
		if( $x-1 > 0 ) array_push($posible_moves, $board_x_axis[$x-1].''.$y);
		if( $x+1 < $this->config->item('board_w') ) array_push($posible_moves, $board_x_axis[$x+1].''.$y);
		if( $y-1 > 0 ) array_push($posible_moves, $board_x_axis[$x].''.($y-1));
		if( $y+1 < $this->config->item('board_h') ) array_push($posible_moves, $board_x_axis[$x].''.($y+1));
		
		return $posible_moves;
	}

}
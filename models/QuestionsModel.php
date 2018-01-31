<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Questions extends CI_Model
{
	
	public function return_questions()
	{
		# code...
		$this->load->database();
		$query=$this->db->query("SELECT Assignment_ID, Question_1, Answer_1, Answer_2, Answer_3  FROM assignment");
		$query->result_array();
		return $query;
	}
}

?>
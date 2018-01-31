<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class QuestionsController extends CI_Controller
{

	function __Construct(){

		parent::__Construct();
		$this->load->database();
	}
  

	public function quiz()
	{
	    $this->load->model('QuestionsModel');
	    $this->data['questions'] = $this->QuestionsModel->return_questions();
	    $this->load->views('Students_Questions', $this->data);

	}
}











?>
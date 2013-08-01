<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Exam extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function addexam()
	{		
		$this -> theForm = new \models\Entities\E_Exam; //create an object of the model
		$this -> theForm -> setExamType($_POST['type']);
		$this -> theForm -> setExamType($_POST['average']);						
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$lastlifeid=$this -> theForm->getExamID();
		
		// add to time
		
		$this -> theForm = new \models\Entities\E_Time; //create an object of the model
		$this -> theForm -> setTimeDay(date('d'));
		$this -> theForm -> setTimeWeek(date('w'));
		$this -> theForm -> setTimeMonth(date('m'));
		$this -> theForm -> setTimeYear(date('y'));						
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$lasttimeid=$this -> theForm->getTimeID();
		
		// add to summary
		/*
		$this -> theForm = new \models\Entities\E_Education_Summary; //create an object of the model
		$this -> theForm -> setEsExamID($lastlifeid);
		$this -> theForm -> setTimeID($lasttimeid);						
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		*/
	}


}


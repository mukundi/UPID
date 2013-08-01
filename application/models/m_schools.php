<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Schools extends MY_Model {

	function __construct() {
		parent::__construct();
	}
	function getSchools($school=false) {
	//Get schools
	try{		
	$schools = $this -> em -> createQuery('SELECT s.school_name, s.school_id FROM models\Entities\e_schools s');
	$this->schools=$schools->getResult();
	}catch(exception $ex){
		echo $ex->getMessage();
	}

	if ($schools) {
	return $this -> schools ;
	}

}			
	function addschool()
	{
				//insert facility if new, else update the existing one
		
		$this -> theForm = new \models\Entities\E_Schools; //create an object of the model
		$this -> theForm -> setSchoolName($_POST['school_name']);	
		$this -> theForm -> setSchoolLevel($_POST['level']);	
		$this -> theForm -> setSchoolCategory($_POST['category']);		
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();		
		$lastid=$this -> theForm->getSchoolID();
		
		// add to time
		
		$this -> theForm = new \models\Entities\E_Time; //create an object of the model
		$this -> theForm -> setTimeDay(date('d'));
		$this -> theForm -> setTimeWeek(date('f'));
		$this -> theForm -> setTimeMonth(date('m'));
		$this -> theForm -> setTimeYear(date('y'));						
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$lasttimeid=$this -> theForm->getTimeID();
		
		$this -> theForm = new \models\Entities\E_Poverty_Summary; //create an object of the model
		$this -> theForm -> setPsSchoolID($lastid);	
		$this -> theForm -> setTimeID($lasttimeid);						
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();	
		
	}
	
	function addenrolment()
	{		
		$this -> theForm = new \models\Entities\E_School_Enrolments; //create an object of the model
		$this -> theForm -> setFemaleEnrolments($_POST['fenrolment']);	
		$this -> theForm -> setMaleEnrolments($_POST['menrolment']);						
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();		
		$lastid=$this -> theForm->getEnrolmentID();
		
		
		// add to time
		
		$this -> theForm = new \models\Entities\E_Time; //create an object of the model
		$this -> theForm -> setTimeDay(date('d'));
		$this -> theForm -> setTimeWeek(date('f'));
		$this -> theForm -> setTimeMonth(date('m'));
		$this -> theForm -> setTimeYear(date('y'));						
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$lasttimeid=$this -> theForm->getTimeID();
		
		
		// education summarry details
		
		$this -> theForm = new \models\Entities\E_Education_Summary; 			
		$this -> theForm -> setEsSchoolID($_POST['School']);			
		$this -> theForm -> setEsEnrolmentID($lastid);					
		$this -> theForm -> setTimeID($lasttimeid);								
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();		
	}

	function addexam()
	{		
		$this -> theForm = new \models\Entities\E_Exams; //create an object of the model
		$this -> theForm -> setExamType($_POST['type']);
		$this -> theForm -> setExamAverage($_POST['average']);						
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


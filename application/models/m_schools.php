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
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		
		//echo $lastid; exit;
		/*$this -> theForm = new \models\Entities\E_Poverty_Summary; //create an object of the model
		$this -> theForm -> setPsSchoolID($lastid);		
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();*/
	}
		function addenrolment()
	{		
		$this -> theForm = new \models\Entities\E_School_Enrolments; //create an object of the model
		$this -> theForm -> setEnrolments($_POST['School']);						
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		
		$lastid=$this -> theForm->getEnrolmentID();	
		$this -> theForm = new \models\Entities\E_Poverty_Summary; //create an object of the model
		$this -> theForm -> setPsSchoolID($_POST['School']);	
		$this -> theForm -> setPsEnrolmentID($lastid);						
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();		
	}


}


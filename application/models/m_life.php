<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Life extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function addlife()
	{		
		$this -> theForm = new \models\Entities\E_Life; //create an object of the model
		$this -> theForm -> setLifeExpectancy($_POST['expectancy']);						
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$lastlifeid=$this -> theForm->getLifeID();
		
		// add to time
		
		$this -> theForm = new \models\Entities\E_Time; //create an object of the model
		$this -> theForm -> setTimeDay(date('d'));
		$this -> theForm -> setTimeWeek(date('f'));
		$this -> theForm -> setTimeMonth(date('m'));
		$this -> theForm -> setTimeYear(date('y'));						
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$lasttimeid=$this -> theForm->getTimeID();
		
		// add to summary
		
		$this -> theForm = new \models\Entities\E_Poverty_Summary; //create an object of the model
		$this -> theForm -> setPsLifeID($lastlifeid);
		$this -> theForm -> setTimeID($lasttimeid);						
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		
	}


}


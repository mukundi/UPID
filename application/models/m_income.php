<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Income extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function addincome()
	{		
		$this -> theForm = new \models\Entities\E_Income; //create an object of the model
		$this -> theForm -> setIncomeAverage($_POST['income']);						
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$lastlifeid=$this -> theForm->getIncomeID();
		
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
		
		$this -> theForm = new \models\Entities\E_Poverty_Summary; //create an object of the model
		$this -> theForm -> setIncomeID($lastlifeid);
		$this -> theForm -> setTimeID($lasttimeid);						
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		
	}


}


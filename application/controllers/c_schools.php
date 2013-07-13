<?php

class C_Schools extends CI_Controller {
	var $data;

	public function __construct() {
		parent::__construct();
		$this -> data = array();
		$this -> load -> database();
	}

	public function index() {
		// get counties
		
		$this -> load -> model('m_counties');
		$data['counties'] = $this -> m_counties -> getCountyNames();
		
		//get constituencies
		
		$this -> load -> model('m_constituencies');
		$data['constituencies'] = $this -> m_constituencies -> getConstituenciesNames();
		
		$data['contentView'] = 'schools';	
		$data['title'] = 'Add School';
		$this -> load -> view('template',$data);
	}
	public function setschool()
	{
		/*
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
		 
		 */
		//setSchoolID
		$this -> load -> model('m_schools');
		$this -> m_schools -> addschool();
		
	}
}
?>
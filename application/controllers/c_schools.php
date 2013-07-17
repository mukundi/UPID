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
		$this -> load -> model('m_schools');
		$this -> m_schools -> addschool();
	}
	public function addenrolment()
	{
		// get counties		
		$this -> load -> model('m_counties');
		$data['counties'] = $this -> m_counties -> getCountyNames();
		//get constituencies		
		$this -> load -> model('m_constituencies');
		$data['constituencies'] = $this -> m_constituencies -> getConstituenciesNames();
		//get schools
		$this -> load -> model('m_schools');
		$data['schools']=$this -> m_schools -> getschools();
		$data['contentView'] = 'add_enrolment';			
		$data['title'] = 'Add Enrolment';
		$this -> load -> view('template',$data);
	
		
	}
	public function setenrolment()
	{
		$this -> load -> model('m_schools');
		$this -> m_schools -> addenrolment();
		
	}
}
?>
<?php

class C_Income extends CI_Controller {
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
		
		$data['contentView'] = 'income';	
		$data['title'] = 'Add Life Expectancy';
		$this -> load -> view('template',$data);
	}
	public function setincome()
	{
		$this -> load -> model('m_income');
		$this -> m_income-> addincome();
		redirect("c_front");
	}	
}
?>
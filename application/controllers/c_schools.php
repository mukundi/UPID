<?php

class C_Schools extends CI_Controller {
	var $data;

	public function __construct() {
		parent::__construct();
		$this -> data = array();
		$this -> load -> database();
	}

	public function index() {
		$this -> load -> model('m_poverty');
		$temp_poverty = $this -> m_poverty -> getSchools();
		$this -> load -> model('m_security');
		$temp_county = $this -> m_security -> getCountyNames();
		$this -> load -> view('schools',data);
	}
}
?>
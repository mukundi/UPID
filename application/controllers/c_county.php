<?php

class C_County extends CI_Controller {
	var $data;

	public function __construct() {

		parent::__construct();
	    $this->data=array();

	}

	public function index() {
		$this->load->model('m_security');
		$temp_county=$this->m_security->getCountyNames();
	}


	
}?>
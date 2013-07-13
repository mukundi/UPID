<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Counties extends MY_Model {
	var $county_name;

	function __construct() {
		parent::__construct();
		$this -> county_name = '';
	}

	function getCountyNames() {
		$county_name = $this -> em -> createQuery('SELECT c.county_id,c.county_name FROM models\Entities\e_counties c');
		$this->county_name=$county_name->getResult();
		return $this -> county_name;
	}

}

<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Constituencies extends MY_Model {
	var $constituencies;

	function __construct() {
		parent::__construct();
		$this -> constituencies = '';
	}

	function getConstituenciesNames() {
		$constituencies = $this -> em -> createQuery('SELECT c.constituency_id,c.constituency_name FROM models\Entities\e_constituencies c');
		$this->constituencies=$constituencies->getResult();
		return $this -> constituencies;
	}

}

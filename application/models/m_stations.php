<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Stations extends MY_Model {
	var $station_name;

	function __construct() {
		parent::__construct();
		$this -> station_name = '';
	}

	function getStationNames() {
		$station_name = $this -> em -> createQuery('SELECT c.station_id,c.station_name FROM models\Entities\e_stations c');
		$this->station_name=$station_name->getResult();
		return $this ->station_name;
	}

}

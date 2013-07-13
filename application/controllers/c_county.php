<?php

class C_County extends CI_Controller {
	var $data;

	public function __construct() {
		parent::__construct();
		$this -> data = array();
		$this -> load -> database();
	}

	public function index() {
		$this -> load -> model('m_security');
		$temp_county = $this -> m_security -> getCountyNames();
	}

	public function setSecuritySummary() {
		//Variables
		$incident_id = 0;
		$incident_id = 0;
		//Get Security Incidents
		$sql = "select * from security_incidencies";
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		if ($results) {
			foreach ($results as $result) {
				$incident_id = $result['security_incidenct_id'];
			}

		}
	}

	public function getIncident($id) {
		$this -> load -> model('m_incident_types');
		$data['incident_types'] = $this -> m_incident_types -> getIncidentTypes();

		$sql = "select * from security_incidencies where security_incidenct_id='$id'";
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		if ($results) {
			$data['results'] = $results;
		}
		$data['contentView'] = 'incidence_v';
		$this -> load -> view('template', $data);
	}

}
?>
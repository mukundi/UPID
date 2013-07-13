<?php

class C_Incident extends CI_Controller {
	var $data;

	public function __construct() {
		parent::__construct();
		$this -> data = array();
		$this -> load -> database();
	}

	public function index() {

	}

	public function addIncident() {
		$this -> load -> model('m_incident_types');
		$data['incident_types'] = $this -> m_incident_types -> getIncidentTypes();
		$this -> load -> model('m_counties');
		$data['counties'] = $this -> m_counties -> getCountyNames();
		$this -> load -> model('m_constituencies');
		$data['constituencies'] = $this -> m_constituencies -> getConstituenciesNames();
		$this -> load -> model('m_stations');
		$data['stations'] = $this -> m_stations -> getStationNames();
		$data['title'] = 'Add Incident';
		$data['contentView'] = 'add_incidence_v';
		$this -> load -> view('template', $data);
	}

	public function setIncident() {

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
		$data['title'] = 'View Incident';
		$data['contentView'] = 'view_incidence_v';
		$this -> load -> view('template', $data);
	}

}
?>
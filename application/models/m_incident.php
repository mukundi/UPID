<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Incident extends MY_Model {
	var $incident_name;

	function __construct() {
		parent::__construct();
		$this -> incident_name = '';
	}

	function getIncidentNames() {
		$incident_name = $this -> em -> createQuery('SELECT c.security_incident_id,c.security_dor,c.security_reporter_contact,c.security_incident_description FROM models\Entities\e_security_incidences c');
		$this -> incident_name = $incident_name -> getResult();
		return $this -> incident_name;
	}

	function setIncident() {
		$this -> theForm = new \models\Entities\E_Security_Incidences();
		$this -> theForm -> setSecurityIncidentDOR($_POST['dor']);
		$this -> theForm -> setSecurityIncidentContact($_POST['full_name']);
		$this -> theForm -> setSecurityIncidentDescription($_POST['description']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$incident_name = $this -> theForm -> getSecurityIncidentID();
		$this -> em -> clear();
		$this -> theForm = new \models\Entities\E_Security_Summary();
		$this -> theForm -> setSSTime($_POST['dor']);
		$this -> theForm -> setSSIncidentType($_POST['incident_type']);
		$this -> theForm -> setSSLocation($_POST['location']);
		$this -> theForm -> setSSIncidentID($incident_name);
		$this -> theForm -> setSSCountyID($_POST['county']);
		$this -> theForm -> setSSConstituencyID($_POST['constituency']);
		$this -> theForm -> setSSStationID($_POST['station']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}

}

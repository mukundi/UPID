<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Incident_Types extends MY_Model {
	var $incident_type_id,$incident_type_name,$incident;

	function __construct() {
		parent::__construct();
		$this -> incident_type_id = '';
		$this -> incident_type_name = '';
		$this -> incident ='';
	}

	function getIncidentTypes() {
		$incident = $this -> em -> createQuery('SELECT c.incident_type_id,c.incident_type_name FROM models\Entities\e_security_incident_types c');
		$this -> incident = $incident -> getResult();
		return $this -> incident;
	}

}

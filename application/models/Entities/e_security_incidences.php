<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="security_incidences")
 */

class E_Security_Incidences {

	/**
	 * @Id
	 * @Column(name="security_incident_id", type="integer", length=50, nullable=false)
	 * */
	private $security_incident_id;
	/**
	 *  @Column(name="security_incident_dor", type="string", length=45, nullable=true)
	 * */
	private $security_incident_dor;
	/**
	 *  @Column(name="security_reporter_contact", type="date", length=45, nullable=true)
	 * */
	private $security_reporter_contact;

	/**
	 *  @Column(name="security_incident_description", type="string", length=45, nullable=true)
	 * */
	private $security_incident_description;

	/**
	 *  @Column(name="security_incident_location", type="string", length=45, nullable=true)
	 * */
	private $security_incident_location;

	/**
	 * Security Incident ID
	 * */
	public function getSecurityIncidentID() {
		return $this -> security_incident_id;
	}

	public function setSecurityIncidentID($security_incident_id) {
		$this -> security_incident_id = $security_incident_id;
	}

	/**
	 * Security Incident DOR(Date of Reporting)
	 * */
	public function getSecurityIncidentDOR() {
		return $this -> security_incident_dor;
	}

	public function setSecurityIncidentDOR($security_incident_dor) {
		$this -> security_incident_dor = $security_incident_dor;
	}

	/**
	 * Security Incident DOR(Date of Reporting)
	 * */
	public function getSecurityIncidentContact() {
		return $this -> security_reporter_contact;
	}

	public function setSecurityIncidentContact($security_reporter_contact) {
		$this -> security_reporter_contact = $security_reporter_contact;
	}

	/**
	 * Security Incident Contact
	 * */
	public function getSecurityIncidentContact() {
		return $this -> security_reporter_contact;
	}

	public function setSecurityIncidentContact($security_reporter_contact) {
		$this -> security_reporter_contact = $security_reporter_contact;
	}

	/**
	 * Security Incident Description
	 * */
	public function getSecurityIncidentDescription() {
		return $this -> security_incident_description;
	}

	public function setSecurityIncidentDescription($security_incident_description) {
		$this -> security_incident_description = $security_incident_description;
	}

	/**
	 * Security Incident Description
	 * */
	public function getSecurityIncidentLocation() {
		return $this -> security_incident_location;
	}

	public function setSecurityIncidentLocation($security_incident_location) {
		$this -> security_incident_location = $security_incident_location;
	}

}
?>
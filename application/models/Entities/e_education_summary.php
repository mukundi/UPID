<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="education_summary")
 */

class E_Education_Summary {
	/**
	 * @Id
	 * @Column(name="es_id", type="integer", length=50, nullable=false)
	 *  @GeneratedValue(strategy="AUTO")
	 * */
	private $es_id;
	
	public function getEsID() {
		return $this -> es_id;
	}

	public function setEsID($es_id) {
		$this -> es_id = $es_id;
	}
	/**
	 *  @Column(name="es_school_id", type="integer", length=45, nullable=true)
	 * */
	private $es_school_id;
	
	public function getEsSchoolID($es_school_id) {
	return $this -> es_school_id;
	}

	public function setEsSchoolID($es_school_id) {
		$this -> es_school_id = $es_school_id;
	}


	/**
	 *  @Column(name="es_enrolment_id", type="integer", length=45, nullable=true)
	 * */
	private $es_enrolment_id;
	
	public function getEsEnrolmentID() {
		return $this -> es_enrolment_id;
	}
	
	public function setEsEnrolmentID($es_enrolment_id) {
		$this -> es_enrolment_id = $es_enrolment_id;
	}
	/**
	 *  @Column(name="es_performance_id", type="integer", length=45, nullable=true)
	 * */
	private $es_performance_id;
	
	public function getEsPerformanceID() {
		return $this -> es_performance_id;
	}

	public function setEsPerformanceID($es_performance_id) {
		$this -> es_performance_id = $es_performance_id;
	}
	
	/**
	 *  @Column(name="es_dropouts_id", type="integer", length=45, nullable=true)
	 * */
	private $es_dropouts_id;

	public function getEsDropoutID() {
		return $this -> es_dropouts_id;
	}

	public function setEsDropoutID($es_dropouts_id) {
		$this -> es_dropouts_id = $es_dropouts_id;
	}
	
	
	/**
	 *  @Column(name="es_teachers_id", type="integer", length=45, nullable=true)
	 * */
	private $es_teachers_id;

	public function getTeachersID() {
		return $this -> es_teachers_id;
	}

	public function setTeachersID($es_teachers_id) {
		$this -> es_teachers_id = $es_teachers_id;
	}
	
	/**
	 *  @Column(name="es_expenditure_id", type="integer", length=45, nullable=true)
	 * */
	private $es_expenditure_id;

	public function getExpenditureID() {
		return $this -> es_expenditure_id;
	}

	public function setExpenditureID($es_expenditure_id) {
		$this -> es_expenditure_id = $es_expenditure_id	;
	}
	
	
	/**
	 *  @Column(name="es_time_id", type="integer", length=45, nullable=false)
	 * */
	private $es_time_id;

	public function getTimeID() {
		return $this -> es_time_id;
	}

	public function setTimeID($es_time_id) {
		$this -> es_time_id = $es_time_id;
	}
	
	


}
?>
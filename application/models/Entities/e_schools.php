<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="schools")
 */
class E_Schools{

	/**
	 * @Id
	 * @Column(name="school_id", type="integer", length=50, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $school_id;
	
	public function getSchoolID() {
		return $this ->school_id;
	}

	public function setSchoolID($school_id) {
		$this ->school_id = $school_id;
	}

	/**
	 *  @Column(name="school_name", type="string", length=45, nullable=true)
	 * */
	private $school_name;

	public function getSchoolName() {
		return $this ->school_name;
	}

	public function setSchoolName($school_name) {
		 $this -> school_name = $school_name;
	}
	
		/**
	 *  @Column(name="school_level", type="string", length=45, nullable=true)
	 * */
	private $school_level;

	public function getSchoolLevel() {
		return $this ->school_level;
	}

	public function setSchoolLevel($school_level) {
		 $this -> school_level = $school_level;
	}
	
	/**
	 *  @Column(name="school_category", type="string", length=45, nullable=true)
	 * */
	private $school_category;

	public function getSchoolCategory() {
		return $this ->school_category;
	}

	public function setSchoolCategory($school_category) {
		 $this -> school_category = $school_category;
	}

}
?>
<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="school_enrolments")
 */

class E_School_Enrolments{

	/**
	 * @Id
	 * @Column(name="se_id", type="integer", length=50, nullable=false)
	 * * @GeneratedValue(strategy="AUTO")
	 * */
	private $se_id;
	
	
	public function getEnrolmentID() {
		return $this ->se_id;
	}
	public function setEnrolmentID($se_id) {
		$this ->se_id = $se_id;
	}

	/**
	 *  @Column(name="se_female_enrolments", type="string", length=45, nullable=false)
	 * */
	private $se_female_enrolments;

	public function getFemaleEnrolments() {
		return $this ->se_female_enrolments;
	}

	public function setFemaleEnrolments($se_female_enrolments) {
		 $this -> se_female_enrolments = $se_female_enrolments;
	}
	
		/**
	 *  @Column(name="se_male_enrolments", type="string", length=45, nullable=false)
	 * */
	private $se_male_enrolments;

	public function getMaleEnrolments() {
		return $this ->se_male_enrolments;
	}

	public function setMaleEnrolments($se_male_enrolments) {
		 $this -> se_male_enrolments = $se_male_enrolments;
	}

}
?>
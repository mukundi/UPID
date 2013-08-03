<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="school_dropouts")
 */

class E_School_Dropouts{

	/**
	 * @Id
	 * @Column(name="sd_id", type="integer", length=50, nullable=false)
	 * * @GeneratedValue(strategy="AUTO")
	 * */
	private $sd_id;
	
	
	public function getDropoutID() {
		return $this ->sd_id;
	}
	public function setDropoutID($sd_id) {
		$this ->sd_id = $sd_id;
	}

	/**
	 *  @Column(name="sd_female_dropouts", type="string", length=45, nullable=false)
	 * */
	private $sd_female_dropouts;

	public function getFemaleDropouts() {
		return $this ->sd_female_dropouts;
	}

	public function setFemaleDropouts($sd_female_dropouts) {
		 $this -> sd_female_dropouts = $sd_female_dropouts;
	}
	
	/**
	 *  @Column(name="sd_male_dropouts", type="string", length=45, nullable=false)
	 * */
	private $sd_male_dropouts;

	public function getMaleDropouts() {
		return $this ->sd_male_dropouts;
	}

	public function setMaleDropouts($sd_male_dropouts) {
		 $this -> sd_male_dropouts = $sd_male_dropouts;
	}

}
?>
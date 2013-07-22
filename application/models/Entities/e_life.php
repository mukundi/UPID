<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="life_expectancy")
 */

class E_Life{

	/**
	 * @Id
	 * @Column(name="life_id", type="integer", length=50, nullable=false)
	 * * @GeneratedValue(strategy="AUTO")
	 * */
	private $life_id;

	/**
	 *  @Column(name="life_expectancy", type="string", length=45, nullable=false)
	 * */
	private $life_expectancy;
	
    /**
	 * School ID
	 * */
	public function getLifeID() {
		return $this ->life_id;
	}
	public function setLifeID($life_id) {
		$this ->life_id = $life_id;
	}

    /*
	 * School Name
	 * */
	public function getLifeExpectancy() {
		return $this ->life_expectancy;
	}

	public function setLifeExpectancy($life_expectancy) {
		 $this -> life_expectancy = $life_expectancy;
	}

}
?>
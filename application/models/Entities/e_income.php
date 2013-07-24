<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="income")
 */

class E_Income{

	/**
	 * @Id
	 * @Column(name="income_id", type="integer", length=50, nullable=false)
	 *  @GeneratedValue(strategy="AUTO")
	 * */
	
	private $income_id;
	
	
	public function getIncomeID() {
		return $this ->income_id;
	}

	public function setIncomeId($income_id) {
		$this -> income_id = $income_id;
	}

	/**
	 *  @Column(name="income_average", type="string", length=45, nullable=true)
	 * */
	
	private $income_average;

	public function getIncomeAverage() {
		return $this ->income_average;
	}

	public function setIncomeAverage($income_average) {
		$this -> income_average = $income_average;
	}
}
?>
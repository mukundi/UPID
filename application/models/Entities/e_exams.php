<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="exams")
 */

class E_Exams{

	/**
	 * @Id
	 * @Column(name="exam_id", type="integer", length=50, nullable=false)
	 *  @GeneratedValue(strategy="AUTO")
	 * */
	private $exam_id;
	
	public function getExamID() {
		return $this ->exam_id;
	}

	public function setExamID($exam_id) {
		$this ->exam_id = $exam_id;
	}

	/**
	 *  @Column(name="exam_type", type="string", length=45, nullable=true)
	 * */
	private $exam_type;
	
	public function getExamType() {
		return $this ->exam_type;
	}

	public function setExamType($exam_type) {
		$this ->exam_type = $exam_type;
	}
	/**
	 *  @Column(name="exam_average", type="integer", length=11, nullable=true)
	 * */
	private $exam_average;
		public function getExamAverage() {
		return $this ->exam_average;
	}

	public function setExamAverage($exam_average) {
		$this ->exam_average = $exam_average;
	}




}
?>
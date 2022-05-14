<?php
class parent
{
    public $students;
    public $teachert;
    private $fees;
    public function Contactwithteachers($id,$email)
    {

    }
    public function viewmarks($sid, $id)
    {

    }
    public function viewstudentperofrmamnce($sid,$id)
    {

    }
    public function viewtimetable($sid,$id)
    {

    }
    public function viewtheattendance ($sid,$id )
    {

    }
    public function payfees($id,$sschoolyear,$ffees, $fpaytype)
    {
        
    }



	/**
	 * 
	 * @return mixed
	 */
	function getFees() {
		return $this->fees;
	}
	
	/**
	 * 
	 * @param mixed $fees 
	 * @return parent
	 */
	function setFees($fees): self {
		$this->fees = $fees;
		return;
	}
}
?>
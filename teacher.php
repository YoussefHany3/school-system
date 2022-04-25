<?php
include_once "function.php";
class teacher extends user
{
    public $typr;
    private $salary;
    public $students;
    public $subjectk;
    public $book;

    public function Login ($Email,$Password)
{
	global $fileName;
	if (searchUser($fileName,$Email."~".$Password))
	{
		return true;
	}
	else{
		return false;
	}
}
public function takeattendance($id)
{

}
public function tracksperformance($id)
{

}
public function putgrades($id)
{
    
}
public function giveshomework($id,$schoolyear)
{
    
}
public function makesquizzes($id,$shcoolyear)
{
    
}
public function createtimetable($id,$password)
{
    
}
public function addresult($id,$kid)
{
    
}
public function takesalary($id,$password)
{
    
}
public function borrowbook($id)
{
    
}


	/**
	 * 
	 * @return mixed
	 */
	function getSalary() {
		return $this->salary;
	}
	
	/**
	 * 
	 * @param mixed $salary 
	 * @return teacher
	 */
	function setSalary($salary): self {
		$this->salary = $salary;
		return $this;
	}
}
?>
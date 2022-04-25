<?php
include_once "Functins.php";


class accountant extends user{
private $salary;

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

public function payment($id,$salary){

}

public function calculatesalary($id,$salary){


}

public function managestaffinance($id,$salary){

}

public function takesalary($id,$Password){

}

function getSalary() {
    return $this->salary;
}

function setSalary($salary): self {
    $this->salary = $salary;
    return $this;
}
}

?>
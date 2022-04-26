<?php
include_once "Functins.php";


class accountant
{
private $salary;



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
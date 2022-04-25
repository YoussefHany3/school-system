<?php
include_once "Functins.php";
$fileName="UsersFile.txt";

public $id;
public $type;
public $date;
public $relegion;
public $address;
public $email;
private $password;
public $gender;
public $phone;
function Login ($Email,$Password)
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
?>
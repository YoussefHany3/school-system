<?php
include "Functins.php";
$fileName="UsersFile.txt";

class user
{
	public $id;
	public$type;
	public$name;
	public$date;
	public$relegion;
	private$address;
	public$email;
	private$password;
	public$gender;
	public$phone;
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
}

?>
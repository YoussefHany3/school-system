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
	public$phonenumber;
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
	/**
	 * 
	 * @return mixed
	 */
	function getPassword() {
		return $this->password;
	}
	
	/**
	 * 
	 * @param mixed $password 
	 * @return user
	 */
	function setPassword($password): self {
		$this->password = $password;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getAddress() {
		return $this->address;
	}
	
	/**
	 * 
	 * @param mixed $address 
	 * @return user
	 */
	function setAddress($address): self {
		$this->address = $address;
		return $this;
	}
}

?>
<?php
include "Functins.php";
$fileName="UsersFile.txt";

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
    echo ("tmm"(
}
?>
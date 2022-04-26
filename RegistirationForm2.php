<?php
include "userfunction.php";

$pass=Encrypt($_REQUEST["Password"],2);

if (addUser($_POST["id"],$_POST["type"],$_POST["FullName"],$_REQUEST["DOB"],$_REQUEST["relegion"],$address,$_POST["Email"],$pass,$_REQUEST["gender"],$_REQUEST["phone"]))
{
	echo "Success";
	header("Location: ListAllUsers.php?Msg=Record Added Sucessfully");
}
else
{
	echo "Duplicate email";
}
?>
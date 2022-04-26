<?php
include "userfunction.php";
$id=$_REQUEST["id"];
DeleteUser($id);
header("Location: ListAllUsers.php?Msg=Record $id was Deleted sucessfully");	
?>
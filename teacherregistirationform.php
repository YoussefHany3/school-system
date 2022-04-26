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
<form action="RegistirationForm2.php" method="post">
<table>
<tr>
		<td>id</td>
		<td><input type="text" name="id"/></td>
	</tr>
    <tr>
		<td>type</td>
		<td><input type="text" name="type"/></td>
	</tr>
    <tr>
        <td>Full Name</td>
        <td><input type="text" name="FullName"/></td>
    </tr>
    <tr>
        <td>DOB</td>
        <td><input type="text" name="DOB" /></td>
    </tr>
    <tr>
        <td>relegion</td>
        <td><input type="text" name="relegion"/></td>
    </tr>
    <tr>
		<td>address</td>
		<td><input type="text" name="address"/></td>
	</tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="Email"/></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="Password" /></td>
    </tr>
    <tr>
		<td>gender</td>
		<td><input type="text" name="gender"/></td>
	</tr>
    <tr>
		<td>phone</td>
		<td><input type="text" name="phone"/></td>
	</tr>
	<tr>
		<td><input type="submit" /></td>
		<td><input type="reset" /></td>
	</tr>
</table>

</form>
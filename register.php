
<label id= fontcolor for="Teacher"> Teacher</label>   
    <input type="radio" name="type" value="Teacher"required >    
    <label id= fontcolor for="Student">Student</label>  
    <input type="radio" name="type" value="Student" >     
     <label id= fontcolor for="Manager">Manager</label>  
     <input type="radio" name="type" value="Manger">
     <label id= fontcolor for="accountant">accountant</label>  
    <input type="radio" name="type" value="accountant" >  
    <label id= fontcolor for="parent">parent</label>  
    <input type="radio" name="type" value="parent" > 
    <label id= fontcolor for="admin">admin</label>  
    <input type="radio" name="type" value="admin" > 
<form action="register2.php" method="post">
<table>
	<tr>
		<td>Email</td>
		<td><input type="text" name="Email"/></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="Password" /></td>
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
		<td><input type="submit" /></td>
		<td><input type="reset" /></td>
	</tr>
</table>
</form>
<?php
     
?>
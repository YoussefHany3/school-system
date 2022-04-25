<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>

<body>

    <form action="verifylogin.php" method="POST">

        <label for="">name</label>

        <input type="text" name="username">
        <br>
        <label for="">password</label>
        <input type="password" name="password">
        <br>
        <br>
    <label id= fontcolor for="Teacher"> Teacher</label>   
    <input type="radio" name="type" value="Teacher"required >    
    <label id= fontcolor for="Student">Student</label>  
    <input type="radio" name="type" value="Student" >     
     <label id= fontcolor for="Manager">Manager</label>  
     <input type="radio" name="type" value="Manger">
     <br>
     <br>
        <button> login</button>


    </form>
</body>

</html>
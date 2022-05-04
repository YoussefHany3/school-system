<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>       
        <div class="form-container">
            <form action="" method="post">
                <h3 class="title">login now</h3>
                <?php
                    if(isset($error))
                    {
                        foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                        }
                    }

                ?>
                <form action="" method="post">
                <div class="box">
                
                    <input type="radio" id="Student" name="usertype" value="Student"required>
                    <label for="Student">Student</label>
                    <input type="radio" id="Teacher" name="usertype" value="Teacher"required>
                    <label for="Teacher">Teacher</label>
                    <input type="radio" id="Admin" name="usertype" value="Admin"required>
                    <label for="Admin">Admin</label>
                    <input type="radio" id="Manager" name="usertype" value="Manager"required>
                    <label for="manager">Manager</label>

                </div>
                <input type="username" name="username" placeholder="enter your username" class="box" required>
                <input type="password" name="password" placeholder="enter your password" class="box" required>
                <input type="submit" value="login now" class="form-btn" name="submit">
                <p>New visitor? <a href="webpage/home.html">Login as guest!</a></p>
            </form>
        </div>
    </body>
</html>
<?php
    $getUserType = $_POST['usertype'];
    $getUserName=$_POST['username'];
    $getUserPassowrd=$_POST['password'];
    extract($_REQUEST);
   
    $usernameS1="mahmoud";
    $passwordS1="1234";

    $usernameT1="Ayman12";
    $passwordT1="2233";
    
    if(isset($_POST['submit']) && $usernameS1===$getUserName && $passwordS1===$getUserPassowrd && $getUserType===Student)
    {
        $file=fopen("Login.txt","a");
        fwrite($file,"usertype :");
        fwrite($file,$usertype."\n");
        fwrite($file,"username :");
        fwrite($file,$username."\n");
        fwrite($file,"Password :");
        fwrite($file,$password."\n");        
        fclose($file);
        echo "<script> location.replace('http://localhost/SMS/Student/studentpage.html') </script>";
    }
    else if(isset($_POST['submit']) && $usernameT1===$getUserName && $passwordT1===$getUserPassowrd &&$getUserType===Teacher)
    {
        $file=fopen("Login.txt","a");
        fwrite($file,"usertype :");
        fwrite($file,$usertype."\n");
        fwrite($file,"username :");
        fwrite($file,$username."\n");
        fwrite($file,"Password :");
        fwrite($file,$password."\n");        
        fclose($file);
        echo "<script> location.replace('http://localhost/SMS/Teacher/onlineeducation/index.html') </script>";
    }
    else if($getUserType===Admin)
    {
        echo "<script> location.replace('http://localhost/SMS/Admin/adminpage.html') </script>";
    }
    else
    {
       
        foreach($error as $error)
        {
            echo '<span class="error-msg">'.$error.'</span>';
        }
    }
       

?>
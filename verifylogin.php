<?php
include_once"teacher.php";
include_once"manger.php";
include_once"student.php";
include_once"admin.php";
include_once"accountant.php";
include_once"parent.php";


$namee=$_POST['username'];
$pass=$_POST['password'];
$type=$_POST['type'];
if($type=="teacher")
{
    $ss=new teacher();
    
    $ss->login($namee,$pass);

}
else if($type=="manger")
{
    $ss=new manger();
    $ss->login($namee,$pass);
}
else if($type=="student")
{  
    $ss=new student();
     $ss->login($namee,$pass);

}
else if($type=="accountant")
{  
    $ss=new accountant();
     $ss->login($namee,$pass);

}
else if($type=="parent")
{  
    $ss=new parent();
     $ss->login($namee,$pass);

}
else if($type=="admin")
{  
    $ss=new admin();
     $ss->login($namee,$pass);

}
echo $namee;
echo '<pre>';
echo $pass;
?>
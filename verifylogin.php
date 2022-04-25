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
if($type=="Teacher")
{
    $ss=new teacher();
    
    $ss->login($namee,$pass);

}
else if($type=="Manger")
{
    $ss=new Manger();
    $ss->login($namee,$pass);
}
else if($type=="Student")
{  
    $ss=new student();
     $ss->login($namee,$pass);

}
echo $namee;
echo '<pre>';
echo $pass;
?>
<?php
include_once("user.php");
include_once("student.php");
include_once("teacher.php");
class manager extends user{

   public $id;
   public $fileName;

   public $Email;
   private function send reports();
}
?>
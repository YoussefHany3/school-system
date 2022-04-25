<?php
include_once('student.php');
include_once('teacher.php');
    class Admin extends user
    {
        public $securenum;
        
        public $teacherobj=new teacher();


        public function modify_teacher($teacherobj.id,$teacherobj.name,$teacherobj.email,$teacherobj.phonenumber)
        {

        }
        public function updateusers($id,$name,$email,$phonenumber)
        {

        }
        public function deleteusers($id,$password)
        {

        }
        public function make_timetable($id,$password)
        {

        }
        public function takesalary($id,$password)
        {

        }
    }
?>
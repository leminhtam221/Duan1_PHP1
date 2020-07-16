<?php

if(isset($_POST['uname'])){
   $user = [];
   if($_POST['type']=='hocvien'){
      userSignUp($_POST['uname'],$_POST['pwd'],$_POST['email'],$_POST['fname'],$_POST['lname']);
      $user = checkLogin($_POST['uname'],$_POST['pwd']);
   }
   if($_POST['type']=='giangvien'){
      lectureSignUp($_POST['uname'],$_POST['pwd'],$_POST['email'],$_POST['fname'],$_POST['lname']);
      $user = checkLoginGV($_POST['uname'],$_POST['pwd']);
   }
   setcookie("user_id",$user_id, time() + (86400 * 180), "/");
   header("Location: index.php");
}
include './view/signup.php';
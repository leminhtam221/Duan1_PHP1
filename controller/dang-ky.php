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
   setcookie("duan1_user[0]",$user['tai_khoan'], time() + (86400 * 180), "/");
   setcookie("duan1_user[1]",$user['ho_ten'], time() + (86400 * 180), "/");
   setcookie("duan1_user[2]",$user['email'], time() + (86400 * 180), "/");
   header("Location: index.php");
}
include './view/signup.php';
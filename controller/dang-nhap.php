<?php
$signin_error = false;
if(isset($_POST['uname'])&&isset($_POST['pwd'])){
   $uname = $_POST['uname'];
   $pwd = $_POST['pwd'];
   $user = checkLogin($uname,$pwd);
   if(isset($user['id'])){
      // $_SESSION['user'] = $user;
      setcookie("duan1_user[0]",$user['tai_khoan'], time() + (86400 * 180), "/");
      setcookie("duan1_user[1]",$user['ho_ten'], time() + (86400 * 180), "/");
      setcookie("duan1_user[2]",$user['email'], time() + (86400 * 180), "/");
      header("Location: index.php");
   }
   else{
      $signin_error = true;
   }
}

include './view/signin.php';
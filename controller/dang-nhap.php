<?php
$signin_error = false;
if(isset($_POST['uname'])&&isset($_POST['pwd'])){
   $uname = $_POST['uname'];
   $pwd = $_POST['pwd'];
   $user = checkLogin($uname,$pwd);
   $user1 = checkLoginGV($uname,$pwd);
   if(isset($user['id'])){
      setcookie("user_id",$user['id'], time() + (86400 * 180), "/");
      header("Location: index.php");
   }elseif(isset($user1['id'])){
      setcookie("lecturer_id",$user1['id'], time() + (86400 * 180), "/");
      header("Location: index.php");
   }else{
      $signin_error = true;
   }
}

include './view/signin.php';
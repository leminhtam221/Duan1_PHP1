<?php
$signin_error = false;
if(isset($_POST['uname'])&&isset($_POST['pwd'])){
   $uname = $_POST['uname'];
   $pwd = $_POST['pwd'];
   $user = checkLogin($uname,$pwd);
   if(isset($user['id'])){
      $_SESSION['user'] = $user;
      header("Location: index.php");
   }
   else{
      $signin_error = true;
   }
}

include './view/signin.php';
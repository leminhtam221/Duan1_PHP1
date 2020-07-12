<?php
$signin_error = false;
if(isset($_POST['uname'])){
   $user = login($_POST['uname'],$_POST['pwd']);
   // $value = array($user['id'],$user['tai_khoan'],$user['ho_ten'],$user['email']);
   // if($user['id']>0){
   //    setcookie('user', $value, time() + (86400 * 180), "/");
      
   // }else{
   //    $signin_error = true;
   // }
   var_dump($user);
}

include './view/signin.php';
<?php
$signin_error = false;
if(isset($_POST['uname'])&&isset($_POST['pwd'])){
   $uname = $_POST['uname'];
   $pwd = $_POST['pwd'];
   $user = login($uname);
   $lecturer = loginGV($uname);
   if(isset($user['id'])&&password_verify($pwd,$user['mat_khau'])&&$user['trang_thai']==1){
      setcookie("user_id",$user['id'], time() + (86400 * 180), "/");
      // truy cập vào trang thanh toán hoặc index
      if(isset($_SESSION['thanh_toan'])){
         header("Location: index.php?act=thanh-toan");
      }else{
         header("Location: index.php");
      }
   }elseif(isset($lecturer['id'])&&password_verify($pwd,$lecturer['mat_khau'])&&$lecturer['trang_thai']==1){
      setcookie("lecturer_id",$lecturer['id'], time() + (86400 * 180), "/");
      header("Location: index.php");
   }else{
      $signin_error = true;
   }
}

include './view/signin.php';
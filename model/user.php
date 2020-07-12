<?php
function checkLogin($uname, $pwd){
   $user = find("select * from user where tai_khoan='$uname' and mat_khau='$pwd' or email='$uname' and mat_khau='$pwd'");
   return $user;
}?>



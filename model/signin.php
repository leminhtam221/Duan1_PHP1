<?php
function login($uname,$pwd){
   $user = find("select * from user where tai_khoan=$uname and mat_khau=$pwd");
   return $user;
}
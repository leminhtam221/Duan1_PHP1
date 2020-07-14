<?php
function checkLogin($uname, $pwd){
   $user = find("select * from user where tai_khoan='$uname' and mat_khau='$pwd' or email='$uname' and mat_khau='$pwd'");
   return $user;
}
function userSignUp($uname, $pwd, $email, $fname, $lname){
   $sql = "insert into user(tai_khoan, mat_khau, email, ho_ten) values('$uname','$pwd','$email','$fname $lname')";
   execSQL($sql,0);
}
function getUser(){
   $sql = "select tai_khoan from user";
   $res = findMultiple($sql);
   return $res;
}

?>



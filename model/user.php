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

function getNameUser($idUser){
   $sql = "select ho_ten from user where id='$idUser'";
   return find($sql);
}

function loadThongTinUser($idUser){
   $sql = "SELECT * FROM user WHERE id='$idUser'";
   return find($sql);
}

function capNhatThongTinUser($name, $email, $phoneNumber, $password, $idUser){
   $sql = "UPDATE user SET ho_ten = '$name', email = '$email', sdt = '$phoneNumber', mat_khau = '$password' WHERE id = '$idUser'";
   execSQL($sql,1);
}

?>
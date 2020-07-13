<?php
$myfile = fopen("./view/base/usernames.json", "w") or die("Unable to open file!");

// lấy cái tên tài khoản hiện có thêm vào json
$data = getUser();
$arr = array();
foreach($data as $i){
   array_push($arr, $i['tai_khoan']);
}
$txt = json_encode($arr);
fwrite($myfile, $txt);
fclose($myfile);


if(isset($_POST['uname'])){
   signUp($_POST['uname'],$_POST['pwd'],$_POST['email'],$_POST['fname'],$_POST['lname']);
   $_SESSION['user'] = checkLogin($_POST['uname'],$_POST['pwd']);
   header("Location: index.php");
}
include './view/signup.php';
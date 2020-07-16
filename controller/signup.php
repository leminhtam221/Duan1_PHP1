<?php
// $myfile = fopen("./view/base/usernames.json", "w") or die("Unable to open file!");

// lấy cái tên tài khoản hiện có thêm vào json
// $data1 = getUser();
// $data2 = getLecture();
// $arr = array_merge($data1, $data2);
// foreach($data1 as $i){
//    array_push($arr, $i['tai_khoan']);
// }
// foreach($data2 as $i){
//    array_push($arr, $i['tai_khoan']);
// }
// $txt = json_encode($arr);
// fwrite($myfile, $txt);
// fclose($myfile);

if(isset($_POST['uname'])){
   $user = [];
   if($_POST['type']=='hocvien'){
      userSignUp($_POST['uname'],$_POST['pwd'],$_POST['email'],$_POST['fname'],$_POST['lname']);
      $user = checkLogin($_POST['uname'],$_POST['pwd']);
   }
   if($_POST['type']=='giangvien'){
      lectureSignUp($_POST['uname'],$_POST['pwd'],$_POST['email'],$_POST['fname'],$_POST['lname']);
      $user = checkLoginGV($_POST['uname'],$_POST['pwd']);
   }
   setcookie("duan1_user[0]",$user['tai_khoan'], time() + (86400 * 180), "/");
   setcookie("duan1_user[1]",$user['ho_ten'], time() + (86400 * 180), "/");
   setcookie("duan1_user[2]",$user['email'], time() + (86400 * 180), "/");
   header("Location: index.php");
}
include './view/signup.php';
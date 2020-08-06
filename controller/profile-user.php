<?php
  if(isset($_GET['idUser'])){
    $idUser = $_GET['idUser'];
  }

  if(isset($_POST['submit-profile'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];

    if(isset($_COOKIE['user_id'])){
      capNhatThongTinUser($name, $email, $phoneNumber, $password, $idUser);
    }else{
      capNhatThongTinGV($name, $email, $phoneNumber, $password, $idUser);
    }
  }
  
  if(isset($_COOKIE['user_id'])){
    $thongTinUser = loadThongTinUser($idUser);
    $userType = "Học viên";
  }else{
    $thongTinUser = layThongTinGiangVien($idUser);
    $userType = "Giảng viên";
  }

  /*=====Check avatar=====*/
  if($thongTinUser['avatar'] == ""){
    $img = 'view/base/images/user-avatar.jpg';
  }else{
    if(file_exists('upload/avatar/'.$thongTinUser['avatar'].'')){
      $img = 'upload/avatar/'.$thongTinUser['avatar'].'';
    }else{
      $img = 'view/base/images/user-avatar.jpg';
    }
  }
  
  include "./view/profile-user.php";
?>
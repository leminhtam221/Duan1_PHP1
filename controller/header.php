<?php
 /*=============Load thong bao===========*/
  if(isset($_COOKIE['user_id']) || isset($_COOKIE['lecturer_id'])){
    if(isset($_COOKIE['user_id'])){
      $idUser = $_COOKIE['user_id'];
      $danhSachThongBao = loadThongBaoUser($idUser);
    }else{
      $idGiangVien = $_COOKIE['lecturer_id'];
      $danhSachThongBao = loadThongBaoGiangVien($idGiangVien);
    }
  }


  /*=============Load thong tin dang nhap===========*/
  if(isset($_COOKIE['user_id']) || isset($_COOKIE['lecturer_id'])){
    $log_id;           
    $table;
    if(isset($_COOKIE['user_id'])){
      $log_id = $_COOKIE['user_id'];
      $table = 'user';
    }else{
      $log_id = $_COOKIE['lecturer_id'];
      $table = 'giang_vien';
    }
    $logged = find("select * from $table where id=$log_id");

     /*====Check avatar===*/
    if($logged['avatar'] == ""){
      $img = 'view/base/images/user-avatar.jpg';
    }else{
      if(file_exists('upload/avatar/'.$logged['avatar'].'')){
        $img = 'upload/avatar/'.$logged['avatar'].'';
      }else{
        $img = 'view/base/images/user-avatar.jpg';
      }
    }
  }

  
  include "./view/header.php";
?>
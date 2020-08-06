<?php
  if(isset($_COOKIE['user_id']) || isset($_COOKIE['lecturer_id'])){
    if(isset($_COOKIE['user_id'])){
      $idUser = $_COOKIE['user_id'];
      $danhSachThongBao = loadThongBaoUser($idUser);
    }else{
      $idGiangVien = $_COOKIE['lecturer_id'];
      $danhSachThongBao = loadThongBaoGiangVien($idGiangVien);
    }
  }
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
  }
  include "./view/header.php";
?>
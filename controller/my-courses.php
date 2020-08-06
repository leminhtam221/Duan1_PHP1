<?php
  if(isset($_GET['id-user'])){
    $idUser = $_GET['id-user'];
  }
  if(isset($_COOKIE['user_id'])){
    $thongTinUser = loadThongTinUser($idUser);
    $userType = "Học viên";
  }else{
    $thongTinUser = layThongTinGiangVien($idUser);
    $userType = "Giảng viên";
  }
  
  if($thongTinUser['avatar'] == ""){
    $img = 'view/base/images/user-avatar.jpg';
  }else{
    if(file_exists('upload/avatar/'.$thongTinUser['avatar'].'')){
      $img = 'upload/avatar/'.$thongTinUser['avatar'].'';
    }else{
      $img = 'view/base/images/user-avatar.jpg';
    }
  }

  if(isset($_COOKIE['user_id'])){
    $danhSachKhoaHoc = [];

    $danhSachIdKhoaHoc = $thongTinUser['id_khoa_hoc_da_kich_hoat'];

    if(!empty($danhSachIdKhoaHoc)){
      $danhSachIdKhoaHoc =  explode(",",$danhSachIdKhoaHoc);
      $count = count($danhSachIdKhoaHoc);

      for ($i = $count - 1; $i >= 0 ; $i--) { 
        $idKhoaHoc = trim($danhSachIdKhoaHoc[$i]);
        $chiTietKhoaHoc = loadKhoaHocChiTiet($idKhoaHoc);
        array_push($danhSachKhoaHoc, $chiTietKhoaHoc);
      }
    }
  }else{
    $danhSachKhoaHoc = loadKhoaHocTheoGiangVien($idUser);
  }

  $danhSachDanhMuc = loadDanhMuc();
  include "./view/my-courses.php";
?>
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

  if(isset($_COOKIE['user_id'])){
    $danhSachKhoaHoc = [];

    $danhSachIdKhoaHoc = $thongTinUser['id_khoa_hoc_da_kich_hoat'];

    if(!empty($danhSachIdKhoaHoc)){
      $danhSachIdKhoaHoc =  explode(" ",$danhSachIdKhoaHoc);
      $count = count($danhSachIdKhoaHoc);

      for ($i = $count - 1; $i >= 0 ; $i--) { 
        $idKhoaHoc = $danhSachIdKhoaHoc[$i];
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
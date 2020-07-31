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
    $danhSachIdKhoaHoc = [];
    $danhSachKhoaHoc = [];
    $danhSachDonHang = loadDonHangDaThanhToan($idUser);
    foreach ($danhSachDonHang as $donHang) {
      $arrayChiTietDonHang = loadChiTietDonHang($donHang['id']);
      foreach ($arrayChiTietDonHang as $chiTietDonHang) {
        array_push($danhSachIdKhoaHoc, $chiTietDonHang['id_khoa_hoc']);
      }
    }
    foreach ($danhSachIdKhoaHoc as $idKhoaHoc) {
      $chiTietKhoaHoc = loadKhoaHocChiTiet($idKhoaHoc);
      array_push($danhSachKhoaHoc, $chiTietKhoaHoc);
    }
  }else{
    $danhSachKhoaHoc = loadKhoaHocTheoGiangVien($idUser);
  }

  $danhSachDanhMuc = loadDanhMuc();

  if(isset($_POST['submit-add-courses'])){
    $tenKhoaHoc = $_POST['tenkhoahoc'];
    $idDanhMuc = $_POST['danhmuc'];
    $hinhAnh = $_POST['hinhanh'];
    $clip = $_POST['clip'];
    $moTa = $_POST['mota'];
    $donGia = $_POST['dongia'];
    $khuyenMai = $_POST['khuyenmai'];
    themKhoaHoc($tenKhoaHoc,$clip,$hinhAnh,$moTa,$idDanhMuc,$donGia,$khuyenMai,$idUser);
    $danhSachKhoaHoc = loadKhoaHocTheoGiangVien($idUser);
  }
  include "./view/my-courses.php";
?>
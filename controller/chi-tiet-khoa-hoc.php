<?php 
  if(isset($_GET['id-khoa-hoc'])){
    $idKhoaHoc = $_GET['id-khoa-hoc'];

  $chiTietKhoaHoc = loadKhoaHocChiTiet($idKhoaHoc);
  $idGiangVien = $chiTietKhoaHoc['id_giang_vien'];
  $giangVien = layThongTinGiangVien($idGiangVien);

  $danhSachBinhLuan = loadComment($idKhoaHoc);
  $danhSachChuongKhoaHoc = loadChuongTheoKhoaHoc($idKhoaHoc);
  $tenDanhMuc = layTenDanhMuc($chiTietKhoaHoc['id_danh_muc']);
  }

  // if(isset($_POST['submit-comment'])){
  //     $commentContent = $_POST['commentContent'];
  //     $idUser = $_POST['idUser'];
  //     addComment($commentContent,$idKhoaHoc,$idUser);
  // }
  include './view/course-detail.php';
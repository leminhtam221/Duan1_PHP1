<?php 
  if(isset($_GET['id-khoa-hoc'])){
    $idKhoaHoc = $_GET['id-khoa-hoc'];
  }

  if(isset($_POST['submit-comment'])){
      $commentContent = $_POST['commentContent'];
      $idKhoaHoc = $_POST['idKhoaHoc'];
      $idUser = $_POST['idUser'];
      addComment($commentContent,$idKhoaHoc,$idUser);
  }

  $chiTietKhoaHoc = loadKhoaHocChiTiet($idKhoaHoc);
  echo $chiTietKhoaHoc['id'];
  $idGiangVien = $chiTietKhoaHoc['id_giang_vien'];
  $giangVien = layThongTinGiangVien($idGiangVien);
  
  $danhSachBinhLuan = loadComment($idKhoaHoc);

  $danhSachChuongKhoaHoc = loadChuongTheoKhoaHoc($idKhoaHoc);
  
  $tenDanhMuc = layTenDanhMuc($chiTietKhoaHoc['id_danh_muc']);
  include './view/course-detail.php';
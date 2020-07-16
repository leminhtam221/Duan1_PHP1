<?php 
  if(isset($_GET['id-khoa-hoc'])){
    $idKhoaHoc = $_GET['id-khoa-hoc'];
    
  }

  if(isset($_POST['submit-comment'])){
      $commentContent = $_POST['commentContent'];
      $idKhoaHoc = $_POST['id-khoa-hoc'];
      $idUser = $_POST['idUser'];
      addComment($commentContent,$idKhoaHoc,$idUser);
  }

  $chiTietKhoaHoc = loadKhoaHocChiTiet($idKhoaHoc);
  $idGiangVien = $chiTietKhoaHoc['id_giang_vien'];
  $giangVien = layThongTinGiangVien($idGiangVien);
  
  $danhSachBinhLuan = loadComment($idKhoaHoc);
  
  include './view/course-detail.php';
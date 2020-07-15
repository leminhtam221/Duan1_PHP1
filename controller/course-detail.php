<?php 
  if(isset($_GET['idKhoaHoc'])){
    $idKhoaHoc = $_GET['idKhoaHoc'];
    $chiTietKhoaHoc = loadKhoaHocChiTiet($idKhoaHoc);
    

    $idGiangVien = $chiTietKhoaHoc['id_giang_vien'];
    $giangVien = layThongTinGiangVien($idGiangVien);
  }

  include './view/course-detail.php';
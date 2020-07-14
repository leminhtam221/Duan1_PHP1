<?php
  if(isset($_GET['idDanhMuc'])){
    $idDanhMuc = $_GET['idDanhMuc'];
  }else{
    $idDanhMuc = 0;
  }

  if(isset($_POST['submit-search'])){
    $keyWord = $_POST['input-search'];
    $idDanhMuc = $_POST['select-value'];
  }else{
    $keyWord = ""; 
  }

  if(isset($_GET['trang']) && (isset($_GET['trang']) > 0)){
    $trang = $_GET['trang'];
  }else{
    $trang = 1;
  }

  $danhSachKhoaHoc = loadKhoaHocTheoDanhMuc($idDanhMuc, $keyWord, $trang);

  $tongSoKhoaHoc = count(tongSoLuong($idDanhMuc));
  $phanTrang = phanTrang($idDanhMuc, $trang, $tongSoKhoaHoc);
  include './view/courses.php';

?>
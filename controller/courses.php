<?php
  if(isset($_GET['idDanhMuc'])){
    $idDanhMuc = $_GET['idDanhMuc'];
  }else{
    $idDanhMuc = 0;
  }

  $danhSachKhoaHoc = loadKhoaHocTheoDanhMuc($idDanhMuc);
  include './view/courses.php';

?>
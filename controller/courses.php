<?php
  if(isset($_GET['idDanhMuc'])){
    $idDanhMuc = $_GET['idDanhMuc'];
  }else{
    $idDanhMuc = 0;
  }

  if(isset($_POST['submit-search'])){
    $keyWord = $_POST['input-search'];
    $idDanhMuc = $_POST['select-value'];
  }

  $danhSachKhoaHoc = loadKhoaHocTheoDanhMuc($idDanhMuc, $keyWord);
  include './view/courses.php';

?>
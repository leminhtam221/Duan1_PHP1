<?php
  if(isset($_GET['id-khoa-hoc'])){
    $idKhoaHoc = $_GET['id-khoa-hoc'];
  }

  $danhSachChuongKhoaHoc = loadChuongTheoKhoaHoc($idKhoaHoc);
  include "./view/my-course-detail.php";
?>
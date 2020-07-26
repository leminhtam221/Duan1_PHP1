<?php
  if(isset($_GET['id-khoa-hoc']) && $_GET['id-user']){
    $idKhoaHoc = $_GET['id-khoa-hoc'];
    $idUser = $_GET['id-user'];
  }

  $danhSachChuongKhoaHoc = loadChuongTheoKhoaHoc($idKhoaHoc);
  $videoIntro = loadVideoGioiThieu($idKhoaHoc);

  include "./view/my-course-detail.php";
?>
<?php
  if(isset($_GET['id-khoa-hoc']) && $_GET['id-user']){
    $idKhoaHoc = $_GET['id-khoa-hoc'];
    $idUser = $_GET['id-user'];
  }

  $danhSachChuongKhoaHoc = loadChuongTheoKhoaHoc($idKhoaHoc);
<<<<<<< HEAD
=======
  $videoIntro = loadVideoGioiThieu($idKhoaHoc);

>>>>>>> e6aabd3a86ae2c27a440824b6dc7d7428f4eb581
  include "./view/my-course-detail.php";
?>
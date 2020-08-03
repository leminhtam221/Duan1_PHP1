<?php
  require_once "../model/DB.php";
  require_once "../model/ma-kich-hoat.php";
  require_once "../model/user.php";

  if(isset($_COOKIE['user_id'])){
    if(isset($_POST['activateCode'])){
      $idUser = $_COOKIE['user_id'];
      $maKichHoat = $_POST['activateCode'];
      $checkCode =  kiemTraMaKichHoat($maKichHoat);

      if(empty($checkCode )){
        echo "Mã kích hoạt không chính xác";
      }else{
        $thongTinUser = loadThongTinUser($idUser);
        $idKhoaHocUser = $thongTinUser['id_khoa_hoc_da_kich_hoat'];
        $idKhoaHoc =  $checkCode['id_khoa_hoc'];

        if(empty($idKhoaHocUser)){
          themMaKhoaHocDaKichHoat($idUser, $idKhoaHoc);
          deleteMaKichHoat($checkCode['id']);
        }else{
          $idKhoaHoc = $idKhoaHocUser.", ".$idKhoaHoc;
          themMaKhoaHocDaKichHoat($idUser, $idKhoaHoc);
          deleteMaKichHoat($checkCode['id']);
        }
        echo "Kích hoạt thành công";
      }

    }
  }else{
    if(isset($_COOKIE['lecturer_id'])){
      echo "Chỉ user mới được nhập mã kích hoạt";
    }else{
      echo "Vui lòng đăng nhập trước khi nhập mã kích hoạt";
    }
  }
?>
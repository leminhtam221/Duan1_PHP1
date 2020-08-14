<?php
  require_once "./../model/DB.php";
  require_once "./../model/thong-bao.php";
  require_once "./../model/ma-kich-hoat.php";

  if(isset($_POST['checkoutSuccess'])){
    if(isset($_COOKIE['user_id'])){
      $idUser = $_COOKIE['user_id'];
      $cartArr = explode(',',$_COOKIE['cart']);
      foreach ($cartArr as $item) {
        $maKichHoat = generateRandomString();
        $noiDung = "Mã kích hoạt của bạn khóa học của bạn là ".$maKichHoat;
        $url = "index.php?act=kich-hoat-khoa-hoc";
        addMaKichHoat($maKichHoat, $item);
        addThongBao($noiDung, $url, 1, $idUser);
      }
      $thongBao = loadThongBaoUser($idUser);
      $counter = counter("thong_bao", "WHERE trang_thai = 1 AND id_user = ".$idUser."");
      echo json_encode(array($counter, $thongBao));
    }
  }

  function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
?>
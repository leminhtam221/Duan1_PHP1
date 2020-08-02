<?php
  require_once "../model/DB.php";
  require_once "../model/user.php";
  require_once "../model/giang-vien.php";

  if(isset($_POST['idUser']) && isset($_POST['hinhAnh']) && isset($_POST['updateAvatar'])){
    $idUser = $_POST['idUser'];
    $hinhAnh = $_POST['hinhAnh'];

    if(isset($_COOKIE['user_id'])){
      capNhatAvatarUser($idUser, $hinhAnh);
    }else{
      capNhatAvatarGiangVien($idUser, $hinhAnh);
    }
    echo  $hinhAnh;
    
  }

  if(isset($_POST['idUser']) && isset($_POST['removeAvatar'])){
    $idUser = $_POST['idUser'];

    if(isset($_COOKIE['user_id'])){
      $user = loadThongTinUser($idUser);
      if($user['avatar'] !=""){
        $hinhAnh = $user['avatar'];
      }else{
        $hinhAnh = "notfound";
      }
      
    }else{
      $user = layThongTinGiangVien($idUser);
      if($user['avatar'] !=""){
        $hinhAnh = $user['avatar'];
      }else{
        $hinhAnh = "notfound";
      }
    }
    echo  $hinhAnh;
    
  }
?>
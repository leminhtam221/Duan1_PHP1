<?php
  require_once "./../model/DB.php";
  require_once "./../model/thong-bao.php";

  if(isset($_POST['seenNotification']) && isset($_POST['idPeople'])){
    $idPeople = $_POST['idPeople'];
    if(isset($_COOKIE['user_id'])){
      notificationHaveSeen($idPeople,"id_user");
    }else if(isset($_COOKIE['lecturer_id'])){
      notificationHaveSeen($idPeople,"id_giang_vien");
    }
    echo true;
  }

  if(isset($_POST['seenDetailNotification'])){
    $idThongBao = $_POST['idNotification'];
    detailNotificationHaveSeen($idThongBao);
    echo true;
  }
?>
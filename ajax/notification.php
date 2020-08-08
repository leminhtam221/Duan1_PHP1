<?php
  require_once "./../model/DB.php";
  require_once "./../model/thong-bao.php";

  if(isset($_POST['seenNotification'])){
    notificationHaveSeen();
    echo true;
  }

  if(isset($_POST['seenDetailNotification'])){
    $idThongBao = $_POST['idNotification'];
    detailNotificationHaveSeen($idThongBao);
    echo true;
  }
?>
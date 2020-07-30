<?php
  require_once "./../../model/DB.php";
  require_once "./../../model/video.php";

  if(isset($_GET['idVideo'])){
    $idVideo = $_GET['idVideo'];
    $chiTietVideo = loadChiTietVideo($idVideo);
    echo $chiTietVideo['link'];
  }
  
  
?>
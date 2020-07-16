<?php
  
  $controller = 'trang-chu';
  include "./view/header.php";
  $danhSachDanhMuc = loadDanhMuc();

  if(isset($_GET['act'])){
    if(file_exists("./controller/".$_GET['act'].".php")){
       $controller = $_GET['act'];
    }
  }
  include "./controller/".$controller.".php";

  include "./view/footer.php";
  include "./view/base/script.php";
?>
<?php
  
  $controller = 'trang-chu';

  include "./controller/header.php";
  $danhSachDanhMuc = loadDanhMuc();
  
  if(isset($_GET['act'])){
    if(file_exists("./controller/".$_GET['act'].".php")){
       $controller = $_GET['act'];
    }
  }
  include "./controller/".$controller.".php";

  include "./view/base/script.php";
  include "./view/footer.php"; 
?>
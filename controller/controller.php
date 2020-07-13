<?php

  include "./view/header.php";

  $action = isset($_GET['act'])?($_GET['act']):'trang-chu';
  switch($action){
    case 'trang-chu':
      include "./controller/home.php";
      break;
    case 'khoa-hoc':
      include "./controller/courses.php";
      break;
    case 'dang-nhap':
      include "./controller/signin.php";
      break;
    case 'dang-ky':
      include "./controller/signup.php";
      break;
    case 'dang-xuat':
      unset($_SESSION['user']);
      header("Location: index.php?act=dang-nhap");
      break;
    case 'thong-tin':
      include "./controller/about.php";
      break;
    case 'bai-viet':
      include "./controller/blog.php";
      break;
    case 'lien-he':
      include "./controller/contact.php";
      break;
    case 'gio-hang':
      include "./controller/cart.php";
      break;
    default: 
      include "./view/404.php";
      break;
  }

  include "./view/footer.php";
  include "./view/base/script.php";
?>
<?php

  include "./view/header.php";
  $danhSachDanhMuc = loadDanhMuc();

  $action = isset($_GET['act'])?($_GET['act']):'trang-chu';
  switch($action){
    case 'trang-chu':
      include "./controller/home.php";
      break;
    case 'khoa-hoc':
      include "./controller/courses.php";
      break;
    case 'khoa-hoc-chi-tiet':
      include "./controller/course-detail.php";
      break;
    case 'binh-luan':
      include "./controller/binh-luan.php";
      break;
    case 'dang-nhap':
      include "./controller/signin.php";
      break;
    case 'dang-ky':
      include "./controller/signup.php";
      break;
    case 'dang-xuat':
      setcookie("duan1_user[0]",'', time() - (86400 * 180), "/");
      setcookie("duan1_user[1]",'', time() - (86400 * 180), "/");
      setcookie("duan1_user[2]",'', time() - (86400 * 180), "/");
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
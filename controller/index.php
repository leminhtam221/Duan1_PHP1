<?php

  include __DIR__."/../view/header.php"; // __DIR__ đường dẫn hiện tại - cố định

  $action;
  $action = isset($_GET['act'])?($_GET['act']):'home';
  switch($action){
    case 'home':
      include __DIR__."/../view/home.php";
      break;
    case 'courses':
      include __DIR__."/../view/courses.php";
      break;
    case 'signin':
      include __DIR__."/../view/signin.php";
      break;
    case 'signup':
      include __DIR__."/../view/signup.php";
      break;
    default: 
      include __DIR__."/../view/404.php";
  }

  include __DIR__."/../view/footer.php";
  include __DIR__."/../view/script.php";
?>
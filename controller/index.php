<?php

  include "./view/header.php";

  $action = isset($_GET['act'])?($_GET['act']):'home';
  switch($action){
    case 'home':
      include "./view/home.php";
      break;
    case 'courses':
      include "./view/courses.php";
      break;
    case 'signin':
      include "./view/signin.php";
      break;
    case 'signup':
      include "./view/signup.php";
      break;
    default: 
      include "./view/404.php";
      break;
  }

  include "./view/footer.php";
  include "./view/script.php";
?>
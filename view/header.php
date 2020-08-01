<!doctype html>
<html lang="en">

<head>
  <title>Courcity</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon icon -->
  <link rel="shortcut icon" type="image/png" href="./view/base/images/favicon.png" />
  <!-- Bootstrap -->
  <link href="./view/base/css/bootstrap.min.css" rel="stylesheet">
  <!-- Fontawsome -->
  <link href="./view/base/fonts/css/fontawesome-all.min.css" rel="stylesheet">
  <!-- Animate CSS-->
  <link href="./view/base/css/animate.css" rel="stylesheet">
  <!-- menu CSS-->
  <link href="./view/base/css/bootstrap-4-navbar.css" rel="stylesheet">
  <!-- menu CSS-->
  <link href="./view/base/slick/slick.css" rel="stylesheet">
  <!-- Lightbox Gallery -->
  <link href="./view/base/inc/lightbox/css/jquery.fancybox.css" rel="stylesheet">
  <!-- Preloader CSS-->
  <link href="./view/base/css/fakeLoader.css" rel="stylesheet">
  <!-- Video popup CSS-->
  <link href="./view/base/css/magnific-popup.css" rel="stylesheet">
  <!-- Main CSS -->
  <link href="./view/base/style.css" rel="stylesheet">
  <!-- Color CSS -->
  <link href="./view/base/css/color-switcher.css" rel="stylesheet">
  <!-- Responsive CSS -->
  <link href="./view/base/css/responsive.css" rel="stylesheet">
</head>

<body>

  <!-- Preloader -->
  <div id="fakeloader"></div>

  <div class="alertbox-1x">
    <div class="alert alert-dismissible fade show" role="alert">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="nav">
              <a class="nav-link" href="#">Kích Hoạt Khóa Học</a>
              <a class="nav-link" href="#">Tham Gia Dạy Học </a>
              <?php if(isset($_COOKIE['user_id'])||isset($_COOKIE['lecturer_id'])): ?>
              <?php
                $log_id;           
                if(isset($_COOKIE['user_id'])){
                  $log_id = $_COOKIE['user_id'];
                }else{
                  $log_id = $_COOKIE['lecturer_id'];
                }
              ?>
              <a class="nav-link" href="index.php?act=my-courses&id-user=<?=$log_id?>">Khóa Học Của Tôi</a>
              <?php else: ?>
              <a class="nav-link" href="index.php?act=dang-nhap">Khóa Học Của Tôi</a>
              <?php endif ?>

              <?php if(!isset($_COOKIE['user_id'])&&!isset($_COOKIE['lecturer_id'])): ?>
              <a class="nav-link" href="index.php?act=dang-ky">Đăng Ký</a>
              <a class="nav-link" href="index.php?act=dang-nhap">Đăng Nhập</a>
              <?php elseif(isset($_COOKIE['user_id'])||isset($_COOKIE['lecturer_id'])): ?>
              <?php
                $log_id;           
                $table;
                if(isset($_COOKIE['user_id'])){
                  $log_id = $_COOKIE['user_id'];
                  $table = 'user';
                }else{
                  $log_id = $_COOKIE['lecturer_id'];
                  $table = 'giang_vien';
                }
                $logged = find("select * from $table where id=$log_id");
              ?>
              <div class="menu">
                <a style="cursor:pointer" id="user-btn" class="nav-link"><b><?=@$logged['tai_khoan']?>&nbsp;<i
                      class="fa fa-caret-down"></i></b>
                </a>
                <div id="user-dd">
                  <div>
                    <img src="./view/base/images/user-avatar.jpg" alt="">
                    <div>
                      <p><?=@$logged['ho_ten']?></p>
                      <p style="font-size: 0.7rem;margin-top: 0px;"><?=@$logged['email']?></p>
                    </div>
                  </div>
                  <a class="nav-link" href="index.php?act=profile-user&idUser=<?=$log_id?>"
                    style="border-bottom: 1px solid #eee;">Quản Lí
                    Tài Khoản</a>
                  <a class="nav-link" href="index.php?act=dang-xuat">Đăng Xuất</a>
                </div>
              </div>
              <?php endif ?>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main-menu-1x">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light btco-hover-menu">
              <a class="navbar-brand" href="index.php?act=trang-chu">
                <img src="./view/base/images/logo.png" class="d-inline-block align-top" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto main-menu-nav">

                  <li class="nav-item <?=!isset($_GET['act'])||$_GET['act']=='trang-chu'?'active':''?>">
                    <a class="nav-link" href="index.php?act=trang-chu">
                      Trang Chủ <span class="sr-only">(current)</span>
                    </a>
                  </li>

                  <li class="nav-item <?=@$_GET['act']=='khoa-hoc'||$_GET['act']=='chi-tiet-khoa-hoc'?'active':''?>">
                    <a class="nav-link" href="index.php?act=khoa-hoc">
                      Khóa Học
                    </a>
                  </li>

                  <li class="nav-item <?=@$_GET['act']=='thong-tin'?'active':''?>">
                    <a class="nav-link" href="index.php?act=thong-tin">Thông Tin</a>
                  </li>

                  <li class="nav-item <?=@$_GET['act']=='bai-viet'?'active':''?>">
                    <a class="nav-link" href="index.php?act=bai-viet">
                      Blog
                    </a>
                  </li>

                  <li class="nav-item <?=@$_GET['act']=='lien-he'?'active':''?>">
                    <a class="nav-link" href="index.php?act=lien-he">Liên Hệ</a>
                  </li>

                  <li class="nav-item begin">
                    <a class="nav-link btn-cart" href="index.php?act=gio-hang"><img
                        src="./view/base/images/cart-icon.png" alt="">
                      <span id="cart-counter"><?=rowCount()?></span>
                    </a>
                  </li>

                </ul>

              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
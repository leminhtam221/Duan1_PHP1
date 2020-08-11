<?php 
  if(isset($_GET['id-khoa-hoc'])){
    $idKhoaHoc = $_GET['id-khoa-hoc'];

    $chiTietKhoaHoc = loadKhoaHocChiTiet($idKhoaHoc);
    $idGiangVien = $chiTietKhoaHoc['id_giang_vien'];
    $giangVien = layThongTinGiangVien($idGiangVien);

    $danhSachBinhLuan = loadComment($idKhoaHoc);
    $danhSachChuongKhoaHoc = loadChuongTheoKhoaHoc($idKhoaHoc);
    $tenDanhMuc = layTenDanhMuc($chiTietKhoaHoc['id_danh_muc']);

    /*=====Check hình ảnh khóa học=====*/
    if($chiTietKhoaHoc['hinh_anh'] == ""){
      $img = 'view/base/images/default-image.jpg';
    }else{
      if(file_exists('upload/courses/'.$chiTietKhoaHoc['hinh_anh'].'')){
        $img = 'upload/courses/'.$chiTietKhoaHoc['hinh_anh'].'';
      }else{
        $img = 'view/base/images/default-image.jpg';
      }
    }

    /*=====Check avatar=====*/
    if($giangVien['avatar'] == ""){
      $imgGV = 'view/base/images/user-avatar.jpg';
    }else{
      if(file_exists('upload/avatar/'.$giangVien['avatar'].'')){
        $imgGV = 'upload/avatar/'.$giangVien['avatar'].'';
      }else{
        $imgGV = 'view/base/images/user-avatar.jpg';
      }
    }

    if(!empty($chiTietKhoaHoc['clip'])){
      $url = $chiTietKhoaHoc['clip'];
      preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
      $youtubeId = $match[1];
    }

    /*====Load danh sách khóa học liên quan===*/
    $danhSachKhoaHoc = loadAllKhoaHocTheoDanhMuc($chiTietKhoaHoc['id_danh_muc']);
  }
  
  include './view/course-detail.php';
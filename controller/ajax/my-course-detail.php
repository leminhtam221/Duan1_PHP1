<?php
  require_once "./../../model/DB.php";
  require_once "./../../model/video.php";
  require_once "./../../model/chuong.php";
  require_once "./../../model/video.php";

  if(isset($_POST['idVideo'])){
    $idVideo = $_POST['idVideo'];
    $chiTietVideo = loadChiTietVideo($idVideo);
    echo $chiTietVideo['link'];
  }

  // Thêm chương học
  if(isset($_POST['idKhoaHoc']) && isset($_POST['tenChuongHoc']) && isset($_POST['themChuong'])){
    $idKhoaHoc = $_POST['idKhoaHoc'];
    $tenChuongHoc = $_POST['tenChuongHoc'];

    themChuongHoc($tenChuongHoc, $idKhoaHoc);

    $danhSachChuongKhoaHoc = loadChuongTheoKhoaHoc($idKhoaHoc);
    $html = "";
    foreach ($danhSachChuongKhoaHoc as $chuongHoc) {
      $idChuong = $chuongHoc['id'];
      $danhSachVideo = loadVideoTheoChuongHoc($idChuong);
      $html.= '<div class="card my-2">
              <div class="card-header py-3" data-toggle="collapse" data-target="#collapse'.$idChuong.'"
                aria-expanded="true" aria-controls="collapse'.$idChuong.'">
                <h6 class="mb-0 accordion__heading">
                  '.$chuongHoc['ten_chuong'].'
                  <span class="accordion__sub">4 Bài</span>
                </h6>
              </div>
    
              <div id="collapse'.$idChuong.'" class="collapse">
                <div class="card-body">
                  <ul class="lesson-list" id="'.$idChuong.'">';
                               
                  foreach ($danhSachVideo as $video) {
                    $html.= '<li class="lesson-item">
                            <a href="#id-video='.$video['id'].'" class="lession-title">'.$video['ten_video'].'</a>
                            <span class="lesson-time">00:48</span>
                          </li>';
                  }
      $html.=  '     </ul>
                </div>';
                if(isset($_COOKIE['lecturer_id'])){
                  $html.= '<button class="btn btn-primary ml-3 mb-3" onclick="themVideo('.$idChuong.')" data-toggle="modal" data-target="#cruVideoModal">Thêm video</button>';
                  $html.= '<button class="btn btn-danger ml-3 mb-3" onclick="suaChuongHoc('.$idChuong.')" data-toggle="modal" data-target="#cruCourseModal">Sửa chương học</button>';
                }
      $html.=  '  </div>
            </div>';              
    }

    echo  $html;
  }

  // Cập nhật chương học
  if(isset($_POST['idChuong']) && isset($_POST['layThongTinChuong'])){
    $idChuong = $_POST['idChuong'];
    $chiTietChuongHoc = loadChiTietChuongHoc($idChuong);
    echo $chiTietChuongHoc['ten_chuong'];
  }
  
  if(isset($_POST['idKhoaHoc']) && isset($_POST['tenChuongHoc']) && isset($_POST['capNhatChuong'])){
    $idKhoaHoc = $_POST['idKhoaHoc'];
    $idChuong = $_POST['idChuong'];
    $tenChuongHoc = $_POST['tenChuongHoc'];
   
    capNhatChuongHoc($idChuong,$tenChuongHoc);
    $danhSachChuongKhoaHoc = loadChuongTheoKhoaHoc($idKhoaHoc);
    $html = "";
    foreach ($danhSachChuongKhoaHoc as $chuongHoc) {
      $idChuong = $chuongHoc['id'];
      $danhSachVideo = loadVideoTheoChuongHoc($idChuong);
      $html.= '<div class="card my-2">
              <div class="card-header py-3" data-toggle="collapse" data-target="#collapse'.$idChuong.'"
                aria-expanded="true" aria-controls="collapse'.$idChuong.'">
                <h6 class="mb-0 accordion__heading">
                  '.$chuongHoc['ten_chuong'].'
                  <span class="accordion__sub">4 Bài</span>
                </h6>
              </div>
    
              <div id="collapse'.$idChuong.'" class="collapse">
                <div class="card-body">
                  <ul class="lesson-list" id="'.$idChuong.'">';
                               
                  foreach ($danhSachVideo as $video) {
                    $html.= '<li class="lesson-item">
                            <a href="#id-video='.$video['id'].'" class="lession-title">'.$video['ten_video'].'</a>
                            <span class="lesson-time">00:48</span>
                          </li>';
                  }
      $html.=  '     </ul>
                </div>';
                if(isset($_COOKIE['lecturer_id'])){
                  $html.= '<button class="btn btn-primary ml-3 mb-3" onclick="themVideo('.$idChuong.')" data-toggle="modal" data-target="#cruVideoModal">Thêm video</button>';
                  $html.= '<button class="btn btn-danger ml-3 mb-3" onclick="suaChuongHoc('.$idChuong.')" data-toggle="modal" data-target="#cruCourseModal">Sửa chương học</button>';
                }
      $html.=  '  </div>
            </div>';              
    }

    echo  $html;
  }

  // Thêm video
  if(isset($_POST['idKhoaHoc']) && isset($_POST['tenVideo'])){
    $idKhoaHoc = $_POST['idKhoaHoc'];
    $idGiangVien = $_POST['idGiangVien'];
    $idChuong = $_POST['idChuong'];
    $tenVideo = $_POST['tenVideo'];
    $link = $_POST['link'];

    themVideo($tenVideo,$link,$idKhoaHoc,$idGiangVien,$idChuong);
    $html = "";

    $danhSachVideo = loadVideoTheoChuongHoc($idChuong);
    foreach ($danhSachVideo as $video) {
      $html.= '<li class="lesson-item">
                <a href="#id-video='.$video['id'].'" class="lession-title">'.$video['ten_video'].'</a>
                <span class="lesson-time">00:48</span>
              </li>';
    }
    echo $html;
  }

?>
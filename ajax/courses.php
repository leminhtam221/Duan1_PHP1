<?php
  require_once "./../model/DB.php";
  require_once "./../model/courses.php";
  require_once "./../model/giang-vien.php";

  if(isset($_POST['minPrice']) && isset($_POST['maxPrice'])){
    $idDanhMuc = $_POST['idDanhMuc'];
    $trang = $_POST['trang'];
    $minPrice = $_POST['minPrice'];
    $maxPrice = $_POST['maxPrice'];
    $orderCourses = $_POST['orderCourses'];

    switch ($orderCourses) {
      case '1':
        $sqlOrder = "order by id desc";
        break;
      case '2':
        $sqlOrder = "order by luot_mua desc";
        break;
      case '3':
        $sqlOrder = "order by id asc";
        break;
    }
    $resultFilter = fillterKhoaHoc($idDanhMuc,$trang, $minPrice, $maxPrice, $sqlOrder);
    $tongSoKhoaHoc = counter('khoa_hoc', 'WHERE don_gia BETWEEN '.$minPrice.' AND '.$maxPrice.' AND id_danh_muc = '.$idDanhMuc.'');
    $phanTrang = phanTrangResultFilter($idDanhMuc, $trang, $tongSoKhoaHoc['sl']);

    $html = renderHTML($resultFilter,$phanTrang);
    echo $html;
  }


  


  function renderHTML($arr, $phanTrang){
    $html = "";
    foreach ($arr as $khoaHoc) {
      $tenGiangVien = layTenGiangVien($khoaHoc['id_giang_vien']);
      $tenGiangVien =  $tenGiangVien['ho_ten'];
      if($khoaHoc['hinh_anh'] == ""){
        $img = 'view/base/images/default-image.jpg';
      }else{
        if(file_exists('./../upload/courses/'.$khoaHoc['hinh_anh'].'')){
          $img = 'upload/courses/'.$khoaHoc['hinh_anh'].'';
        }else{
          $img = 'view/base/images/default-image.jpg';
        }
      }

      $html .= '<div class="col-md-4">
                  <div class="single-course">
                    <div class="hvrbox">
                      <img src="'.$img.'" class="hvrbox-layer_bottom">
                      <div class="hvrbox-layer_top hvrbox-text">
                        <div class="hvrbox-text">
                          <a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i
                              class="fas fa-play"></i></a><br>
                          <a href="index.php?act=chi-tiet-khoa-hoc&id-khoa-hoc='.$khoaHoc['id'].'">Preview Course</a>
                        </div>
                      </div>
                    </div>
                    <div class="single-course-content">
                      <a href="index.php?act=chi-tiet-khoa-hoc&id-khoa-hoc='.$khoaHoc['id'].'" class="courses-title">'.$khoaHoc['ten_khoa_hoc'].'</a>
                      <p>'.$tenGiangVien.' </p>
                      <div class="d-flex justify-content-start my-2"><span><del class="mr-2">1000000đ</del> <b>'.$khoaHoc['don_gia'].' đ</b></span></div>
                      <div class="d-flex justify-content-between" style="margin-top:0.5rem" aria-label="Basic example">
                        <a prodid="'.$khoaHoc['id'].'" style="cursor:pointer;background-color:#fb3958;color:#fff;border:0" class="btn btn-add"><i class="fa fa-cart-plus"></i></a>
                        <a href="index.php?act=chi-tiet-khoa-hoc&id-khoa-hoc='.$khoaHoc['id'].'" style="background-color:#02b3e4;color:#fff;border:0" class="btn">Mua ngay</a>
                      </div>
                      <h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i> (4)
                        <span>Ghi danh: '.$khoaHoc['luot_mua'].'</span>
                      </h3>
                    </div>
                  </div>
                </div>';
    }
    $html .= '<div class="col-md-12">
                <div class="course-pagination">
                  <ul class="pagination">
                    '.$phanTrang.'
                    <li class="page-item">
                      <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                    </li>
                  </ul>
                </div>
              </div>';
  return $html;
}
?>
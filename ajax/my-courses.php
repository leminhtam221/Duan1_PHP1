<?php
  require_once "./../model/DB.php";
  require_once "./../model/courses.php";
  require_once "./../model/giang-vien.php";

  if(isset($_POST['idUser']) && isset($_POST['tenKhoaHoc'])){
    $idUser = $_POST['idUser'];
    $tenKhoaHoc = $_POST['tenKhoaHoc'];
    $idDanhMuc = $_POST['danhMuc'];
    $hinhAnh = $_POST['hinhAnh'];
    $clip = $_POST['clip'];
    $moTa = $_POST['moTa'];
    $donGia = $_POST['donGia'];
    $khuyenMai = $_POST['khuyenMai'];

    themKhoaHoc($tenKhoaHoc,$clip,$hinhAnh,$moTa,$idDanhMuc,$donGia,$khuyenMai,$idUser);
    $danhSachKhoaHoc = loadKhoaHocTheoGiangVien($idUser);
    $html = "";
    foreach ($danhSachKhoaHoc as $khoaHoc) {
      $tenGiangVien = layTenGiangVien($khoaHoc['id_giang_vien']);

      if($khoaHoc['hinh_anh'] == ""){
        $img = 'view/base/images/default-image.jpg';
      }else{
        if(file_exists('../upload/courses/'.$khoaHoc['hinh_anh'].'')){
          $img = 'upload/courses/'.$khoaHoc['hinh_anh'].'';
        }else{
          $img = 'view/base/images/default-image.jpg';
        }
      }
      $html.= '<div class="col-md-4">
                <div class="single-course">
                  <div class="hvrbox">
                    <a href="index.php?act=my-course-detail">
                      <img src="'.$img.'" class="hvrbox-layer_bottom">
                    </a>
                  </div>
                  <div class="single-course-content">
                    <a href="index.php?act=my-course-detail&id-khoa-hoc='.$khoaHoc['id'].'&id-user='.$idUser.'">'.$khoaHoc['ten_khoa_hoc'].'</a>
                    <p>'.$tenGiangVien['ho_ten'].'
                      <span class="btn btn-warning px-2 py-0 text-light"
                      onclick="statusCourse(this,false,'.$khoaHoc['id'].')">Ẩn</span>
                    </p>
                    <h3>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i> (5)
                      <span>Ghi danh: 0</span>
                    </h3>
                  </div>
                </div>
              </div>';
    }
    echo $html;
  }

  if(isset($_POST['statusCourse'])){
    $stausCourse = $_POST['statusCourse'];
    $idCourse = $_POST['idCourse'];
    if($stausCourse == 'true'){
      $sql = "UPDATE khoa_hoc SET trang_thai = 1 WHERE id = '$idCourse'";
      execSQL($sql,1);
    }else{
      $sql = "UPDATE khoa_hoc SET trang_thai = 2 WHERE id = '$idCourse'";
      execSQL($sql,1);
    }
  }
  
?>
<link rel="stylesheet" href="view/base/vendor.style.css">
<link rel="stylesheet" href="view/base/main.style.css">

<div class="my-courses background-body py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="my-courses-left">
          <div class="profile-userpic">
            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-responsive" alt=""> </div>
          <div class="profile-usertitle">
            <div class="profile-usertitle-name"> <?=$thongTinUser['ho_ten'] ?> </div>
            <div class="profile-usertitle-job"> <?=$userType?> </div>
          </div>
          <?php
            if(isset($_COOKIE['user_id'])){
              echo '<a href="#" class="active-courses mx-4 py-2">Kích hoạt khóa học</a>';
            }
          ?>
          <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
              aria-controls="v-pills-home" aria-selected="true">Khóa học của tôi</a>
            <?php
              if(isset($_COOKIE['lecturer_id'])){
                echo '<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                aria-controls="v-pills-profile" aria-selected="false">Thêm khóa học</a>';
              }
            ?>
          </div>

        </div>
      </div>
      <div class="col-md-9">
        <div class="my-courses-right">
          <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <?php
                if(empty($danhSachKhoaHoc)){
                  echo '<h2 class="my-courses-heading">Bạn chưa có khóa học nào</h2>';
                }else{
                  echo '<h2 class="my-courses-heading">Khóa học của tôi</h2>';
                }
              ?>
              <div class="row">
                <?php
                $idUser;
                if(isset($_COOKIE['user_id'])){
                  $idUser = $_COOKIE['user_id'];
                }else{
                  $idUser = $_COOKIE['lecturer_id'];
                }
                foreach ($danhSachKhoaHoc as $khoaHoc) {
                  $tenGiangVien = layTenGiangVien($khoaHoc['id_giang_vien']);
                  if($khoaHoc['hinh_anh'] == ""){
                    $img = 'view/base/images/default-image.jpg';
                  }else{
                    if(file_exists('upload/courses/'.$khoaHoc['hinh_anh'].'')){
                      $img = 'upload/courses/'.$khoaHoc['hinh_anh'].'';
                    }else{
                      $img = 'view/base/images/default-image.jpg';
                    }
                  }
                  echo '<div class="col-md-4">
                          <div class="single-course">
                            <div class="hvrbox">
                              <a href="index.php?act=my-course-detail">
                                <img src="'.$img.'" class="hvrbox-layer_bottom">
                              </a>
                            </div>
                            <div class="single-course-content">
                              <a href="index.php?act=my-course-detail&id-khoa-hoc='.$khoaHoc['id'].'&id-user='.$idUser.'">'.$khoaHoc['ten_khoa_hoc'].'</a>
                              <p>'.$tenGiangVien['ho_ten'].'</p>
                              <h3>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> (4)
                                <span>Enroll: 128</span>
                              </h3>
                            </div>
                          </div>
                        </div>';
                }
              ?>
              </div>
            </div>

            <?php if (isset($_COOKIE['lecturer_id'])): ?>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <div class="portlet light bordered">
                <div class="portlet-body">
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                      <form id="formId">
                        <input type="hidden" id="idGiangVien" value="<?=$idUser?>">
                        <div class="form-group">
                          <label class="heading">Tên khóa học</label>
                          <input type="text" class="form-control" id="tenKhoaHoc">
                        </div>
                        <div class="form-group">
                          <label class="heading">Danh mục</label>
                          <select class="form-control" id="danhMuc">
                            <?php
                              foreach ($danhSachDanhMuc as $danhMuc) {
                                echo '<option value="'.$danhMuc['id'].'">'.$danhMuc['ten_danh_muc'].'</option>';
                              }
                            ?>
                          </select>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="heading">Hình ảnh</label>
                              <input type="file" class="form-control" id="hinhAnh" accept=".jpg,.png,.jpeg">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="heading">Clip</label>
                              <input type="text" class="form-control" id="clip" autocomplete="off">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="heading">Mô tả</label>
                          <textarea class="form-control" id="moTa" rows="3"></textarea>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="heading">Đơn giá</label>
                              <input type="text" class="form-control" id="donGia">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="heading">Khuyến mãi</label>
                              <input type="text" class="form-control" id="khuyenMai">
                            </div>
                          </div>
                        </div>
                        <button type="button" class="btn btn-success" id="submitAddCourses">Thêm khóa học</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
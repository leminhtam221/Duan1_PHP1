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
                $count = count($danhSachKhoaHoc);
                if($count == 0){
                  echo '<h2 class="my-courses-heading">Bạn chưa có khóa học nào</h2>';
                }else{
                  echo '<h2 class="my-courses-heading">Khóa học của tôi</h2>';
                }
              ?>
              <div class="row">
                <?php
                foreach ($danhSachKhoaHoc as $khoaHoc) {
                  $tenGiangVien = layTenGiangVien($khoaHoc['id_giang_vien']);
                  echo '<div class="col-md-4">
                          <div class="single-course">
                            <div class="hvrbox">
                              <a href="index.php?act=my-course-detail">
                                <img src="./view/base/images/1.jpg" alt="slide 1" class="hvrbox-layer_bottom">
                              </a>
                            </div>
                            <div class="single-course-content">
                              <a href="index.php?act=my-course-detail&id-khoa-hoc='.$khoaHoc['id'].'">'.$khoaHoc['ten_khoa_hoc'].'</a>
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
                <div class="portlet-title tabbable-line">
                  <div class="caption caption-md">
                    <i class="icon-globe theme-font hide"></i>
                    <h5 class="uppercase bold">Thông tin tài khoản</h5>
                  </div>
                </div>
                <div class="portlet-body">
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                      <form action="" method="POST">
                        <div class="form-group">
                          <label class="heading">Tên khóa học</label>
                          <input type="text" class="form-control" name="tenkhoahoc">
                        </div>
                        <div class="form-group">
                          <label class="heading">Danh mục</label>
                          <select class="form-control" name="idcatalog">
                            <option value="">Công nghệ thông tin</option>
                            <option value="">Thiết kế đồ họa</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="heading">Hình ảnh</label>
                          <input type="text" class="form-control" name="hinhanh">
                        </div>
                        <div class="form-group">
                          <label class="heading">Clip</label>
                          <input type="text" class="form-control" name="clip">
                        </div>
                        <div class="form-group">
                          <label class="heading">Mô tả</label>
                          <input type="text" class="form-control" name="mota">
                        </div>
                        <div class="form-group">
                          <label class="heading">Đơn giá</label>
                          <input type="text" class="form-control" name="dongia">
                        </div>
                        <div class="form-group">
                          <label class="heading">Khuyến mãi</label>
                          <input type="text" class="form-control" name="khuyenmai">
                        </div>

                        <button type="submit" class="btn btn-success" name="">Thêm khóa học</button>
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
<div class="main-banner course-list-banner">
  <div class="hvrbox">
    <img src="view/base/images/banner-1.png" alt="Mountains" class="hvrbox-layer_bottom">
    <div class="hvrbox-layer_top">
      <div class="container">
        <div class="overlay-text text-center">
          <h3><b>2,579</b> Khóa Học Online & Video Hướng Dẫn!</h3>
          <div class="col-md-8 offset-md-2">
            <div class="input-group">
              <input type="text" class="form-control" aria-label="Text input with dropdown button"
                placeholder="Tìm Kiếm Khóa Học, Giảng Viên">
              <div class="input-group-append">
                <button class="btn btn-search" type="button"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="course-header-1x">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="course-header-left-top">
          <p><img src="view/base/images/cross.png" alt="Image">Xóa Bộ Lọc Tìm Kiếm</p>
        </div>
        <div class="course-header-left">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <a href="#" class="icon-right" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                  aria-controls="collapseOne">
                  <h3>Danh mục</h3>
                </a>
              </div>

              <div id="collapseOne" class="collapse show">
                <div class="card-body">
                  <div class="category">
                    <ul id="nav-list">
                      <?php
                        foreach ($danhSachDanhMuc as $danhMuc) {
                          echo '<li>
                                  <a href="index.php?act=khoa-hoc&id-danh-muc='.$danhMuc['id'].'">
                                    <img src="view/base/images/arrow-right.png" alt="Image"> '.$danhMuc['ten_danh_muc'].'
                                    <span>30</span>
                                  </a>
                                </li>';
                        }
                      ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <a href="#" class="icon-right" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
                  aria-controls="collapseThree">
                  <h3>Giá</h3>
                </a>
              </div>
              <div id="collapseThree" class="collapse show">
                <div class="card-body">
                  <div class="price-filter">
                    <div class="single-select d-flex flex-row">
                      <div class="form-group ">
                        <select class="form-control" id="minPrice">
                          <option selected>0</option>
                          <option>50000</option>
                          <option>100000</option>
                          <option>500000</option>
                          <option>1000000</option>
                          <option>1500000</option>
                        </select>
                      </div>
                      <p>-</p>
                      <div class="form-group">
                        <select class="form-control" id="maxPrice">
                          <option>50000</option>
                          <option>100000</option>
                          <option>500000</option>
                          <option>1000000</option>
                          <option selected>1500000</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="course-header-right">
          <div class="row">
            <div class="col-md-6">
              <div class="search-box d-flex flex-row">
                <p>Sắp xếp theo : </p>
                <select class="form-control styleSelect" id="orderCourses">
                  <option selected="" value="1">Khóa học mới nhất</option>
                  <option value="2">Khóa học bán chạy</option>
                  <option value="3">Khóa học cũ</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="course-tab">
                <p>All prices are in USD</p>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                      aria-controls="home" aria-selected="true"><i class="fas fa-th"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                      aria-controls="profile" aria-selected="false"><i class="fas fa-list"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="course-grid-list">
          <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="course-1x all-course-grid">
                <div class="container">
                  <div class="row">

                    <div class="all-course">
                      <div id="coursesContent">
                        <div class="row">
                          <?php foreach ($danhSachKhoaHoc as $khoaHoc) {
                            $tenGiangVien = layTenGiangVien($khoaHoc['id_giang_vien']);
                            $tenGiangVien =  $tenGiangVien['ho_ten'];
                            if($khoaHoc['hinh_anh'] == ""){
                              $img = 'view/base/images/default-image.jpg';
                            }else{
                              if(file_exists('upload/courses/'.$khoaHoc['hinh_anh'].'')){
                                $img = 'upload/courses/'.$khoaHoc['hinh_anh'].'';
                              }else{
                                $img = 'view/base/images/default-image.jpg';
                              }
                            }
                            echo '<div class="col-md-4 tile">
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
                                        <div class="d-flex justify-content-start my-2"><span><del class="mr-2 priCe">'.$khoaHoc['don_gia'].'</del> <b class="priCe">'.$khoaHoc['khuyen_mai'].'</b></span></div>
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
                        } ?>

                          <div class="col-md-12">
                            <div class="course-pagination">
                              <ul class="pagination">
                                <?=$phanTrang;?>
                                <li class="page-item"><a class="page-link" href="#"><i
                                      class="fas fa-angle-right"></i></a>
                                </li>
                              </ul>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="all-course-list">
                <?php
                  foreach ($danhSachKhoaHoc as $khoaHoc) {
                    $tenGiangVien = layTenGiangVien($khoaHoc['id_giang_vien']);
                    $tenGiangVien =  $tenGiangVien['ho_ten'];
                    echo '<div class="media">
                            <div class="media-left-image">
                              <div class="hvrbox">
                                <img src="view/base/images/1.jpg" alt="slide 1" class="hvrbox-layer_bottom">
                                <div class="hvrbox-layer_top hvrbox-text">
                                  <div class="hvrbox-text">
                                    <a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i
                                        class="fas fa-play"></i></a><br>
                                    <a href="index.php?act=khoa-hoc-chi-tiet&idKhoaHoc='.$khoaHoc['id'].'">Preview Course</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="media-body">
                              <h2><a href="index.php?act=khoa-hoc-chi-tiet&idKhoaHoc='.$khoaHoc['id'].'">'.$khoaHoc['ten_khoa_hoc'].'</a></h2>
                              <h5>'.$tenGiangVien.'</h5>
                              <h4>'.$khoaHoc['khuyen_mai'].'<del>'.$khoaHoc['don_gia'].'</del></h4>
                              <a href="index.php?act=khoa-hoc-chi-tiet&idKhoaHoc='.$khoaHoc['id'].'" class="btn-bordered"> View Course </a>
                              <h3>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> (4)
                                <span>Enroll: 128 <i class="far fa-heart"></i></span>
                              </h3>
                            </div>
                          </div>'; 
                  }
                ?>

                <div class="course-pagination">
                  <ul class="pagination">
                    <li class="page-item active"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                  </ul>
                </div>

              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>
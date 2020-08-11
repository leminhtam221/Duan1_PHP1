<div class="main-banner">
  <div class="hvrbox">
    <img src="./view/base/images/bn.jpg" alt="Mountains" class="hvrbox-layer_bottom">
    <div class="hvrbox-layer_top">
      <div class="container">
        <div class="overlay-text text-center">
          <h3>The Future Begins Here!</h3>
          <p>Học thầy, học bạn, vô vạn phong lưu.</p>
          <div class="col-md-8 offset-md-2">
            <form action="index.php?act=khoa-hoc" method="post">
              <div class="input-group">
                <input type="text" class="form-control" aria-label="Text input with dropdown button"
                  placeholder="Tìm Kiếm Khóa Học" required name="input-search" autocomplete="off">
                <div class="input-group-append styleSelect">
                  <select id="inputGroupSelect01" name="select-value">
                    <option selected value="0">Tất Cả Danh Mục</option>
                    <?php
                    foreach ($danhSachDanhMuc as $danhMuc) {
                      echo '<option value="'.$danhMuc['id'].'">'.$danhMuc['ten_danh_muc'].'</option>';
                    }
                  ?>
                  </select>
                </div>
                <div class="input-group-append">
                  <button class="btn btn-search" type="submit" name="submit-search"><img
                      src="./view/base/images/search.png" alt="Image"></button>
                </div>
              </div>
            </form>
          </div>

          <div class="slider-feature">
            <ul>
              <li><img src="./view/base/images/book.png" alt="Mountains"> <?=@$soLuongKhoaHoc['sl']?> Khóa Học</li>
              <li><img src="./view/base/images/cap.png" alt="Mountains"> <?=@$soLuongHocVien['sl']?> Học Viên</li>
              <li><img src="./view/base/images/man.png" alt="Mountains"> <?=@$soLuongGiangVien['sl']?> Giảng Viên</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="course-category-1x">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?php $danhMuc = $danhSachDanhMucNoiBat[0]; ?>
        <?php
        $counter = counter("khoa_hoc", 'where id_danh_muc='.$danhMuc['id'].'');
        ?>
        <div class="category-left left-image">
          <div class="hvrbox">
            <img src="./view/base/images/<?=$danhMuc['hinh_anh']?>" alt="slide 1" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top">
              <div class="hvrbox-text">
                <a href="index.php?act=khoa-hoc&id-danh-muc=<?=$danhMuc['id']?>"><?=$danhMuc['ten_danh_muc']?></a>
                <h5><?=$counter['sl']?> Khóa học</h5>
                <a href="index.php?act=khoa-hoc&id-danh-muc=<?=$danhMuc['id']?>" class="btn-small">Xem chi tiết</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row">
          <?php for($i = 1; $i <= 4; $i++): ?>
          <?php 
          $danhMuc = $danhSachDanhMucNoiBat[$i];
          $counter = counter("khoa_hoc", 'where id_danh_muc='.$danhMuc['id'].'');
          ?>
          <div class="col-md-6">
            <div class="category-left right-image">
              <div class="hvrbox">
                <img src="./view/base/images/<?=$danhMuc['hinh_anh']?>" alt="slide 1" class="hvrbox-layer_bottom">
                <div class="hvrbox-layer_top hvrbox-text">
                  <div class="hvrbox-text">
                    <a href="index.php?act=khoa-hoc&id-danh-muc=<?=$danhMuc['id']?>"><?=$danhMuc['ten_danh_muc']?></a>
                    <h5><?=$counter['sl']?> Khóa học</h5>
                    <a href="index.php?act=khoa-hoc&id-danh-muc=<?=$danhMuc['id']?>" class="btn-small">Xem chi tiết</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endfor ?>
        </div>
      </div>
      <div class="category-feature">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <div class="single-feature">
                <img src="./view/base/images/man-2.png" alt="slide 1">
                <h4>Học với chuyên gia</h4>
                <p>We rigorously screen and train our instructors ensure that they meet </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="single-feature">
                <img src="./view/base/images/clock.png" alt="slide 1">
                <h4>Truy cập trọn đời</h4>
                <p>We rigorously screen and train our instructors ensure that they meet </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="single-feature">
                <img src="./view/base/images/pc.png" alt="slide 1">
                <h4>Học mọi lúc mọi nơi</h4>
                <p>We rigorously screen and train our instructors ensure that they meet </p>
              </div>
            </div>
            <div class="col-md-12">
              <div class="single-feature">
                <a href="#" class="btn-small">Bắt Đầu Học</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="course-1x">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-middle">
          <h2>Khóa Học Nổi Bật</h2>
        </div>
      </div>

      <div class="col-md-12">
        <div id="filters" class="course-menu">
          <button class="filter active" data-filter="all">Tất Cả Khóa Học</button>
          <?php foreach($danhSachDanhMucNoiBat as $danhMuc): ?>
          <button class="filter" data-rel="filter<?=$danhMuc['id']?>"
            data-filter=".filter<?=$danhMuc['id']?>"><?=$danhMuc['ten_danh_muc']?></button>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="col-md-12">
        <div class="all-course">
          <div class="row">
            <?php foreach($danhSachKhoaHocNoiBat as $khoaHoc): ?>
            <?php
              $tenGV = layTenGiangVien($khoaHoc['id_giang_vien']);
              if($khoaHoc['hinh_anh'] == ""){
                $img = 'view/base/images/default-image.jpg';
              }else{
                if(file_exists('upload/courses/'.$khoaHoc['hinh_anh'].'')){
                  $img = 'upload/courses/'.$khoaHoc['hinh_anh'].'';
                }else{
                  $img = 'view/base/images/default-image.jpg';
                }
              }
              $youtubeId = "";
              if(!empty($khoaHoc['clip'])){
                $url = $khoaHoc['clip'];
                preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
                $youtubeId = $match[1];
              }
            ?>
            <div class="col-md-3 tile filter<?=$khoaHoc['id_danh_muc']?>">
              <div class="single-course">
                <div class="hvrbox">
                  <img src="<?=$img?>" alt="slide 1" class="hvrbox-layer_bottom">
                  <div class="hvrbox-layer_top hvrbox-text">
                    <div class="hvrbox-text">
                      <a href="https://www.youtube.com/watch?v=<?=$youtubeId?>" class="btn-circle video"><i
                          class="fas fa-play"></i></a>
                      <a href="index.php?act=chi-tiet-khoa-hoc&id-khoa-hoc=<?=$khoaHoc['id']?>">Preview Course</a>
                    </div>
                  </div>
                </div>
                <div class="single-course-content">
                  <a href="index.php?act=chi-tiet-khoa-hoc&id-khoa-hoc=<?=$khoaHoc['id']?>"
                    class="courses-title"><?=$khoaHoc['ten_khoa_hoc']?></a>
                  <p><?=$tenGV['ho_ten']?></p>
                  <div class="d-flex justify-content-start my-2">
                    <span>
                      <del class="mr-2"><?=$khoaHoc['don_gia']?>đ</del>
                      <b><?=$khoaHoc['khuyen_mai']?>đ</b>
                    </span>
                  </div>
                  <h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i> (4)
                    <span>Ghi danh: <?=$khoaHoc['luot_mua']?></span>
                  </h3>
                </div>
              </div>
            </div>
            <?php endforeach; ?>

            <div class="col-md-12 text-center">
              <a href="index.php?act=khoa-hoc" class="btn-small"> Xem thêm </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="achive-goals-1x">
  <div class="container">
    <div class="col-md-12">
      <div class="title-middle">
        <h2>Chinh Phục Mục Tiêu</h2>
        <p>Find subjects you're passionate about by browsing our online course categories. Start <br> learning with top
          courses Built With Industry Experts</p>
      </div>
    </div>

    <div class="col-md-12">
      <div class="row">
        <div class="col-md-4">
          <div class="single-goals">
            <img src="./view/base/images/icon-1.png" alt="slide 1">
            <h4>Phát Triển kĩ năng</h4>
            <p>These goals will assist them in achieving their ultimate career position </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-goals">
            <img src="./view/base/images/icon-2.png" alt="slide 1">
            <h4>Học Tập Cộng Đồng</h4>
            <p>These goals will assist them in achieving their ultimate career position </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-goals">
            <img src="./view/base/images/icon-4.png" alt="slide 1">
            <h4>Dự Án Thực Tế</h4>
            <p>These goals will assist them in achieving their ultimate career position </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="learning-path-1x">
  <div class="container">
    <div class="col-md-12">
      <div class="title-middle">
        <h2>Get Ahead With Learning Paths</h2>
      </div>
    </div>

    <div class="col-md-12">
      <div class="learning-path">

        <div class="single-learning-path">
          <div class="hvrbox">
            <a href="#"><img src="view/base/images/become_design.jpg" alt="slide 1" class="hvrbox-layer_bottom"></a>
            <div class="hvrbox-layer_top hvrbox-text blue">
              <div class="hvrbox-text">
                <a href="#">Become a Designer</a>
              </div>
            </div>
          </div>
        </div>
        <div class="single-learning-path">
          <div class="hvrbox">
            <a href="#"><img src="view/base/images/become_developer.jpg" alt="slide 1" class="hvrbox-layer_bottom"></a>
            <div class="hvrbox-layer_top hvrbox-text green">
              <div class="hvrbox-text">
                <a href="#">Become a Developer</a>
              </div>
            </div>
          </div>
        </div>
        <div class="single-learning-path">
          <div class="hvrbox">
            <a href="#"><img src="view/base/images/become_manager.jpg" alt="slide 1" class="hvrbox-layer_bottom"></a>
            <div class="hvrbox-layer_top hvrbox-text red">
              <div class="hvrbox-text">
                <a href="#">Become a Manager</a>
              </div>
            </div>
          </div>
        </div>
        <div class="single-learning-path">
          <div class="hvrbox">
            <a href="#"><img src="view/base/images/become_marketer.jpg" alt="slide 1" class="hvrbox-layer_bottom"></a>
            <div class="hvrbox-layer_top hvrbox-text yellow">
              <div class="hvrbox-text">
                <a href="#">Become a Marketer</a>
              </div>
            </div>
          </div>
        </div>
        <div class="single-learning-path">
          <div class="hvrbox">
            <a href="#"><img src="view/base/images/become_introduction.jpg" alt="slide 1"
                class="hvrbox-layer_bottom"></a>
            <div class="hvrbox-layer_top hvrbox-text">
              <div class="hvrbox-text">
                <a href="#">Design Introduction</a>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>


<div class="tesimonial-1x">
  <div class="container">
    <div class="col-md-10 offset-md-1">
      <div class="testimonial">
        <div class="single-testimonial text-center">
          <img src="./view/base/images/testimonial-1.jpg" alt="slide 1">
          <p><i class="fas fa-quote-left"></i> Before Coursecity, I was working two minimum wage jobs. Now, I have a new
            job, a new mindset,<br> and new life!"I learned most of my programming skills and database management skills
            <br> through self-study and the material available on Coursecity.</p>
          <h3>Stephanie Magion</h3>
          <h4>Manager at Doltef</h4>
        </div>

        <div class="single-testimonial text-center">
          <img src="./view/base/images/testimonial-2.jpg" alt="slide 1">
          <p><i class="fas fa-quote-left"></i> Before Coursecity, I was working two minimum wage jobs. Now, I have a new
            job, a new mindset,<br> and new life!"I learned most of my programming skills and database management skills
            <br> through self-study and the material available on Coursecity.</p>
          <h3>Jhon Alex</h3>
          <h4>Chairman at Doltef</h4>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="client-1x">
  <div class="container">
    <div class="col-md-12">
      <div class="title-middle">
        <h2>Đào Tạo Thành Viên CHo Công Ty Của Bạn</h2>
        <p>Tìm môn học mà bạn đam mê bằng cách duyệt qua các loại khóa học trực tuyến của chúng tôi. <br>Khởi đầu học
          với các khóa học hàng đầu được xây dựng với các chuyên gia trong ngành</p>
      </div>
    </div>

    <div class="col-md-8 offset-md-2">
      <div class="row">
        <div class="col-md-3">
          <div class="single-client">
            <a href="#"><img src="https://banyanthemes.com/template/courcity/images/client/1.png" alt="slide 1"></a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="single-client">
            <a href="#"><img src="https://banyanthemes.com/template/courcity/images/client/5.png" alt="slide 1"></a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="single-client">
            <a href="#"><img src="https://banyanthemes.com/template/courcity/images/client/2.png" alt="slide 1"></a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="single-client">
            <a href="#"><img src="https://banyanthemes.com/template/courcity/images/client/4.png" alt="slide 1"></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-client">
            <a href="#"><img src="https://vuejs.org/images/laravel.png" alt="slide 1"></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-client">
            <a href="#"><img src="https://vuejs.org/images/y8.png" alt="slide 1"></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-client">
            <a href="#"><img src="https://vuejs.org/images/fastcoding_inc.svg" alt="slide 1"></a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
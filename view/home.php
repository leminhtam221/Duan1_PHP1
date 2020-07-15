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
              <li><img src="./view/base/images/book.png" alt="Mountains"> 2502 Khóa Học</li>
              <li><img src="./view/base/images/cap.png" alt="Mountains"> 32052 Học Viên</li>
              <li><img src="./view/base/images/man.png" alt="Mountains"> 459 Giảng Viên</li>
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
        <div class="category-left left-image">
          <div class="hvrbox">
            <img src="./view/base/images/1.jpg" alt="slide 1" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top">
              <div class="hvrbox-text">
                <a href="#">Design Introduction</a>
                <h5>800 Course</h5>
                <a href="#" class="btn-small">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <div class="category-left right-image">
              <div class="hvrbox">
                <img src="./view/base/images/5.jpg" alt="slide 1" class="hvrbox-layer_bottom">
                <div class="hvrbox-layer_top hvrbox-text">
                  <div class="hvrbox-text">
                    <a href="#">Web Developement</a>
                    <h5>700 Course</h5>
                    <a href="#" class="btn-small">View Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="category-left right-image">
              <div class="hvrbox">
                <img src="./view/base/images/2.jpg" alt="slide 1" class="hvrbox-layer_bottom">
                <div class="hvrbox-layer_top hvrbox-text">
                  <div class="hvrbox-text">
                    <a href="#">Digital Marketing</a>
                    <h5>350 Course</h5>
                    <a href="#" class="btn-small">View Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="category-left right-image">
              <div class="hvrbox">
                <img src="./view/base/images/3.jpg" alt="slide 1" class="hvrbox-layer_bottom">
                <div class="hvrbox-layer_top hvrbox-text">
                  <div class="hvrbox-text">
                    <a href="#">Busines</a>
                    <h5>250 Course</h5>
                    <a href="#" class="btn-small">View Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="category-left right-image">
              <div class="hvrbox">
                <img src="./view/base/images/4.jpg" alt="slide 1" class="hvrbox-layer_bottom">
                <div class="hvrbox-layer_top hvrbox-text">
                  <div class="hvrbox-text">
                    <a href="#">Photography</a>
                    <h5>180 Course</h5>
                    <a href="#" class="btn-small">View Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
          <button class="filter" data-rel="web" data-filter=".web">Websites</button>
          <button class="filter" data-rel="design" data-filter=".design">Design</button>
          <button class="filter" data-rel="bcards" data-filter=".bcards">Business</button>
          <button class="filter" data-rel="photography" data-filter=".photography">Photography</button>
          <button class="filter" data-rel="marketing" data-filter=".marketing">Marketing</button>
        </div>
      </div>

      <div class="col-md-12">
        <div class="all-course">
          <div class="row">
            <div class="col-md-3 tile web">
              <div class="single-course">
                <div class="hvrbox">
                  <img src="./view/base/images/1.jpg" alt="slide 1" class="hvrbox-layer_bottom">
                  <div class="hvrbox-layer_top hvrbox-text">
                    <div class="hvrbox-text">
                      <a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i
                          class="fas fa-play"></i></a>
                      <a href="course-single.html">Preview Course</a>
                    </div>
                  </div>
                </div>
                <div class="single-course-content">
                  <a href="course-single.html">Learn Photoshop With Eyal Complete Course</a>
                  <p>Nir Eyal <span><del>$169</del> <b>$149</b></span></p>
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
            </div>
            <div class="col-md-3 tile design">
              <div class="single-course">
                <div class="hvrbox">
                  <img src="./view/base/images/2.jpg" alt="slide 1" class="hvrbox-layer_bottom">
                  <div class="hvrbox-layer_top hvrbox-text">
                    <div class="hvrbox-text">
                      <a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i
                          class="fas fa-play"></i></a>
                      <a href="course-single.html">Preview Course</a>
                    </div>
                  </div>
                </div>
                <div class="single-course-content">
                  <a href="course-single.html">Visual Basic Essential Training</a>
                  <p>Nir Eyal <span><del>$169</del> <b>$149</b></span></p>
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
            </div>

            <div class="col-md-3 tile marketing">
              <div class="single-course">
                <div class="hvrbox">
                  <img src="./view/base/images/3.jpg" alt="slide 1" class="hvrbox-layer_bottom">
                  <div class="hvrbox-layer_top hvrbox-text">
                    <div class="hvrbox-text">
                      <a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i
                          class="fas fa-play"></i></a>
                      <a href="course-single.html">Preview Course</a>
                    </div>
                  </div>
                </div>
                <div class="single-course-content">
                  <a href="course-single.html">The Complete Developer Web Course</a>
                  <p>Nir Eyal <span><del>$169</del> <b>$149</b></span></p>
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
            </div>

            <div class="col-md-3 tile design">
              <div class="single-course">
                <div class="hvrbox">
                  <img src="./view/base/images/4.jpg" alt="slide 1" class="hvrbox-layer_bottom">
                  <div class="hvrbox-layer_top hvrbox-text">
                    <div class="hvrbox-text">
                      <a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i
                          class="fas fa-play"></i></a>
                      <a href="course-single.html">Preview Course</a>
                    </div>
                  </div>
                </div>
                <div class="single-course-content">
                  <a href="course-single.html">Creating 3D environment in Blender</a>
                  <p>Nir Eyal <span><del>$169</del> <b>$149</b></span></p>
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
            </div>

            <div class="col-md-3 tile marketing">
              <div class="single-course">
                <div class="hvrbox">
                  <img src="./view/base/images/5.jpg" alt="slide 1" class="hvrbox-layer_bottom">
                  <div class="hvrbox-layer_top hvrbox-text">
                    <div class="hvrbox-text">
                      <a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i
                          class="fas fa-play"></i></a>
                      <a href="course-single.html">Preview Course</a>
                    </div>
                  </div>
                </div>
                <div class="single-course-content">
                  <a href="course-single.html">Advanced CSS and Sass Flexbox Grid</a>
                  <p>Nir Eyal <span><del>$169</del> <b>$149</b></span></p>
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
            </div>

            <div class="col-md-3 tile photography">
              <div class="single-course">
                <div class="hvrbox">
                  <img src="./view/base/images/6.jpg" alt="slide 1" class="hvrbox-layer_bottom">
                  <div class="hvrbox-layer_top hvrbox-text">
                    <div class="hvrbox-text">
                      <a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i
                          class="fas fa-play"></i></a>
                      <a href="course-single.html">Preview Course</a>
                    </div>
                  </div>
                </div>
                <div class="single-course-content">
                  <a href="course-single.html">Complete Cyber Security Course Hackers</a>
                  <p>Nir Eyal <span><del>$169</del> <b>$149</b></span></p>
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
            </div>

            <div class="col-md-3 tile bcards">
              <div class="single-course">
                <div class="hvrbox">
                  <img src="./view/base/images/7.jpg" alt="slide 1" class="hvrbox-layer_bottom">
                  <div class="hvrbox-layer_top hvrbox-text">
                    <div class="hvrbox-text">
                      <a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i
                          class="fas fa-play"></i></a>
                      <a href="course-single.html">Preview Course</a>
                    </div>
                  </div>
                </div>
                <div class="single-course-content">
                  <a href="course-single.html">Introduction To Python Programming</a>
                  <p>Nir Eyal <span><del>$169</del> <b>$149</b></span></p>
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
            </div>

            <div class="col-md-3 tile photography">
              <div class="single-course">
                <div class="hvrbox">
                  <img src="./view/base/images/8.jpg" alt="slide 1" class="hvrbox-layer_bottom">
                  <div class="hvrbox-layer_top hvrbox-text">
                    <div class="hvrbox-text">
                      <a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i
                          class="fas fa-play"></i></a>
                      <a href="course-single.html">Preview Course</a>
                    </div>
                  </div>
                </div>
                <div class="single-course-content">
                  <a href="course-single.html">Certificate Early Education Leadership</a>
                  <p>Nir Eyal <span><del>$169</del> <b>$149</b></span></p>
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
            </div>

            <div class="col-md-12 text-center">
              <a href="#" class="btn-small"> View more </a>
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
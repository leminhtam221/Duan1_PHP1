<style>
.pb-cmnt-textarea {
  resize: none;
  padding: 20px;
  height: 130px;
  width: 100%;
  border: 1px solid #F2F2F2;
}

.post__form {
  padding: 14px;
  border: 1px solid #00aeef;
}
</style>


<div class="page-banner">
  <div class="hvrbox">
    <img src="view/base/images/video-bg.png" alt="Mountains" class="hvrbox-layer_bottom">
    <div class="hvrbox-layer_top">
      <div class="container">
        <div class="overlay-text text-left">
          <h3><?=$chiTietKhoaHoc['ten_khoa_hoc'] ?></h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Khóa Học</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?=$chiTietKhoaHoc['ten_khoa_hoc'] ?></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="course-single-body">
  <div class="container">
    <div class="course-info-1x course-info-2x">
      <div class="row">
        <div class="col-md-12 my-4">
          <div class="course-heading">
            <h2 class="course-heading-name">
              <?=$chiTietKhoaHoc['ten_khoa_hoc'] ?>
            </h2>
          </div>
        </div>

        <div class="col-md-4">
          <div class="course-info-left">
            <?php
              echo '<div class="media">
                      <img src="view/base/images/testimonial-1.jpg" alt="Image">
                      <div class="media-body">
                        <h3>'.$giangVien['ho_ten'].'</h3>
                        <p>Visual Instructor</p>
                      </div>
                    </div>';
            ?>
          </div>
        </div>
        <div class="col-md-3">
          <div class="course-info-middle">
            <p>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              &nbsp; 4.9 (66 ratings)
            </p>
            <h4>1,457 Students Enrolled</h4>
          </div>
        </div>
        <div class="col-md-2">
          <div class="course-info-left">
            <div class="media">
              <div class="media-body">
                <h4>Course Duration</h4>
                <p>3 Weeks</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="course-info-right">
            <?php
              echo '<h3><del>'.$chiTietKhoaHoc['don_gia'].'</del>'.$chiTietKhoaHoc['khuyen_mai'].'đ</h3>'
            ?>
            <a href="#" class="btn-small">Buy Now</a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="course-details-1x">
      <div class="row">
        <div class="col-md-8">
          <div class="course-details-left">
            <div class="course-video">
              <a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i
                  class="fas fa-play"></i></a>
              <h3>Preview Course</h3>
            </div>


            <div class="course-menu-nav">
              <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab"
                    aria-controls="overview" aria-selected="true"> <i class="far fa-file-alt"></i>Tổng Quan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="curriculum-tab" data-toggle="tab" href="#curriculum" role="tab"
                    aria-controls="curriculum" aria-selected="false"><i class="fas fa-cube"></i>Lộ Trình</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
                    aria-selected="false"><i class="far fa-comment"></i>Bình Luận</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="instructor-tab" data-toggle="tab" href="#instructor" role="tab"
                    aria-controls="instructor" aria-selected="false"><i class="far fa-user"></i>Giảng Viên</a>
                </li>
              </ul>

              <div class="tab-content course-menu-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                  <div class="learning-system">
                    <h4>What Will I Learn?</h4>
                    <p>Learn cutting-edge deep reinforcement learning algorithms—from Deep Q-Networks (DQN) to Deep
                      Deterministic Policy Gradients (DDPG). Apply these concepts to train agents to walk, drive, or
                      perform other complex tasks.</p>
                    <ul>
                      <li>
                        <div class="single-way">
                          <h4>Visual learning tips</h4>
                          <p>Graphic designers create visual concepts that inspire, and transform. Learn how to use
                            industry-leading software to build innovative.</p>
                        </div>
                      </li>
                      <li>
                        <div class="single-way">
                          <h4>How improve visual design</h4>
                          <p>Remember skills can be developed with practice. Design crash course through interactive
                            tutorials. Follow design and read design books. Start using tools like Canva and pair it
                            with SocialPilot. </p>
                        </div>
                      </li>
                      <li>
                        <div class="single-way">
                          <h4>Value of visual design</h4>
                          <p>Graphic design is process of visual communication problem solving using one or more of
                            typography, photography and illustration. The field is considered a subset of visual.</p>
                        </div>
                      </li>
                      <li>
                        <div class="single-way">
                          <h4>Difference Between Visual Design and Graphic Design</h4>
                          <p>User interface (UI) designers are responsible for the “look and feel” of a website, app, or
                            other product. In other words, they're the ones who add colors, pair typefaces, and set
                            layouts. </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="requirements">
                    <h4>Requirements</h4>
                    <ul>
                      <li><i class="fas fa-check"></i> Understand what visual learning is for and how it is used.</li>
                      <li><i class="fas fa-check"></i> Need knowledge of photoshop and basic knowledge of indesign.</li>
                      <li><i class="fas fa-check"></i> Preferable to have experience with PS, Sketch, Indesign and Adobe
                        XD.</li>
                      <li><i class="fas fa-check"></i> Preferable to understand word embeddings.</li>
                    </ul>
                  </div>
                  <div class="description">
                    <h4>Description</h4>
                    <?php
                      echo '<p>'.$chiTietKhoaHoc['mo_ta'].'</p>';
                    ?>
                  </div>
                  <div class="price">
                    <?php
                      echo '<h5><del>'.$chiTietKhoaHoc['don_gia'].'</del><span>'.$chiTietKhoaHoc['khuyen_mai'].' đ</span></h5>';
                    ?>
                    <a href="#" class="btn-small">Buy Now</a>
                  </div>

                </div>
                <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                  Noi dung khoa hoc
                </div>

                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                  <?php
                    if(isset($_SESSION['user'])){
                      $idUser = $_SESSION['user']['id'];
                      echo ' <div class="post mb-5">
                              <div class="row">
                                <div class="col-12">
                                  <form class="post__form" action="index.php?act=khoa-hoc-chi-tiet" method="POST">
                                    <textarea placeholder="Write your comment here!" class="pb-cmnt-textarea" name="commentContent" required></textarea>
                                    <input type="hidden" name="idUser" value="'.$idUser.'">
                                    <input type="hidden" name="idKhoaHoc" value="'.$idKhoaHoc.'">
                                    <div class="form-footer d-flex justify-content-end">
                                      <button class="btn btn-primary" type="submit" name="submit-comment">Post</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>';
                    }
                  ?> <?php
                    foreach ($danhSachBinhLuan as $binhLuan) {
                      $idUser = $binhLuan['id_user'];
                      $tenUser = getNameUser($idUser);
                      echo '<div class="blog-author instructor-profile">
                              <div class="media">
                                <img src="view/base/images/speaker-1.png" alt="Generic placeholder image">
                                <div class="media-body">
                                  <h5>'.$tenUser['ho_ten'].'</h5>
                                  <p>'.$binhLuan['noi_dung'].'</p>
                                </div>
                              </div>
                            </div>';
                    }
                  ?> </div>

                <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                  <div class="blog-author instructor-profile">
                    <?php
                      echo '<div class="media">
                            <img src="view/base/images/speaker-1.png" alt="Generic placeholder image">
                            <div class="media-body">
                              <h5>'. $giangVien['ho_ten'].'</h5>
                              <p>He attended and graduated from medical school in 1976, having over 42 years of diverse
                                experience, especially in Cardiovascular Disease (Cardiology).</p>
                                <div class="social-link">
                                <ul>
                                  <li class="facebook"><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                                  <li class="pinterest"><a href="#"> <i class="fab fa-pinterest"></i> </a></li>
                                  <li class="instagram"><a href="#"> <i class="fab fa-instagram"></i> </a></li>
                                  <li class="twitter"><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                                </ul>
                              </div>
                            </div>
                          </div>';
                    ?>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="course-details-sidebar">
            <div class="course-feature">
              <h2>Thông Tin</h2>
              <ul>
                <li><i class="far fa-file"></i> Bài học <span> 7 </span></li>
                <li><i class="far fa-clock"></i> Thời lượng <span> 60H </span></li>
                <li><i class="far fa-user"></i> Học viên <span> 45 </span></li>
                <li><i class="fas fa-certificate"></i> Chứng chỉ <span> Yes </span></li>
                <li><i class="far fa-lightbulb"></i>Cấp bậc<span> Beginner </span></li>
                <li><i class="far fa-bookmark"></i> Danh mục <span> <?=$chiTietKhoaHoc['ten_danh_muc'] ?> </span></li>
              </ul>
            </div>
            <div class="footer-social-link">
              <h2>Chia sẻ qua</h2>
              <ul>
                <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
                <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                <li><a href="#"> <i class="fab fa-google-plus-g"></i> </a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="related-course-2x">
    <div class="container">
      <div class="col-md-12">
        <div class="row">
          <div class="title-left">
            <h2>Khóa Học Liên Quan</h2>
          </div>
        </div>
      </div>

      <div class="related-course">
        <div class="single-course">
          <div class="hvrbox">
            <img src="view/base/images/2.jpg" alt="slide 1" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top hvrbox-text">
              <div class="hvrbox-text">
                <a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i
                    class="fas fa-play"></i></a><br>
                <a href="course-single-one.html">Preview Course</a>
              </div>
            </div>
          </div>
          <div class="single-course-content">
            <a href="course-single-one.html">Visual Basic Essential Training</a>
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
        <div class="single-course">
          <div class="hvrbox">
            <img src="view/base/images/6.jpg" alt="slide 1" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top hvrbox-text">
              <div class="hvrbox-text">
                <a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i
                    class="fas fa-play"></i></a><br>
                <a href="course-single-one.html">Preview Course</a>
              </div>
            </div>
          </div>
          <div class="single-course-content">
            <a href="course-single-one.html">Complete Cyber Security Course</a>
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
        <div class="single-course">
          <div class="hvrbox">
            <img src="view/base/images/3.jpg" alt="slide 1" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top hvrbox-text">
              <div class="hvrbox-text">
                <a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i
                    class="fas fa-play"></i></a><br>
                <a href="course-single-one.html">Preview Course</a>
              </div>
            </div>
          </div>
          <div class="single-course-content">
            <a href="course-single-one.html">The Complete Developer Web Course</a>
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
        <div class="single-course">
          <div class="hvrbox">
            <img src="view/base/images/4.jpg" alt="slide 1" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top hvrbox-text">
              <div class="hvrbox-text">
                <a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i
                    class="fas fa-play"></i></a><br>
                <a href="course-single-one.html">Preview Course</a>
              </div>
            </div>
          </div>
          <div class="single-course-content">
            <a href="course-single-one.html">Creating 3D environment Blender</a>
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
        <div class="single-course">
          <div class="hvrbox">
            <img src="view/base/images/5.jpg" alt="slide 1" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top hvrbox-text">
              <div class="hvrbox-text">
                <a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i
                    class="fas fa-play"></i></a><br>
                <a href="course-single-one.html">Preview Course</a>
              </div>
            </div>
          </div>
          <div class="single-course-content">
            <a href="course-single-one.html">Advanced CSS and Sass Flexbox Grid</a>
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
    </div>
  </div>

</div>
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
        <div class="col-md-5">
          <div class="course-info-left">
            <?php
              echo '<div class="media">
                      <img src="'.$imgGV.'" alt="Image" class="avatarImg">
                      
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
            <p class="start-rating">
              <?php if(!empty($isCourseRating)): ?>
              <?php for($i = 1; $i <= $start; $i++):?>
              <i class="fas fa-star"></i>
              <?php endfor ?>

              &nbsp; <?php echo $start;?> (<?php echo $counter;?> đánh giá)
              <?php else: ?>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              &nbsp; 5 (0 đánh giá)
              <?php endif ?>
            </p>
            <h4><?=$chiTietKhoaHoc['luot_mua']?> học viên đã ghi danh</h4>
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
        <div class="col-md-2">
          <div class="course-info-right">
            <?php
              echo '<h3 style="font-size: 1.25rem;margin-top: 1rem;"><del>1000000đ</del>'.$chiTietKhoaHoc['don_gia'].'đ</h3>'
            ?>
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
            <div class="course-video"
              style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(<?=$img?>);background-position:center;background-size: cover">
              <a href="https://www.youtube.com/watch?v=<?=$youtubeId?>" class="btn-circle video"><i
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
                      echo '<h5><del>'.$chiTietKhoaHoc['don_gia'].'đ</del><span>'.$chiTietKhoaHoc['khuyen_mai'].' đ</span></h5>';
                    ?>
                    <a href="#" style="padding-left: 1rem;padding-right: 1rem" class="btn-small">Thêm Vào Giỏ Hàng</a>
                  </div>

                </div>
                <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                  <div id="accordion">
                    <?php
                      foreach ($danhSachChuongKhoaHoc as $chuongHoc) {
                        $idChuong = $chuongHoc['id'];
                        $danhSachVideo = loadVideoTheoChuongHoc($idChuong);
                        echo '<div class="card my-2">
                                <div class="card-header py-3" data-toggle="collapse" data-target="#collapse'.$idChuong.'"
                                  aria-expanded="true" aria-controls="collapse'.$idChuong.'">
                                  <h6 class="mb-0 accordion__heading">
                                    '.$chuongHoc['ten_chuong'].'
                                    <span class="accordion__sub">4 Bài</span>
                                  </h6>
                                </div>
          
                                <div id="collapse'.$idChuong.'" class="collapse">
                                  <div class="card-body">
                                    <ul class="lesson-list">';
                                     
                                    foreach ($danhSachVideo as $video) {
                                      echo '<li class="lesson-item">
                                              <p class="lession-title">'.$video['ten_video'].'</p>
                                              <span class="lesson-time">00:48</span>
                                            </li>';
                                    }
                        echo  '     </ul>
                                  </div>
                                </div>
                              </div>';              
                                   
                      }
                    ?>
                  </div>
                </div>

                <div class="tab-pane fade blog-single-1x p-0" id="review" role="tabpanel" aria-labelledby="review-tab">
                  <div class="blog-single-left-content">
                    <?php if(isset($_COOKIE['user_id'])): ?>
                    <?php
                      $idUser = isset($_COOKIE['user_id']);
                    ?>
                    <div class="d-flex">
                      <h2 class="heading mr-3"
                        style="font-size: 22px;font-weight: 400;color: #454545;margin-bottom: 10px;">
                        Đánh giá khóa học</h2>
                      <?php if(empty($isUserRating)):?>
                      <div id="rating" class="mb-2">
                        <input type="radio" id="star5" name="rating" value="5" class="inputrating" />
                        <label class="full" for="star5" title="Awesome - 5 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="star4" name="rating" value="4" class="inputrating" />
                        <label class="full" for="star4" title="Pretty good - 4 stars"><i
                            class="fas fa-star"></i></label>

                        <input type="radio" id="star3" name="rating" value="3" class="inputrating" />
                        <label class="full" for="star3" title="Meh - 3 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="star2" name="rating" value="2" class="inputrating" />
                        <label class="full" for="star2" title="Kinda bad - 2 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="star1" name="rating" value="1" class="inputrating" />
                        <label class="full" for="star1" title="Sucks big time - 1 star"><i
                            class="fas fa-star"></i></label>
                      </div>
                      <?php else: ?>
                      <div id="rating" class="mb-2">
                        <input type="radio" id="star5" name="rating" value="5" class="inputrating"
                          <?=$isUserRating['so_sao']=='5'?'checked':''?> />
                        <label class="full" for="star5" title="Awesome - 5 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="star4" name="rating" value="4" class="inputrating"
                          <?=$isUserRating['so_sao']=='4'?'checked':''?> />
                        <label class="full" for="star4" title="Pretty good - 4 stars"><i
                            class="fas fa-star"></i></label>

                        <input type="radio" id="star3" name="rating" value="3" class="inputrating"
                          <?=$isUserRating['so_sao']=='3'?'checked':''?> />
                        <label class="full" for="star3" title="Meh - 3 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="star2" name="rating" value="2" class="inputrating"
                          <?=$isUserRating['so_sao']=='2'?'checked':''?> />
                        <label class="full" for="star2" title="Kinda bad - 2 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="star1" name="rating" value="1" class="inputrating"
                          <?=$isUserRating['so_sao']=='1'?'checked':''?> />
                        <label class="full" for="star1" title="Sucks big time - 1 star"><i
                            class="fas fa-star"></i></label>
                      </div>
                      <?php endif; ?>
                    </div>

                    <div class="comment-form m-0">
                      <h3>Post A Comment</h3>
                      <form>
                        <div class="row">
                          <div class="col-md-12">
                            <input type="hidden" id="idUser" value="<?=$idUser?>">
                            <input type="hidden" id="idKhoaHoc" value="<?=$idKhoaHoc?>">
                            <div class="form-group">
                              <textarea class="form-control" placeholder="Write something here"
                                id="commentContent"></textarea>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <a href="#" class="btn-small" id="sumitComment"> Post Comment
                            </a>
                          </div>
                        </div>
                      </form>
                    </div>
                    <?php endif ?>

                    <div class="comment-section" id="comment-section">
                      <h3>2 Comment</h3>
                      <?php foreach($danhSachBinhLuan as $binhLuan): ?>
                      <?php
                        $idUser = $binhLuan['id_user'];
                        $tenUser = getNameUser($idUser);  
                      ?>
                      <div class="media">
                        <a href="#"><img src="./view/base/images/speaker-4.png" alt="Generic placeholder image"></a>
                        <div class="media-body">
                          <p><?=$binhLuan['noi_dung']?></p>
                          <h4><?=$binhLuan['ngay_tao']?></h4>
                          <h5><?=$tenUser['ho_ten']?> <span><a href="#">Reply <i class="fas fa-reply"></i> </a></span>
                          </h5>
                        </div>
                      </div>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>

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
                <li><i class="far fa-bookmark"></i> Danh mục <span> <?=$tenDanhMuc['ten_danh_muc'] ?> </span></li>
              </ul>
            </div>
            <div class="footer-social-link">
              <style>
              #add-cart {
                color: #02b3e4;
                border-color: #02b3e4;
                cursor: pointer
              }

              #add-cart:hover {
                color: #fff;
                background-color: #02b3e4
              }
              </style>
              <button prodid="<?=@$idKhoaHoc?>" id="add-cart" type="button"
                class="btn btn-outline-primary w-100 btn-add">Thêm Vào Giỏ Hàng</button>
              <a href="#" class="btn btn-primary w-100 mt-2 mb-4"
                style="background-color: #02b3e4;border-color:#02b3e4;">Mua Ngay</a>
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
        <?php foreach($danhSachKhoaHoc as $khoaHoc): ?>
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
        <?php endforeach; ?>
      </div>
    </div>
  </div>

</div>
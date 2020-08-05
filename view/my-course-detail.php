<link rel="stylesheet" href="view/base/main.style.css">

<div class="my-course-detail background-body py-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="course-content">
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
                        <ul class="lesson-list" id="'.$idChuong.'">';
                        foreach ($danhSachVideo as $video) {
                          echo '<li class="lesson-item">
                                  <a href="#id-video='.$video['id'].'" class="lession-title">'.$video['ten_video'].'</a>';

                                if(isset($_COOKIE['lecturer_id'])){
                                  echo '<div class="more" id="divDot'.$video['id'].'" onclick="dotClick('.$video['id'].')">
                                  <button class="more-btn p-0">
                                      <span class="more-dot"></span>
                                      <span class="more-dot"></span>
                                      <span class="more-dot"></span>
                                  </button>
                                  <div class="more-menu d-none">
                                      <ul class="more-menu-items">
                                        <li class="more-menu-item">
                                          <button type="button" class="more-menu-btn" data-toggle="modal" data-target="#cruVideoModal" onclick="editVideo('.$video['id'].','.$idChuong.')">Sửa video</button>
                                        </li>
                                        <li class="more-menu-item">
                                          <button type="button" class="more-menu-btn" onclick="deleteVideo('.$video['id'].','.$idChuong.')">Xóa video</button>
                                        </li>
                                      </ul>
                                  </div>
                                </div>
                              </li>';
                              }else{
                                echo '<span class="lesson-time">07:45</span>
                                </li>';
                              }
                                  
                        }
            echo  '     </ul>
                      </div>';
                      if(isset($_COOKIE['lecturer_id'])){
                        echo '<button class="btn btn-primary ml-3 mb-3" onclick="themVideo('.$idChuong.')" data-toggle="modal" data-target="#cruVideoModal">Thêm video</button>';
                        echo '<button class="btn btn-danger ml-3 mb-3" onclick="suaChuongHoc('.$idChuong.')" data-toggle="modal" data-target="#cruCourseModal">Sửa chương học</button>';
                      }
            echo  '  </div>
                  </div>';              
          }
          ?>
          </div>

          <?php if (isset($_COOKIE['lecturer_id'])): ?>
          <button class="btn btn-success" id="themModal" data-toggle="modal" data-target="#cruCourseModal">Thêm chương
            học</button>
          <?php endif ?>
        </div>
      </div>
      <div class="col-md-9">
        <div class="course-content">
          <div id="video-content">
            <?php
            if(!empty($videoIntro)){
              $url = $videoIntro['link'];
              preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
              $youtubeId = $match[1];
              
              echo '<iframe class="video-show" src="https://www.youtube.com/embed/'.$youtubeId.'" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            }else{
              echo '<h1 class="font-weight-bold ml-5">Khóa học chưa có video nào</h1>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal CRU Course -->
<div class="modal fade" id="cruCourseModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-title">Thêm chương học</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Tên chương học</label>
          <input type="text" class="form-control" id="tenChuong" autocomplete="off">
          <input type="hidden" class="form-control" id="idKhoaHoc" value="<?=$idKhoaHoc ?>">
          <input type="hidden" id="idChuongHoc">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="buton" class="btn btn-primary" id="submitCourse">Thêm</button>
        <button type="buton" class="btn btn-primary" id="updateCourse">Cập nhật</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal CRU Video -->
<div class="modal fade" id="cruVideoModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-title-video">Thêm video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" class="form-control" id="idKhoaHoc" value="<?=$idKhoaHoc ?>">
        <input type="hidden" class="form-control" id="idGiangVien" value="<?=$idUser ?>">
        <input type="hidden" class="form-control" id="idChuong" value="">
        <input type="hidden" class="form-control" id="idVideo" value="">
        <div class="form-group">
          <label>Tên video</label>
          <input type="text" id="tenVideo" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Link</label>
          <input type="text" id="link" class="form-control" autocomplete="off">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary" id="submitVideo">Thêm</button>
        <button type="button" class="btn btn-primary" id="updateVideo">Cập nhật</button>
      </div>
    </div>
  </div>
</div>
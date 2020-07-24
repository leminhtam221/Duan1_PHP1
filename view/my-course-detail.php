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
                        <ul class="lesson-list">';
                                     
                        foreach ($danhSachVideo as $video) {
                          echo '<li class="lesson-item">
                                  <a href="#id-video='.$video['id'].'" class="lession-title">'.$video['ten_video'].'</a>
                                  <span class="lesson-time">00:48</span>
                                </li>';
                        }
            echo  '     </ul>
                      </div>';
                      if(isset($_COOKIE['lecturer_id'])){
                        echo '<button class="btn btn-primary ml-3 mb-3">Thêm video</button>';
                      }
            echo  '  </div>
                  </div>';              
          }
          ?>
          </div>

          <?php if (isset($_COOKIE['lecturer_id'])): ?>
          <button class="btn btn-success">Thêm chương học</button>
          <?php endif ?>
        </div>
      </div>
      <div class="col-md-9">
        <div class="course-content">
          <div id="video-content">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="./view/base/js/jquery.min.js"></script>
<script>
$(".lesson-list").on("click", "a", function() {
  let href = $(this).attr("href");
  let idVideo = href.substring(href.lastIndexOf('=') + 1);
  $.ajax({
    type: "GET",
    url: "controller/ajax/my-course-detail.php",
    data: {
      idVideo
    },
    success: function(response) {
      let href = response;
      let idVideo = href.substring(href.lastIndexOf('/') + 1);
      let iframeTag = `<iframe class="video-show" src="https://www.youtube.com/embed/${idVideo}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`
      $('#video-content').html(iframeTag);
    }
  });
});
</script>
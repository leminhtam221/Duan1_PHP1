<link rel="stylesheet" href="view/base/main.style.css">

<div class="my-course-detail background-body py-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="course-content">
          <div id="accordion">
            <div class="card my-2">
              <div class="card-header py-3 collapsed" data-toggle="collapse" data-target="#collapse1"
                aria-expanded="false" aria-controls="collapse1">
                <h6 class="mb-0 accordion__heading">
                  Chương 1: Giới thiệu
                  <span class="accordion__sub">4 Bài</span>
                </h6>
              </div>

              <div id="collapse1" class="collapse" style="">
                <div class="card-body">
                  <ul class="lesson-list">
                    <li class="lesson-item">
                      <p class="lession-title">Bài 1: Giới thiệu chung và mục tiêu của khóa học.</p>
                      <span class="lesson-time">00:48</span>
                    </li>
                    <li class="lesson-item">
                      <p class="lession-title">Bài 1: Giới thiệu chung và mục tiêu của khóa học.</p>
                      <span class="lesson-time">00:48</span>
                    </li>
                  </ul>
                </div>

                <?php if (isset($_COOKIE['lecturer_id'])): ?>
                <button class="btn btn-primary ml-3 mb-3">Thêm video</button>
                <?php endif ?>
              </div>

            </div>
            <div class="card my-2">
              <div class="card-header py-3 collapsed" data-toggle="collapse" data-target="#collapse2"
                aria-expanded="false" aria-controls="collapse2">
                <h6 class="mb-0 accordion__heading">
                  Chương 2: Cốt lõi của NodeJS
                  <span class="accordion__sub">4 Bài</span>
                </h6>
              </div>

              <div id="collapse2" class="collapse" style="">
                <div class="card-body">
                  <ul class="lesson-list">
                    <li class="lesson-item">
                      <p class="lession-title">Bài 1: Khái niệm Server và Client (Chủ - khách)</p>
                      <span class="lesson-time">00:48</span>
                    </li>
                    <li class="lesson-item">
                      <p class="lession-title">Bài 2: Hoạt động và nhiệm vụ của một máy chủ JavaScript</p>
                      <span class="lesson-time">00:48</span>
                    </li>
                  </ul>
                </div>
                <?php if (isset($_COOKIE['lecturer_id'])): ?>
                <button class="btn btn-primary ml-3 mb-3">Thêm video</button>
                <?php endif ?>
              </div>
            </div>
          </div>

          <?php if (isset($_COOKIE['lecturer_id'])): ?>
          <button class="btn btn-success">Thêm chương học</button>
          <?php endif ?>
        </div>
      </div>
      <div class="col-md-9">
        <div class="course-content">
          <!-- <video class="video-show" controls>
            <source src="https://youtu.be/egJxjdJAuRI">
            Your browser does not support the video tag.
          </video> -->
          <iframe class="video-show" src="https://www.youtube.com/embed/egJxjdJAuRI" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
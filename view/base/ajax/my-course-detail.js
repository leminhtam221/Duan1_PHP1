/* =============== Style dots ==================*/
let isVisible = true;

function dotClick(id) {
  if (isVisible) {
    $("#divDot" + id).addClass("show-more-menu");
    $(".more-menu").removeClass("d-none");
    isVisible = false;
  } else {
    $(".more").removeClass("show-more-menu");
    $(".more-menu").addClass("d-none");
    isVisible = true;
  }
}

/* =============== Load video ==================*/
$(".lesson-list").on("click", "a", function () {
  let href = $(this).attr("href");
  let idVideo = href.substring(href.lastIndexOf("=") + 1);
  const loadVideo = "load video";
  $.ajax({
    type: "POST",
    url: "ajax/my-course-detail.php",
    data: {idVideo, loadVideo},
    success: function (response) {
      let href = response;
      let youtubeId = href.substring(href.lastIndexOf("/") + 1);
      let iframeTag = `<iframe class="video-show" src="https://www.youtube.com/embed/${youtubeId}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
      $("#video-content").html(iframeTag);
    },
  });
});

// ============== Thêm chương học ==============
$("#themModal").click(function (e) {
  e.preventDefault();
  $("#submitCourse").css("display", "block");
  $("#updateCourse").css("display", "none");
  $("#modal-title").html("Thêm khóa học");
  $("#tenChuong").val("");
});

$("#submitCourse").click(function (e) {
  e.preventDefault();
  let idKhoaHoc = $("#idKhoaHoc").val();
  let tenChuongHoc = $("#tenChuong").val();
  let themChuong = "themchuong";

  if (tenChuongHoc == "") {
    alert("tên chương học không được để trống");
  } else {
    $.ajax({
      type: "POST",
      url: "ajax/my-course-detail.php",
      data: {idKhoaHoc, tenChuongHoc, themChuong},
      success: function (response) {
        $("#accordion").html(response);
      },
    });

    $("#cruCourseModal").modal("hide");
  }
});

// =============Update chương học =================
function suaChuongHoc(idChuong) {
  $("#submitCourse").css("display", "none");
  $("#updateCourse").css("display", "block");
  $("#modal-title").html("Cập nhật khóa học");
  $("#idChuongHoc").val(idChuong);
  let layThongTinChuong = "layThongTinChuong";

  $.ajax({
    type: "POST",
    url: "ajax/my-course-detail.php",
    data: {idChuong, layThongTinChuong},
    success: function (response) {
      $("#tenChuong").val(response);
    },
  });
}

$("#updateCourse").click(function (e) {
  e.preventDefault();
  let idKhoaHoc = $("#idKhoaHoc").val();
  let tenChuongHoc = $("#tenChuong").val();
  let capNhatChuong = "capnhatchuong";
  let idChuong = $("#idChuongHoc").val();

  if (tenChuongHoc == "") {
    alert("tên chương học không được để trống");
  } else {
    $.ajax({
      type: "POST",
      url: "ajax/my-course-detail.php",
      data: {idChuong, idKhoaHoc, tenChuongHoc, capNhatChuong},
      success: function (response) {
        $("#accordion").html(response);
      },
    });

    $("#cruCourseModal").modal("hide");
  }
});

/* ==============Thêm Video============== */
function themVideo(idChuong) {
  $("#submitVideo").css("display", "block");
  $("#updateVideo").css("display", "none");
  $("#modal-title-video").html("Thêm video");
  $("#idChuong").val(idChuong);
  const tenVideo = $("#tenVideo").val("");
  const link = $("#link").val("");
}

$("#submitVideo").click(function (e) {
  e.preventDefault();
  let idKhoaHoc = $("#idKhoaHoc").val();
  let idGiangVien = $("#idGiangVien").val();
  let idChuong = $("#idChuong").val();
  let tenVideo = $("#tenVideo").val();
  let link = $("#link").val();

  if (tenVideo == "" || link == "") {
    alert("Vui lòng nhập đầy đủ thông tin");
  } else {
    $.ajax({
      type: "POST",
      url: "ajax/my-course-detail.php",
      data: {idKhoaHoc, idGiangVien, idChuong, tenVideo, link},
      dataType: "json",
      success: function (response) {
        const html = renderHTML(response);
        $("#" + idChuong).html(html);

        let href = response[response.length - 1];
        href = href.link;
        const youtubeId = href.substring(href.lastIndexOf("/") + 1);
        const iframeTag = `<iframe class="video-show" src="https://www.youtube.com/embed/${youtubeId}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
        $("#video-content").html(iframeTag);
      },
    });

    $("#cruVideoModal").modal("hide");
  }
});

/* ==============Update video============== */
function editVideo(idVideo, idChuong) {
  $("#submitVideo").css("display", "none");
  $("#updateVideo").css("display", "block");
  $("#modal-title-video").html("Sửa video");

  const editVideo = "edit video";
  $("#idChuong").val(idChuong);
  $("#idVideo").val(idVideo);

  $.ajax({
    type: "POST",
    url: "ajax/my-course-detail.php",
    data: {idVideo, editVideo},
    dataType: "json",
    success: function (response) {
      $("#tenVideo").val(response.ten_video);
      $("#link").val(response.link);
    },
  });
}

$("#updateVideo").click(function (e) {
  e.preventDefault();

  const idChuong = $("#idChuong").val();
  const idVideo = $("#idVideo").val();
  const tenVideo = $("#tenVideo").val();
  const link = $("#link").val();
  const updateVideo = "update video";

  $.ajax({
    type: "POST",
    url: "ajax/my-course-detail.php",
    data: {idChuong, idVideo, tenVideo, link, updateVideo},
    dataType: "json",
    success: function (response) {
      const html = renderHTML(response);
      $("#" + idChuong).html(html);

      let href = response.filter((item) => item.id === idVideo);
      console.log(href);
      href = href[0].link;
      const youtubeId = href.substring(href.lastIndexOf("/") + 1);
      const iframeTag = `<iframe class="video-show" src="https://www.youtube.com/embed/${youtubeId}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
      $("#video-content").html(iframeTag);
    },
  });
  $("#cruVideoModal").modal("hide");
});
/* ==============Update video============== */
function deleteVideo(idVideo, idChuong) {
  if (confirm("Bạn có thật sự muốn xóa video")) {
    const deleteVideo = "delete video";
    $.ajax({
      type: "POST",
      url: "ajax/my-course-detail.php",
      data: {idChuong, idVideo, deleteVideo},
      dataType: "json",
      success: function (response) {
        const html = renderHTML(response);
        $("#" + idChuong).html(html);

        const h1Tag = `<h1 class="font-weight-bold ml-5">Video đã xóa</h1>`;
        $("#video-content").html(h1Tag);
      },
    });
  }
}

function renderHTML(arr) {
  const html = arr.map((item) => {
    return `<li class="lesson-item">
              <a href="#id-video=${item.id}" class="lession-title">${item.ten_video}</a>
              <div class="more" id="divDot${item.id}" onclick="dotClick(${item.id})">
                <button class="more-btn p-0">
                  <span class="more-dot"></span>
                  <span class="more-dot"></span>
                  <span class="more-dot"></span>
                </button>
                <div class="more-menu d-none">
                  <ul class="more-menu-items">
                    <li class="more-menu-item">
                      <button type="button" class="more-menu-btn" data-toggle="modal" data-target="#cruVideoModal" onclick="editVideo(${item.id},${item.id_chuong})">Sửa video</button>
                    </li>
                    <li class="more-menu-item">
                      <button type="button" class="more-menu-btn">Xóa video</button>
                    </li>
                  </ul>
                </div>
              </div>
            </li>`;
  });
  return html;
}

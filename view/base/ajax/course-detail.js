/*==============POST Comment==============*/
$("#sumitComment").click(function (e) {
  e.preventDefault();
  let idUser = $("#idUser").val();
  let idKhoaHoc = $("#idKhoaHoc").val();
  let commentContent = $("#commentContent").val();
  let ngayTao = new Date().toLocaleDateString();

  if (commentContent == "") {
    alert("Comment không được để trống");
  } else {
    $.ajax({
      type: "POST",
      url: "ajax/course-detail.php",
      data: {idUser, idKhoaHoc, commentContent, ngayTao},
      success: function (response) {
        $("#comment-section").html(response);
        $("#commentContent").val("");
      },
    });
  }
});

/*===========Đánh giá==========*/
$(".inputrating").click(function (e) {
  const ratingStart = $("input[name='rating']:checked").val();
  const idKhoaHoc = $("#idKhoaHoc").val();
  const idUser = $("#idUser").val();

  if (ratingStart) {
    $.ajax({
      type: "POST",
      url: "ajax/course-detail.php",
      data: {ratingStart, idKhoaHoc, idUser},
      dataType: "json",
      success: function (response) {
        const html = renderStart(response[0], response[1]);
        $(".start-rating").html(html);
      },
    });
  }
});

const renderStart = (sum, divide) => {
  const start = Math.ceil(sum / divide);
  let html = "";
  for (let index = 1; index <= start; index++) {
    html += `<i class="fas fa-star mr-1"></i>`;
  }
  html += `&nbsp; ${start} (${divide} ratings)`;
  return html;
};

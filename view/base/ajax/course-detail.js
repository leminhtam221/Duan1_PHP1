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
      url: "controller/ajax/course-detail.php",
      data: {idUser, idKhoaHoc, commentContent, ngayTao},
      success: function (response) {
        console.log(response);
        $("#comment-section").html(response);
      },
    });
  }
});

$("#buttonSaveAvatar").css("display", "none");
$("#buttonDeleteAvatar").css("display", "none");

/*========= Xem trước hình ảnh ========== */
const readURL = function (input) {
  if (input.files && input.files[0]) {
    let reader = new FileReader();

    reader.onload = function (e) {
      $("#avatarImg").attr("src", e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
};

$("#inputUpload").on("change", function () {
  readURL(this);
  $("#buttonUploadAvatar").css("display", "none");
  $("#buttonSaveAvatar").css("display", "inline-block");
  $("#buttonDeleteAvatar").css("display", "inline-block");
});

/*========== Lưu hình ảnh ========= */
$("#buttonSaveAvatar").click(function (e) {
  e.preventDefault();
  const updateAvatar = "updateAvatar";
  const idUser = $("#idUser").val();
  const hinhAnh = $("#inputUpload")[0].files[0].name;

  /*=============Upload hình ảnh=============*/
  let fd = new FormData();
  let files = $("#inputUpload")[0].files[0];
  fd.append("file", files);

  $.ajax({
    url: "upload-avatar.php",
    type: "POST",
    data: fd,
    contentType: false,
    processData: false,
    success: function (response) {},
  });

  /*=============Lưu thông tin Databse=============*/
  $.ajax({
    type: "POST",
    url: "ajax/profile-user.php",
    data: {idUser, hinhAnh, updateAvatar},
    success: function (response) {
      const src = `upload/avatar/${response}`;
      $("#avatarImg").attr("src", src);
      alert("Cập nhật thành công");

      $("#buttonUploadAvatar").css("display", "inline-block");
      $("#buttonSaveAvatar").css("display", "none");
      $("#buttonDeleteAvatar").css("display", "none");
    },
  });
});

/*========== Hủy cập nhật hình ảnh ============*/
$("#buttonDeleteAvatar").click(function (e) {
  e.preventDefault();
  const removeAvatar = "removeAvatar";
  const idUser = $("#idUser").val();

  $.ajax({
    type: "POST",
    url: "ajax/profile-user.php",
    data: {idUser, removeAvatar},
    success: function (response) {
      if (response !== "notfound") {
        const src = `upload/avatar/${response}`;
        $("#avatarImg").attr("src", src);
      } else {
        const src = `view/base/images/user-avatar.jpg`;
        $("#avatarImg").attr("src", src);
      }

      $("#buttonUploadAvatar").css("display", "inline-block");
      $("#buttonSaveAvatar").css("display", "none");
      $("#buttonDeleteAvatar").css("display", "none");
    },
  });
});

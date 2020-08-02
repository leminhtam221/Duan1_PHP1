/*=============Add Courses=============*/
$("#submitAddCourses").click(function (e) {
  e.preventDefault();
  let idUser = $("#idGiangVien").val();
  let tenKhoaHoc = $("#tenKhoaHoc").val();
  let danhMuc = $("#danhMuc").val();
  let clip = $("#clip").val();
  let moTa = $("#moTa").val();
  let donGia = $("#donGia").val();
  let khuyenMai = $("#khuyenMai").val();
  let hinhAnh = $("#hinhAnh").val();

  if (hinhAnh !== "") {
    hinhAnh = $("#hinhAnh")[0].files[0].name;
  }

  let arr = [];
  arr.push(idUser, tenKhoaHoc, danhMuc, hinhAnh, clip, moTa, donGia, khuyenMai);
  arr = arr.filter((item) => item !== "");

  if (arr.length < 1) {
    alert("Vui lòng nhập đầy đủ thông tin");
  } else {
    /*=============Upload hình ảnh=============*/
    let fd = new FormData();
    let files = $("#hinhAnh")[0].files[0];
    fd.append("file", files);

    $.ajax({
      url: "upload.php",
      type: "post",
      data: fd,
      contentType: false,
      processData: false,
      success: function (response) {
        alert(response);
      },
    });

    /*=============Lưu thông tin database=============*/
    $.ajax({
      type: "POST",
      url: "ajax/my-courses.php",
      data: {idUser, tenKhoaHoc, danhMuc, hinhAnh, clip, moTa, donGia, khuyenMai},
      success: function (response) {
        let html = `<div class="row">${response}</div>`;
        $("#v-pills-home").html(html);
        alert("Thêm thành công");
        clearInput();
      },
    });
  }
});

const clearInput = () => {
  $("#tenKhoaHoc").val("");
  $("#danhMuc").val("");
  $("#hinhAnh").val("");
  $("#clip").val("");
  $("#moTa").val("");
  $("#donGia").val("");
  $("#khuyenMai").val("");
};

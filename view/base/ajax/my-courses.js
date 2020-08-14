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
  } else {
    $("#hinhAnh").val("");
  }

  let arr = [];
  arr.push(idUser, tenKhoaHoc, danhMuc, clip, moTa, donGia, khuyenMai);
  arr = arr.filter((item) => item !== "");

  if (arr.length < 7) {
    swal({
      title: "Opp",
      text: "Vui lòng nhập đầy đủ thông tin",
      icon: "warning",
    });
  } else if (tenKhoaHoc.length < 25) {
    swal({
      title: "Opp",
      text: "Tên khóa học phải từ 25 ký tự trở lên",
      icon: "warning",
    });
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
      success: function (response) {},
    });

    /*=============Lưu thông tin database=============*/
    $.ajax({
      type: "POST",
      url: "ajax/my-courses.php",
      data: {idUser, tenKhoaHoc, danhMuc, hinhAnh, clip, moTa, donGia, khuyenMai},
      success: function (response) {
        let html = `<div class="row">${response}</div>`;
        $("#v-pills-home").html(html);
        swal("Good job!", "Thêm khóa học thành công!", "success");
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

/*====Cập nhật trạng thái khóa học====*/
const statusCourse = (element, status, idCourse) => {
  if (status) {
    $(element).html("Ẩn");
    $(element).removeClass("btn-success");
    $(element).addClass("btn-warning");
    $(element).attr("onclick", `statusCourse(this,false,${idCourse})`);
  } else {
    $(element).html("Hiện");
    $(element).removeClass("btn-warning");
    $(element).addClass("btn-success");
    $(element).attr("onclick", `statusCourse(this,true,${idCourse})`);
  }

  $.ajax({
    type: "POST",
    url: "ajax/my-courses.php",
    data: {statusCourse: status, idCourse},
    success: function (response) {
      console.log(response);
    },
  });
};

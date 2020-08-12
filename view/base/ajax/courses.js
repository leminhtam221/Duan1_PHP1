/*=====Filter khóa học theo giá=====*/
$("#minPrice, #maxPrice, #orderCourses").change(function (e) {
  e.preventDefault();
  const minPrice = $("#minPrice").val();
  const maxPrice = $("#maxPrice").val();
  const orderCourses = $("#orderCourses").val();
  let idDanhMuc = 0;
  let trang = 1;

  const searchParams = new URLSearchParams(window.location.search);
  if (searchParams.has("id-danh-muc")) {
    idDanhMuc = searchParams.get("id-danh-muc");
  }
  if (searchParams.has("trang")) {
    trang = searchParams.get("trang");
  }

  $.ajax({
    type: "post",
    url: "ajax/courses.php",
    data: {idDanhMuc, trang, minPrice, maxPrice, orderCourses},
    success: function (response) {
      console.log(response);
      const html = `<div class=row>${response}</div>`;
      $("#coursesContent").html(html);
    },
  });
});

const chuyenTrang = (trang) => {
  const minPrice = $("#minPrice").val();
  const maxPrice = $("#maxPrice").val();
  const orderCourses = $("#orderCourses").val();
  let idDanhMuc = 0;

  const searchParams = new URLSearchParams(window.location.search);
  if (searchParams.has("id-danh-muc")) {
    idDanhMuc = searchParams.get("id-danh-muc");
  }

  $.ajax({
    type: "post",
    url: "ajax/courses.php",
    data: {idDanhMuc, trang, minPrice, maxPrice, orderCourses},
    success: function (response) {
      const html = `<div class=row>${response}</div>`;
      $("#coursesContent").html(html);
    },
  });
};

$("#buttonActivate").click(function (e) {
  e.preventDefault();
  const activateCode = $("#activateCode").val();

  if (activateCode !== "") {
    $.ajax({
      type: "POST",
      url: "ajax/activate-courses.php",
      data: {activateCode},
      dataType: "json",
      success: function (response) {
        if (response[0]) {
          swal({
            title: "Success",
            text: response[1],
            icon: "success",
          });
        } else {
          swal({
            title: "Opp",
            text: response[1],
            icon: "warning",
          });
        }
      },
    });
  } else {
    swal({
      title: "Opp",
      text: "Vui lòng nhập mã kích hoạt",
      icon: "warning",
    });
  }
});

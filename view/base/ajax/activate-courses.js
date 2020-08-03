$("#buttonActivate").click(function (e) {
  e.preventDefault();
  const activateCode = $("#activateCode").val();

  if (activateCode !== "") {
    $.ajax({
      type: "POST",
      url: "ajax/activate-courses.php",
      data: {activateCode},
      success: function (response) {
        alert(response);
      },
    });
  } else {
    alert("Vui lòng nhập mã kích hoạt");
  }
});

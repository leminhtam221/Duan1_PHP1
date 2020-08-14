$("#submitEmail").click(function (e) {
  e.preventDefault();
  const subject = $("#subject").val();
  const email = $("#email").val();
  const content = $("#content").val();
  const password = $("#password").val();

  var re = /\S+@\S+\.\S+/;

  if (subject == "" && email == "" && content == "") {
    swal({
      title: "Opp",
      text: "Vui lòng nhập đủ thông tin",
      icon: "warning",
    });
  } else if (!re.test(email)) {
    swal({
      title: "Opp",
      text: "Email không đúng định dạng",
      icon: "warning",
    });
  } else {
    $.ajax({
      type: "POST",
      url: "ajax/contact.php",
      data: {subject, email, password, content},
      success: function (response) {
        if (response) {
          swal({
            title: "Success",
            text: "Gửi mail thành công",
            icon: "success",
          });
        } else {
          swal({
            title: "Opp",
            text: "Có lỗi trong quá trình gửi mail",
            icon: "warning",
          });
        }
      },
    });
  }
});

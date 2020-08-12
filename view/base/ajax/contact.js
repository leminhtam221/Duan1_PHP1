$("#submitEmail").click(function (e) {
  e.preventDefault();
  const subject = $("#subject").val();
  const email = $("#email").val();
  const content = $("#content").val();
  const password = $("#password").val();

  var re = /\S+@\S+\.\S+/;

  if (subject == "" && email == "" && content == "") {
    alert("Vui lòng nhập đủ thông tin");
  } else if (!re.test(email)) {
    alert("Email không đúng định dạng");
  } else {
    $.ajax({
      type: "POST",
      url: "ajax/contact.php",
      data: {subject, email, password, content},
      success: function (response) {
        if (response) {
          alert("Gửi mail thành công");
          console.log(response);
        } else {
          alert("Có lỗi trong quá trình gửi mail");
          console.log(response);
        }
      },
    });
  }
});

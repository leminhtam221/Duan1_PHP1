$("#forgetPasswordLink").click(function (e) {
  e.preventDefault();
  const userAccount = $("#inputName").val();
  const checkAccountUser = checkAccount(userAccount);

  checkAccountUser.then((result) => {
    if (result) {
      const {tai_khoan, email} = result;
      $.ajax({
        type: "POST",
        url: "ajax/reset-password.php",
        data: {tai_khoan, email},
        success: function (response) {
          if (response) {
            $("#inputNameErr").html("Mật khẩu mới đã được gửi vào email của bạn!");
          } else {
            $("#inputNameErr").html("Có lỗi trong quá trình gửi email");
          }
        },
      });
    }
  });
});

const checkAccount = async (userAccount) => {
  let checkAccount = false;
  if (userAccount === "") {
    $("#inputNameErr").html("Vui lòng nhập vào tài khoản hoặc email");
  } else {
    $("#inputNameErr").html("");
    await $.ajax({
      type: "POST",
      url: "ajax/reset-password.php",
      data: {userAccount},
      dataType: "json",
      success: function (response) {
        if (response) {
          checkAccount = response;
        } else {
          $("#inputNameErr").html("Tên tài khoản hoặc email không chính xác");
        }
      },
    });
  }
  return checkAccount;
};

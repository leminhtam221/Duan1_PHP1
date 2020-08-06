/*=============Show notification=============*/
let isShow = false;
$("#notication-li").click(function (e) {
  e.preventDefault();
  isShow = !isShow;
  if (isShow) {
    $("#notification").addClass("show-notification");
  } else {
    $("#notification").removeClass("show-notification");
  }
});

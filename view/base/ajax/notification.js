/*=============Show Hide Seen notification=============*/
let isShow = false;
$("#notication-li").click(function (e) {
  e.preventDefault();
  /*====Show Hide notification====*/
  isShow = !isShow;
  if (isShow) {
    $("#notification").addClass("show-notification");
  } else {
    $("#notification").removeClass("show-notification");
  }

  /*====Seen notification====*/
  let counterNumber = $("#counterNumber").html();
  counterNumber = parseInt(counterNumber);

  if (counterNumber) {
    const seenNotification = "Đã click xem thông báo";
    $.ajax({
      type: "POST",
      url: "ajax/notification.php",
      data: {seenNotification},
      success: function (response) {
        if (response) {
          $("#counterNumber").css("display", "none");
        }
      },
    });
  }
});

/*=============Seen detail notification=============*/
const seenDetailNotification = (idNotification) => {
  const href = $("#notifiItem" + idNotification).attr("href");
  if (href) {
    window.location = href;
  }

  const isExists = $("#isRead" + idNotification).length;
  if (isExists) {
    const seenDetailNotification = "Đã click xem vào chi tiết thông báo";
    $.ajax({
      type: "POST",
      url: "ajax/notification.php",
      data: {idNotification, seenDetailNotification},
      success: function (response) {
        if (response) {
          $("#isRead" + idNotification).css("display", "none");
        }
      },
    });
  }
};

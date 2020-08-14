$("#submitCheckout").click(function (e) {
  const firstname = $("#firstname").val();
  const lastname = $("#lastname").val();
  const username = $("#username").val();
  const address = $("#address").val();
  // const adress2 = $("#adress2").val();

  const checkoutSuccess = "checkout success";

  let arr = [];
  arr.push(firstname, lastname, username, address);
  arr = arr.filter((item) => item !== "");
  if (arr.length >= 4) {
    $.ajax({
      type: "POST",
      url: "ajax/checkout.php",
      data: {checkoutSuccess},
      dataType: "json",
      success: function (response) {
        $("#counterNumber").removeClass("d-none");
        $("#counterNumber").html(response[0].sl);
        const html = renderNotfication(response[1]);
        $("#notification").html(html);
      },
    });
  }
});

const renderNotfication = (arr) => {
  let html = "";
  arr.forEach((item) => {
    html += `<a href="${item.url}" class="notification__item" id="notifiItem${item.id}"
              onclick="seenDetailNotification(${item.id})">
              ${item.noi_dung}
              ${item.trang_thai <= 2 ? `<div class="is-read" id="isRead${item.id}"></div>` : ""}
            </a>`;
  });
  return html;
};

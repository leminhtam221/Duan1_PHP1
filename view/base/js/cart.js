

function setTotalPrice() {
  var totalPrice = 0;
  $('.itemPrice').each(function () {
    $(this).html(new Intl.NumberFormat().format($(this).html().replace(/\D/g, '')) + ' đ')
    totalPrice += Number($(this).html().replace(/\D/g, ''))
  })
  $('#totalPrice').html(new Intl.NumberFormat().format(totalPrice) + ' đ')
  $('#finalPrice').html(new Intl.NumberFormat().format($('#shippingPrice').html().replace(/\D/g, '') * 1 + totalPrice) + ' đ')
}
var getExpectTime = () => {
  var d = new Date()
  var dayWillShipping = new Date(d.getTime() + 432000000)
  var weekday = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy']
  var day = weekday[dayWillShipping.getDay()] + ', ngày ' + dayWillShipping.getDate() + ' tháng ' + (dayWillShipping.getMonth() + 1) + ' năm ' + dayWillShipping.getFullYear()
  return day
}
$('#expectTime').html(getExpectTime());

// them khoa hoc 
$('.btn-add').each(function () {
  $(this).click(function () {
    const prodId = $(this).attr('prodid');
    var qty = $('#cart-counter').text();
    if ($('#cart-counter').text() == '0') {
      $('#cart-counter').text(1)
    } else {
      $('#cart-counter').text(Number($('#cart-counter').text()) + 1)
    }
    $.ajax({
      method: "POST",
      url: "controller/ajax.php",
      data: { prodid: prodId },
      success: function (msg) {
        if (~msg) {
          swal({
            icon: "success",
            title: "Đã thêm vào giỏ hàng!",
          });
          $('.swal-button--confirm').toggleClass('btn')
        }
      }
    })
  })
});
function onHdlBtnDel2(el) {
  $.ajax({
    method: "POST",
    url: "controller/ajax.php",
    data: { delId: $(el).attr('data-id') },
    success: function (msg) {
      if (msg) {
        onHdlBtnDel(el);
        updateQuantity();
        setTotalPrice();
      }
    }
  })
}

function onHdlBtnDel(el) {
  var grandEl = el.parentElement.parentElement.parentElement.parentElement.parentElement;
  if (grandEl.nextElementSibling.tagName == 'HR') {
    grandEl.nextElementSibling.remove()
  } else if (grandEl.nextElementSibling.tagName == 'P' && grandEl.previousElementSibling.tagName == 'HR') {
    grandEl.previousElementSibling.remove()
  }
  else if (grandEl.nextElementSibling.tagName == 'P' && grandEl.previousElementSibling.tagName == 'H5') {
    grandEl.nextElementSibling.remove()
    grandEl.remove()
    document.getElementById('cart').innerHTML += `<a href="#" type="button" class="card-link-secondary "><i class="fa fa-home mr-1"></i>
      Trở lại trang chủ </a>`
    document.getElementById('expectTimeEl').remove()
    document.getElementById('payment').remove()
  }
  grandEl.remove()
}

function updateQuantity() {
  $('#cart-counter').html(Number(document.getElementById('cart-counter').innerHTML) - 1)
  $('#cart-counter2').html(Number(document.getElementById('cart-counter2').innerHTML) - 1)
}



$(document).ready(function () {

  // them khoa hoc 
  $('.btn-add').each(function () {
    $(this).click(function () {
      const prodId = $(this).attr('prodid');
      var qty = $('#cart-counter').text();
      if ($('#cart-counter').text() == '0') {
        $('#cart-counter').text(1)
      }
      $.ajax({
        method: "POST",
        url: "controller/ajax.php",
        data: { prodid: prodId },
        success: function (msg) {
          if (~msg) {
            $('#alert-2').addClass('alert-2');
            setTimeout(() => {
              $('#alert-2').removeClass('alert-2'); ('alert-2');
            }, 1550);
            if (msg) {
              $('#cart-counter').text(Number(qty) + 1);
            }
          }
        }
      })
    })
  });

})

function onHdlBtnDel2(el) {
  $.ajax({
    method: "POST",
    url: "controller/ajax.php",
    data: { delId: $(el).attr('data-id') },
    success: function (msg) {
      if (msg) {
        onHdlBtnDel(el);
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
  updateQuantity()
}

function updateQuantity() {
  document.getElementById('cart-counter').innerHTML = Number(document.getElementById('cart-counter').innerHTML) - 1
  document.getElementById('cart-counter2').innerHTML = Number(document.getElementById('cart-counter2').innerHTML) - 1
}

$(document).ready(function(){
  $('.btn-add').each(function(){
    $(this).click(function(){
      const prodId = $(this).attr('prodid');
      var qty = $('#cart-counter').text();
      $.ajax({
        method: "POST",
        url: "controller/ajax.php",
        data: { prodid: prodId },
        success: function(msg){
          if(~msg){
            $('#alert-2').addClass('alert-2');
              setTimeout(() => {
                $('#alert-2').removeClass('alert-2');('alert-2');
              }, 3100);
            if(msg){
              $('#cart-counter').text(Number(qty)+1);
            }
          }
        }
      })
    })
  })
})

// document.getElementById('').addEventListener('click', () => {
//   document.getElementById('alert-2').classList.add('alert-2');
//   setTimeout(() => {
//     document.getElementById('div').classList.remove('alert-2');
//   }, 3100);
// })
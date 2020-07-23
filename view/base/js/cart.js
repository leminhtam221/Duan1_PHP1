$(document).ready(function(){
  $('.btn-add').each(function(){
    $(this).click(function(){
      const prodId = $(this).attr('prodid');
      $.ajax({
        method: "POST",
        url: "controller/ajax.php",
        data: { prodid: prodId },
        success: function(msg){
          if(~msg){
            console.log(prodId);
            $('#alert-2').addClass('alert-2');
            setTimeout(() => {
              $('#alert-2').removeClass('alert-2');('alert-2');
            }, 3100);
            $('#cart-counter').text(msg);
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
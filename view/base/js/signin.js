$(document).ready(function(){
   const patt = /^[a-z0-9][A-z0-9\.\-\_\@]{5,}$/; // user name pattern

   // check user name while keyup
   $('#si-name').keyup(function(e){
      if(!patt.test($('#si-name').val())){
         $('#si-name-err').html('* Tài khoản không hợp lệ');
      }else{
         $('#si-name-err').html('');
         if(e.keyCode==13){
            $('#signin-form').submit();
         }
      }
   })
   $('#si-pwd').keyup(function(e){
      if(e.keyCode==13){
         $('#signin-form').submit();
      }
   })

   // prevent submit
   $('#btn-signin').click(function(){
      if(patt.test($('#si-name').val())&&$('#si-pwd').val().trim()!=''){
         $('#signin-form').submit();
      }
   })


   // login animate
   $('#user-dd').slideUp();
   $('#user-btn').click(function(){
      $('#user-dd').slideToggle(200);
   })
})
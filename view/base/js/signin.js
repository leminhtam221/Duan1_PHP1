$(document).ready(function(){
   const patt = /^[a-z0-9][A-z0-9\.\-\_\@]{5,}$/;
   $('#si-name').keyup(function(){
      if(!patt.test($('#si-name').val())){
         $('#si-name-err').html('* Tài khoản không hợp lệ');
      }else{
         $('#si-name-err').html('');
      }
   })
   $('#btn-signin').click(function(){
      if(patt.test($('#si-name').val())&&$('#si-pwd').val().trim()!=''){
         $('#signin-form').submit();
      }
   })
})
$(document).ready(function(){
   const unamepatt = /[a-zA-Z0-9\_\-\.]{6,16}/;
   const emailpatt = /^[a-z][a-z0-9\_\.]{2,30}@[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$/;
   const pwdpatt = /.{6,16}/;
   $('#su-name').keyup(function(){
      if(!unamepatt.test($('#su-name').val().trim())){
         $('#su-name-err').html('* Tên tài khoản 6-16 kí tự chỉ gồm chữ in hoa, chữ in thường, chữ số, dấu gạch dưới, dấu gạch ngang và dấu chấm');
      }else{
         $('#su-name-err').html('');
      }
      $.getJSON( "view/base/usernames.json", function( data ) {
         for(i of data){
            if($('#su-name').val().trim()==i){
               $('#su-name-err').html('* Tài khoản đã tồn tại');
            }
         } 
      })
   })
   $('#su-mail').keyup(function(){
      if(!emailpatt.test($('#su-mail').val().trim())){
         $('#su-mail-err').html('* Email không hợp lệ');
      }else{
         $('#su-mail-err').html('');
      }
   })
   $('#su-pwd').keyup(function(){
      if(!pwdpatt.test($('#su-pwd').val().trim())){
         $('#su-pwd-err').html('* Mật khấu 6-16 kí tự');
      }else{
         $('#su-pwd-err').html('');
      }
   })
   $('#su-re-pwd').keyup(function(){
      if($('#su-re-pwd').val().trim()!=$('#su-pwd').val().trim()){
         $('#su-re-pwd-err').html('* Mật khấu không đúng');
      }else{
         $('#su-re-pwd-err').html('');
      }
   })
   $('#su-fname').keyup(function(){
      if($('#su-fname').val().trim()!=''){
         $('#su-fname-err').html('');
      }
   })
   $('#su-lname').keyup(function(){
      if($('#su-lname').val().trim()!=''){
         $('#su-lname-err').html('');
      }
   })
   $('#btn-signup').click(function(){
      if(!unamepatt.test($('#su-name').val().trim())){
         $('#su-name-err').html('* Tên tài khoản 6-16 kí tự chỉ gồm chữ in hoa, chữ in thường, chữ số, dấu gạch dưới, dấu gạch ngang và dấu chấm');
      }if(!emailpatt.test($('#su-mail').val().trim())){
         $('#su-mail-err').html('* Email không hợp lệ');
      }
      if(!pwdpatt.test($('#su-pwd').val().trim())){
         $('#su-pwd-err').html('* Mật khấu 6-16 kí tự');
      }if($('#su-re-pwd').val().trim()!=$('#su-pwd').val().trim()){
         $('#su-re-pwd-err').html('* Mật khấu không đúng');
      }if($('#su-fname').val().trim()==''){
         $('#su-fname-err').html('* Vui lòng nhập họ');
      }if($('#su-lname').val().trim()==''){
         $('#su-lname-err').html('* Vui lòng nhập tên');
      }
      if(unamepatt.test($('#su-name').val().trim())&&emailpatt.test($('#su-mail').val().trim())&&pwdpatt.test($('#su-pwd').val().trim())&&$('#su-re-pwd').val().trim()==$('#su-pwd').val().trim()&&$('#su-fname').val().trim()!=''&&$('#su-lname').val().trim()!=''){
         $('#signup-form').submit();
      }
   })



})
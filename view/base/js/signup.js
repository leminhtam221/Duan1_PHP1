$(document).ready(function(){
   const unamepatt = /[a-zA-Z0-9\_\-\.]{6,16}/;
   const emailpatt = /^[a-z][a-z0-9\_\.]{2,30}@[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$/;
   const pwdpatt = /.{6,16}/;
   const textpatt = /^[a-zA-Z0-9đĐeEèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬìÌỉỈĩĨíÍịỊòÒỏỎõÕóÓọỌôÔồỒổỔỗỖốỐộỘơƠờỜởỞỡỠớỚợỢùÙủỦũŨúÚụỤưƯừỪửỬữỮứỨựỰỳỲỷỶỹỸýÝỵỴ\s]{2,20}$/;
   $('#su-name').keyup(function(){
      $.post("controller/ajax.php",
         { utemp: $('#su-name').val()},
         function(data, status){
            if(status&&data){
               $('#su-name-err').html('* Tài khoản đã tồn tại');
            }if(status&&!data){
               if(!unamepatt.test($('#su-name').val().trim())){
                  $('#su-name-err').html('* Tên tài khoản 6-16 kí tự chỉ gồm chữ in hoa, chữ in thường, chữ số, dấu gạch dưới, dấu gạch ngang và dấu chấm');
               }else{
                  $('#su-name-err').html('');
               }
            }
      });
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
      if(!textpatt.test($('#su-fname').val().trim())){
         $('#su-fname-err').html('* Họ không hợp lệ');
      }else{
         $('#su-fname-err').html('');
      }
   })
   $('#su-lname').keyup(function(){
      if(!textpatt.test($('#su-lname').val().trim())){
         $('#su-lname-err').html('* Tên không hợp lệ');
      }else{
         $('#su-lname-err').html('');
      }
   })
   $('#btn-signup').click(function(){
      $.post("controller/ajax.php",
         { utemp: $('#su-name').val()},
         function(data, status){
            if(status&&data){
               $('#su-name-err').html('* Tài khoản đã tồn tại');
               if(!unamepatt.test($('#su-name').val().trim())){
                  $('#su-name-err').html('* Tên tài khoản 6-16 kí tự chỉ gồm chữ in hoa, chữ in thường, chữ số, dấu gạch dưới, dấu gạch ngang và dấu chấm');
               }if(!unamepatt.test($('#su-name').val().trim())){
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
            }if(status&&!data){
               if(!unamepatt.test($('#su-name').val().trim())){
                  $('#su-name-err').html('* Tên tài khoản 6-16 kí tự chỉ gồm chữ in hoa, chữ in thường, chữ số, dấu gạch dưới, dấu gạch ngang và dấu chấm');
               }if(!unamepatt.test($('#su-name').val().trim())){
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
               else if(unamepatt.test($('#su-name').val().trim())){
                  if(emailpatt.test($('#su-mail').val().trim())){
                     if(pwdpatt.test($('#su-pwd').val().trim())){
                        if($('#su-re-pwd').val().trim()==$('#su-pwd').val().trim()){
                           if(textpatt.test($('#su-fname').val().trim())){
                              if(textpatt.test($('#su-lname').val().trim())){
                                 $('#signup-form').submit();
                              }
                           }
                        }
                     }
                  }
               }
            }
      });
   })
   const blurHdl = document.getElementsByClassName('blur-hdl');
   for(let i of blurHdl){
      i.addEventListener('blur',()=>{
         if(i.value.trim()==''){
            i.nextElementSibling.innerHTML = '';
         }
      })
   }



})
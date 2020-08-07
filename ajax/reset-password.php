<?php
  require_once "./../model/DB.php";

  require_once "./../lib/PHPMailer/src/PHPMailer.php";
  require_once "./../lib/PHPMailer/src/Exception.php";
  require_once "./../lib/PHPMailer/src/OAuth.php";
  require_once "./../lib/PHPMailer/src/POP3.php";
  require_once "./../lib/PHPMailer/src/SMTP.php";

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  
  
  if(isset($_POST['userAccount'])){
    $userAccount = $_POST['userAccount'];
  
    $user = find("SELECT * FROM user WHERE tai_khoan='$userAccount'");
    $user1 = find("SELECT * FROM giang_vien WHERE tai_khoan='$userAccount'");

    if(empty($user) && empty($user1)){
      $isFound = json_encode(false);
    }else if(!empty($user)){
      $isFound = json_encode($user);
    }else{
      $isFound = json_encode($user1);
    }

    echo  $isFound;
  }

  if(isset($_POST['email']) && isset($_POST['tai_khoan'])){
    $userAccount = $_POST['tai_khoan'];
    $email = $_POST['email'];
    $newPassword = generateRandomString();

    $user  =  find("SELECT * FROM user WHERE tai_khoan='$userAccount'");
    $user1 =  find("SELECT * FROM giang_vien WHERE tai_khoan='$userAccount'");

    if(!empty($user)){
      $sql = "UPDATE user SET mat_khau = '$newPassword' WHERE tai_khoan='$userAccount'";
      execSQL($sql,1);
    }else{
      $sql = "UPDATE giang_vien SET mat_khau = '$newPassword' WHERE tai_khoan='$userAccount'";
      execSQL($sql,1);
    }

    $mail = new PHPMailer(true);
    $isSend = false;
    try {
      //Server settings
      $mail->SMTPDebug = 2;
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'le.minhtam16082000@gmail.com';
      $mail->Password = 'Minhtam168A@1';
      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;
   
      //Recipients
      $mail->CharSet = 'UTF-8';
      $mail->setFrom('le.minhtam16082000@gmail.com', 'From admin Courcity');
      $mail->addAddress($email);
   
      //Content
      $mail->isHTML(true);
      $mail->Subject = 'Reset mật khẩu';
      $mail->Body    = 'Mật khẩu mới của bạn là '.$newPassword;
      $mail->AltBody = '';
   
      $mail->send();
      
      $isSend = true;
    }catch (Exception $e) {
      $isSend = false;
    }
    echo $isSend;
    
  }
  
  function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
?>
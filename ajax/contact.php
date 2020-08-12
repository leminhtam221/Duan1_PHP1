<?php
  require_once "./../lib/PHPMailer/src/PHPMailer.php";
  require_once "./../lib/PHPMailer/src/Exception.php";
  require_once "./../lib/PHPMailer/src/OAuth.php";
  require_once "./../lib/PHPMailer/src/POP3.php";
  require_once "./../lib/PHPMailer/src/SMTP.php";

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  if(isset($_POST['email']) && isset($_POST['content'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];

    $mail = new PHPMailer(true);
    $isSend = false;
    try {
      //Server settings
      $mail->SMTPDebug = 2;
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = $email;
      $mail->Password = $password;
      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;
   
      //Recipients
      $mail->CharSet = 'UTF-8';
      $mail->setFrom($email);
      $mail->addAddress('le.minhtam16082000@gmail.com');
   
      //Content
      $mail->isHTML(true);
      $mail->Subject = $subject;
      $mail->Body    = $content;
      $mail->AltBody = '';
   
      $mail->send();
      
      $isSend = true;
    }catch (Exception $e) {
      $isSend = false;
    }
    echo $isSend;
  }

?>
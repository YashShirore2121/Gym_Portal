   <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

     require 'phpmailer/src/Exception.php';
     require 'phpmailer/src/PHPMailer.php';
     require 'phpmailer/src/SMTP.php';

     $mail = new PHPMailer(true);
     $mail->isSMTP();
     $mail->Host = 'smtp.gmail.com';
     $mail->SMTPAuth=true;
     $mail->Username='akashghorkhana2002@gmail.com';
     $mail->Password='lpsugfmwjfdjiotv';
     $mail->SMTPSecure='ssl';
     $mail->Port=465;
     $mail->setfrom('akashghorkhana2002@gmail.com'); 
     $mail->addAddress('yashwantshirore3421@gmail.com');
     $mail->isHTML(true);
     $mail->Subject='Text';
     $mail->Body='Hello! first mail ';
     if($mail->Send())
      {
         echo"Email Sent!!!";
      }
      else{
         echo"Error!!!";
      }


?>
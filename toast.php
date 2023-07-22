<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="style.css">

    
</head>
<body>
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
     $mail->addAddress($_POST["Email"]);
     $mail->isHTML(true);
     $mail->Subject='Text';
     $mail->Body= 'Your Registration successful
                 <br>          
                    MR/MS.'.$_POST["name"].'
                    <br>
               your subscription period is '.$_POST["date"]. 'to '.$edate.' Thank you!';
     if($mail->Send())
      {
         echo"Email Sent!!!";
      }
      else{
         echo"Error!!!";
      }
      ?>
    <div class="popup open-popup" id="popup">
        <img src="tick.jpg">
        <h2>Thank You!</h2>
        <p>You are successfully registered.</p>
        <button type="button" onclick="closeLocation()" >OK</button>
    </div>
<script>
    function closeLocation(){
       
        window.location = "home.php";
    }
</script>
</body>
</html>

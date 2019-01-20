<?php
    $mailto = $_POST['mail_to'];
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
  /* $mail = new PHPMailer();
  // $mail ->IsSmtp();
 //  $mail ->SMTPDebug = 0;
 //  $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   //$mail ->IsHTML(true);


   $mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
//or more succinctly:
$mail->Host = 'ssl://smtp.gmail.com:465';

   $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => true,
                'verify_peer_name' => true,
                'allow_self_signed' => false,
                'cafile' => '[path-to-cert].crt'
            )
        );
   $mail ->Username = "ezparkingsecure@gmail.com";
   $mail ->Password = "ezparking123";
   $mail ->SetFrom("ezparkingsecure@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;

   $mail ->AddAddress($mailto); */



   $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = $email;

                    $mail->Password = $password;

                    $mail->setFrom('from@example.com', 'First Last');

                    $mail->addReplyTo('replyto@example.com', 'First Last');

                    $mail->addAddress($to_id);

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }







   


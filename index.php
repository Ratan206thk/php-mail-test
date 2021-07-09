<?php
	require 'src/PHPMailer.php';
	require 'src/SMTP.php';
	require 'src/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer();

    $mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "tls";
	$mail->Port = "587";
	$mail->Username = "aaryathakur315@gmail.com";
    $mail->Password = "Sanitary143@$$";

    $mail->setFrom('ratan206thk@gmail.com', 'Mailer');
    $mail->addAddress('nityathakur206@gmail.net', 'Joe User');     //Add a recipient
    $mail->addReplyTo('kshitijkanth2000@gmail.com', 'Information');
    $mail->addCC('cc@gmail.com');
    $mail->addBCC('bcc@gmail.com');
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if ( $mail->send() ) {
		echo "Email Sent..!";
	}else{
		echo "Message could not be sent. Mailer Error:{$mail->ErrorInfo}";
	}

    $mail->smtpClose();
?>
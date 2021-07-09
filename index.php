<?php
	require 'src/PHPMailer.php';
	require 'src/SMTP.php';
	require 'src/Exception.php';
    //Define name spaces    
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
    //Create instance of PHPMailer
	$mail = new PHPMailer();
    try{
        //Set mailer to use smtp
        $mail->isSMTP();
        //Define smtp host
        $mail->Host = "smtp.gmail.com";
        //Enable smtp authentication
        $mail->SMTPAuth = true;
        //Set smtp encryption type (ssl/tls)
        $mail->SMTPSecure = "tls";
        //Port to connect smtp
        $mail->Port = "587";
        //Set gmail username
        $mail->Username = "aaryathakur315@gmail.com";
        //Set gmail password
        $mail->Password = "Sanitary143@$@";
        //Email subject
        $mail->Subject = "Test email using PHPMailer";
        //Set sender email
        $mail->setFrom('ratan206thk@gmail.com');
        //Enable HTML
        $mail->isHTML(true);
        //Email body
        $mail->Body = "<h1>This is HTML h1 Heading</h1></br><p>This is html paragraph</p>";
        //Add recipient
        $mail->addAddress('nityathakur206@gmail.com');
        //Finally send email
        $mail->send() ;
        echo "Email Sent..!";
	} 
    catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }finally{
        //Closing smtp connection
	    $mail->smtpClose();
    }
?>
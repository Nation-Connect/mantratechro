<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    if(isset($_POST['send-contact-mail']))
    {	    
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        
    }
        
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';    
    require 'PHPMailer/vendor/autoload.php';
    $mail = new PHPMailer;

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'mail.mantratechro.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'info@mantratechro.com';                     // SMTP username
        $mail->Password   = 'Mantratechro@123';                               // SMTP password
        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to
    
        //Recipients
        $mail->setFrom('info@mantratechro.com', 'TaxSahayata');
        $mail->addAddress("sugandhkumar9@gmail.com", "Mantratech");     // Add a recipient
        $mail->addReplyTo($email, $name);
    
        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = 'Name:- '.$name.'<br>Email id:- '.$email.'<br>Message:- '.$message;
        $mail->send();
        
        // $mail->ClearAddresses();
        // $mail->ClearReplyTos();
        // $mail->addReplyTo('apbiharpower@gmail.com', 'Apbiharpower');
        // $mail->addAddress($email, $name);  
        // $mail->Subject = 'Confirmation mail';
        // $mail->Body    = 'Hello <b>'.$name.'</b>,<br><br>&nbsp;We have received your query we will reach out to you shortly.';
        // $mail->send();
        echo true;
        //echo 'Message has been sent';
    } catch (Exception $e) {
        echo false;
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
 

?>
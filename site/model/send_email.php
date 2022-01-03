<?php
// $username   = 'kitudu99@gmail.com';
// $password   ='pjsudtgltsjyumgh';

// Thư viện xử lý Gửi nhận Email: phpMailer, sendMail
// 1. Khai báo thư viện Send Mail
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// 2. Sử dụng thư viện này để gửi Email (localhóst) tới 1 tài khoản Email bất kì

function sendEmailForAccountActive($email, $link){
    //Create an instance; passing `true` enables exceptions
    global $username;
    global $password;
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true; 
        $mail->Username = 'phamnga.bibi89@gmail.com';
        $mail->Password = 'ooztsifqydcbvguk';                                  //Enable SMTP authentication
        // $mail->Username   = $username;                              //Địa chỉ Email đóng vai trò gửi thư
        // $mail->Password   = $password;                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465;   
        $mail->CharSet = 'UTF-8';                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('phamnga.bibi89@gmail.com', 'Pham Thi Phuong Nga');
        $mail->addAddress($email);     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('documents/Demo.xlsx');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = '[vietcodedi.com] Active your account';
        $mail->Body    = 'Chào mừng bạn đến với localhost.com. Để sử dụng tài khoản, '.$link;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if($mail->send()){
            return true;
        }
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    return false;
}

?>

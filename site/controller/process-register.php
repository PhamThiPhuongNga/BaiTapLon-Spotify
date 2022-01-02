<?php
if(isset($_POST['btnRegister']) && $_POST['email']) //Kiểm tra Người dùng có nhấp vào nút SUBMIT chưa và đã nhập dữ liệu Email chưa
{
    // B1. Gọi lại cái đoạn kết nối DB Server
    require "../model/connect_db.php";

    // B2. Thực hiện truy vấn
    $result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
    
    // B3. Xử lý kết quả
    if(mysqli_num_rows($result) <= 0) //Kiểm tra Email chưa được dùng
    {
        $token = md5($_POST['email']).rand(10,9999); //Sử dụng giải thuật md5 để sinh ra chuỗi ngẫu nhiên được băm
        // echo $token;
        // Lưu lại thông tin đăng kí vào CSDL (Dữ liệu lấy từ index.php [FORM] gửi sang)
        $name   = $_POST['name'];
        $email  = $_POST['email'];
        $pass   = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql    = "INSERT INTO users(name, email, email_verification_link ,password) VALUES('$name', '$email', '$token', '$pass')";
        // Ra lệnh lưu vào CSDL
        mysqli_query($conn, $sql);
        
        // Sau khi lưu xong, chúng ta sẽ cần gửi tới Email đăng kí 1 đường link tới Website của chúng ta
        // Yêu cầu người dùng nhấp để kích hoạt; Biến link (đường dẫn kích hoạt) sẽ gửi vào Email
        $link = "<a href='http://localhost/project09/activation.php?key=".$email."&token=".$token."'>Nhấp vào đây để kích hoạt</a>";
        

        // Quá trình gửi Email
        include "send_email.php";
        if(sendEmailForAccountActive($email, $link)){
            echo "Vui lòng kiểm tra Hộp thư của Bạn để kích hoạt tài khoản";
        }else{
            echo "Xin lỗi. Email chưa được gửi đi. Vui lòng kiểm tra lại thông tin Đăng kí tài khoản";
        }
        // require_once('phpmail/PHPMailerAutoload.php');
        // $mail = new PHPMailer();
        // $mail->CharSet =  "utf-8";
        // $mail->IsSMTP();
        // // enable SMTP authentication
        // $mail->SMTPAuth = true;                  
        // // GMAIL username
        // $mail->Username = "your_email_id@gmail.com";
        // // GMAIL password
        // $mail->Password = "your_gmail_password";
        // $mail->SMTPSecure = "ssl";  
        // // sets GMAIL as the SMTP server
        // $mail->Host = "smtp.gmail.com";
        // // set the SMTP port for the GMAIL server
        // $mail->Port = "465";
        // $mail->From='your_gmail_id@gmail.com';
        // $mail->FromName='your_name';
        // $mail->AddAddress('reciever_email_id', 'reciever_name');
        // $mail->Subject  =  'Reset Password';
        // $mail->IsHTML(true);
        // $mail->Body    = 'Click On This Link to Verify Email '.$link.'';
        // if($mail->Send())
        // {
        //     echo "Check Your Email box and Click on the email verification link.";
        // }
        // else
        // {
        //     echo "Mail Error - >".$mail->ErrorInfo;
        // }
    }else
    {
        echo "You have already registered with us. Check Your email box and verify email.";
    }
}
?>
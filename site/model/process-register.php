<?php
if(isset($_POST['btnRegister'])) //Kiểm tra Người dùng có nhấp vào nút SUBMIT chưa và đã nhập dữ liệu Email chưa
{
    // B1. Gọi lại cái đoạn kết nối DB Server
    require "../../connect_db.php";

    // B2. Thực hiện truy vấn
    $result = mysqli_query($conn,"SELECT * FROM nguoidung WHERE email='" . $_POST['email'] . "'");

        $token = md5($_POST['email']).rand(10,9999); //Sử dụng giải thuật md5 để sinh ra chuỗi ngẫu nhiên được băm
        // echo $token;
        // Lưu lại thông tin đăng kí vào CSDL (Dữ liệu lấy từ index.php [FORM] gửi sang)
        $email  = $_POST['email'];
        $confemail  = $_POST['confirm-email'];
        $pass   = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name   = $_POST['displayname'];
        $ngay   = $_POST['day'];
        $thang   = $_POST['month'];
        $nam   = $_POST['year'];
        $gioitinh =$_POST['gender'];

        $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";  
        if(empty($email) || !preg_match($regex, $email)){
            $err['email'] = 'x Vui lòng kiểm tra lại email';
            $err1 = 'x Vui lòng kiểm tra lại email';
            // header("location: ../view/register.php?erremail=$err[email]");
        }
        if($confemail != $email ){
            $err['confirm-email'] = ' x Email nhập lại chưa đúng';
            // header("location: ../view/register.php?errcfmail=$err");
        }
        if(empty($pass) || $pass < 6 ){
            $err['password'] = 'x Vui lòng kiểm tra lại mật khẩu';
            // header("location: ../view/register.php?errpass=$err[password]");
        } 
        // $regexname = "/^{5,20}$/i";
        // || !preg_match($regexname, $name) 
        if(empty($name)){
            $err['displayname'] = ' x Vui lòng kiểm tra lại tên';
            //  header("location: ../view/register.php?errname=$err[displayname]");
        }
        if(empty($ngay) ){
            $err['day'] = ' x Bạn chưa nhập ngày sinh';
        }
        if(empty($thang) ){
            $err['month'] = ' x Bạn chưa nhập tháng sinh';
        }
        if(empty($nam) ){
            $err['year'] = ' x Bạn chưa nhập năm sinh';
        }
        if($gioitinh == false ){
            $err['gender'] = ' x Bạn chưa chọn giơi tính';
        }
    // B3. Xử lý kết quả
    if(mysqli_num_rows($result) <= 0) //Kiểm tra Email chưa được dùng
    {
        // $token = md5($_POST['email']).rand(10,9999); //Sử dụng giải thuật md5 để sinh ra chuỗi ngẫu nhiên được băm
        // // echo $token;
        // // Lưu lại thông tin đăng kí vào CSDL (Dữ liệu lấy từ index.php [FORM] gửi sang)
        // $email  = $_POST['email'];
        // $confemail  = $_POST['confirm-email'];
        // $pass   = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // $name   = $_POST['displayname'];
        // $ngay   = $_POST['day'];
        // $thang   = $_POST['month'];
        // $nam   = $_POST['year'];
        // $gioitinh =$_POST['gender']; 
        $sql    = "INSERT INTO nguoidung(ten_nguoidung,ngay,thang,nam, email,matkhau,gioitinh ,quoctich,email_verification_link ) VALUES('$name','$ngay','$thang','$nam', '$email','$pass','$gioitinh','Việt Nam','$token')";
        // Ra lệnh lưu vào CSDL
        mysqli_query($conn, $sql);
        
        // Sau khi lưu xong, chúng ta sẽ cần gửi tới Email đăng kí 1 đường link tới Website của chúng ta
        // Yêu cầu người dùng nhấp để kích hoạt; Biến link (đường dẫn kích hoạt) sẽ gửi vào Email
        $link = "<a href='http://localhost/BaiTapLon-Spotify/site/model/mail/activation.php?key=".$email."&token=".$token."'>Nhấp vào đây để kích hoạt</a>";
        

        // Quá trình gửi Email
        include "../model/mail/send_email.php";
        if(sendEmailForAccountActive($email, $link)){
            $err= "Vui lòng kiểm tra Hộp thư của Bạn để kích hoạt tài khoản";
            header("location:../view/404.php?err=$err");
        }else{
            $err= "Xin lỗi. Email chưa được gửi đi. Vui lòng kiểm tra lại thông tin Đăng kí tài khoản";
            header("location:../view/404.php?err=$err");
            // echo "Xin lỗi. Email chưa được gửi đi. Vui lòng kiểm tra lại thông tin Đăng kí tài khoản";
        }
        
    }else
    {
        $err= "You have already registered with us. Check Your email box and verify email.";
        header("location:../view/404.php?err=$err");
    }
}
else{
    $err= "Vui lòng nhập đầy đủ thông tin đăng ký!";
    header("location:../view/register.php?err=$err");
    
}
?>
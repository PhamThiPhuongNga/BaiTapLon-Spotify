
<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnlogin'])){
        $tenKH = $_POST['username'];
        $passKH = $_POST['password'];
        // $remem = $_POST['remember'];
        // if($remem == false)
        // {
        //     echo '<script type = text/javascript> alert("Hãy nhớ tôi!");</script>';
        // }
        // Bước 01: Kết nối Database Server
        include("../../connect_db.php");
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM `nguoidung` WHERE ten_nguoidung = '$tenKH' or email = '$tenKH'";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection

        $result = mysqli_query($conn,$sql);
        $data=mysqli_fetch_assoc($result);
      
        $passcheck = password_verify($passKH,$data['matkhau']);
        
        if(mysqli_num_rows($result) > 0){
            // CẤP THẺ LÀM VIỆC
            $idkh = $data['ten_nguoidung'];
            $_SESSION['isLoginOK'] = $idkh;
            header("location:../view/index.php");
            //  $_SESSION['isLoginOK'] = $tenKH;
            // header("location: ../view/index.php"); //Chuyển hướng về Trang quản trị
        }else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location: ../view/login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:../view/login.php");
    }
?>
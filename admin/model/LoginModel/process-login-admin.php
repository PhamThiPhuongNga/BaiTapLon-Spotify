
<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
   
        $tenKH = $_POST['name'];
        $passKH = $_POST['password'];
        
        include("../../../connect_db.php");
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM `user_admin` WHERE name_ad ='$tenKH' and matkhau_ad ='$passKH'";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection

        $result = mysqli_query($conn,$sql);
        $data=mysqli_fetch_assoc($result);
        
        if(mysqli_num_rows($result) > 0){
            // CẤP THẺ LÀM VIỆC
            $idkh = $data['name_ad'];
            $_SESSION['isLoginOK'] = $idkh;
            header("location:../../../admin/view/Users/table-User.php");
            //  $_SESSION['isLoginOK'] = $tenKH;
            // header("location: ../view/index.php"); //Chuyển hướng về Trang quản trị
        }else{
            $error = "Bạn nhập thông tin đăng nhập chưa chính xác";
            header("location: ../../../admin/view/login/login-admin.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
   
?>
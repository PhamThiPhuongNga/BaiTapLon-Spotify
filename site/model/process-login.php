
<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnlogin'])){
        $tenKH = $_POST['username'];
        $passKH = $_POST['password'];
        // $pass  = password_hash($_POST['password'], PASSWORD_DEFAULT);
        if(!$tenKH || !$passKH ){
            $error = "Bạn chưa nhập mật khẩu hoặc tên đăng nhập";
            header("location: ../view/login.php?error=$error");
        }
        else
        {
            include("../../connect_db.php");
            $sql = "SELECT * FROM `nguoidung` WHERE email ='$tenKH' and  ten_nguoidung='$tenKH'";
            $result = mysqli_query($conn,$sql);
            $data = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result) > 0){
                // CẤP THẺ LÀM VIỆC
                $passcheck = password_verify($passKH,$data['matkhau']);
                echo $data['matkhau'];
                echo $passKH;
                var_dump($passcheck);
                exit();
                if($passcheck){
                    $idkh = $data['ten_nguoidung'];
                    $_SESSION['isLoginOK'] = $idkh;
                    header("location:../view/index.php");
                }else{
                    $error = "Mật khẩu chưa chính xác";
                    header("location: ../view/login.php?error=$error");
                }
            }else{
                $error = "Tài khoản không tồn tại";
                header("location: ../view/login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
            }
        }
    }
    else{
        header("location:../view/login.php");
    }
?>
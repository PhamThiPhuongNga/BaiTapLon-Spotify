<?php 
if(isset($_POST['btnsetpass'])){
    $id=$_POST['txtID'];
    $passold=$_POST['pass_old'];
    $passn=$_POST['pass_new'];
    $passrn=$_POST['pass_repnew'];
    $passnew= password_hash($_POST['pass_new'], PASSWORD_DEFAULT);
    $passrepnew=password_hash($_POST['pass_repnew'], PASSWORD_DEFAULT);
    // if( empty($passrepnew) || empty($passnew) ){
    //     $err="Mật khẩu để trống hoặc nhập lại mật khẩu chưa đúng";
    //     header("location:../../site/view/account/change-password.php?error=$err");
    // }
    // else{
        include('../../connect_db.php');
        // $qrr="select * from nguoidung where ma_nguoidung = '$id'";
        // $result = mysqli_query($conn,$qrr);
        // $data=mysqli_fetch_assoc($result);
        
        // $passcheck = password_verify($passold,$data['matkhau']);
        // if(mysqli_num_rows($result) > 0 && $passcheck){
        if( empty($passrn) || empty($passn)){
            $err="Đừng để trống trường nào";
            header("location:../../site/view/account/change-password.php?error=$err");
        }
        else{
            if($passn == $passrn)
            {
                $sql = "UPDATE `nguoidung` SET `matkhau`='$passnew'
                where ma_nguoidung = '$id'";
                $ketqua = mysqli_query($conn,$sql);
                
                if(!$ketqua){
                    $err="Lỗi Update dữ liệu. Vui lòng kiểm tra lại thông tin update";
                    header("location:../../site/view/404.php?error=$err"); //Chuyển hướng lỗi
                }else{
                    $suscces ="Đã thay đổi mật khẩu thành công";
                    header("location:../../site/view/account/change-password.php?suscces=$suscces"); //Chuyển hướng lại Trang Quản trị
                }
            }
            else{
                $err="Nhập lại mật khẩu chưa chính xác!";
                header("location:../../site/view/account/change-password.php?error=$err");
            }
            
        }
        
            // }
            // else{
            //         $err="Nhập mật khẩu hiện nay chưa chính xác!";
            //         header("location:../../site/view/account/change-password.php?error=$err");
            //     }
        // }
    
     // Bước 03: Đóng kết nối
     mysqli_close($conn);
}
?>
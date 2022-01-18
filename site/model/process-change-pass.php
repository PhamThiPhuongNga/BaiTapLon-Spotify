<?php 
if(isset($_POST['btnsetpass'])){
    $id=$_POST['txtID'];
    $passold=$_POST['pass_old'];
    $passn=$_POST['pass_new'];
    $passrn=$_POST['pass_repnew'];
    $passnew= password_hash($_POST['pass_new'], PASSWORD_DEFAULT);
    $passrepnew=password_hash($_POST['pass_repnew'], PASSWORD_DEFAULT);
   
    include('../../connect_db.php');
    if( empty($passrn) || empty($passn)){
        $err="Đừng để trống trường nào hoặc phải nhập mật khẩu 6 kí tự";
        header("location:../../site/view/account/change-password.php?error=$err");
    }
    if($passrn!=$passn){
        $err="Nhập lại mật khẩu chưa chính xác!";
        header("location:../../site/view/account/change-password.php?error=$err");
    }
    else{
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
     // Bước 03: Đóng kết nối
     mysqli_close($conn);
}
?>
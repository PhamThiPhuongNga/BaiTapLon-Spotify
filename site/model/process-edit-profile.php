<?php
 if(isset($_SESSION['isLoginOK']) && isset($_POST['btnEditProfile'])){
    // Xử lý giá trị GỬI TỚI
    $Hoten = $_POST['txtHoten'];
    $Email = $_POST['txtEmail'];
    $Ngay = $_POST['txtNgay'];
    $Thang = $_POST['month'];
    $Nam = $_POST['txtNam'];
    $Gioitinh = $_POST['gender'];
    $Quoctich = $_POST['country'];

    // Bước 01: Kết nối Database Server
    include('../../connect_db.php');
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE `nguoidung` SET `ten_nguoidung`='$Hoten',`ngay`='$Ngay',`thang`='$Thang',
    `nam`='$Nam',`email`='$Email',`gioitinh`='$Gioitinh',`quoctich`='$Quoctich'
    where ten_nguoidung = '".$_SESSION['isLoginOK']."'";
    // echo $sql;

    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        $err="Lỗi Update dữ liệu. Vui lòng kiểm tra lại thông tin update";
        header("location:../../site/view/404.php?error=$err"); //Chuyển hướng lỗi
    }else{
        $suscces ="Đã lưu hồ sơ";
        header("location:../../site/view/account/profile.php?suscces = $suscces"); //Chuyển hướng lại Trang Quản trị
    }
    // Bước 03: Đóng kết nối
    mysqli_close($conn);
}
?>
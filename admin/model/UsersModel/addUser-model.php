<?php
if(isset($_POST['btnl'])){
    $hoten= $_POST['txtHoTen'];   
    $email= $_POST['txtEmail'];
    $matkhau= password_hash($_POST['txtMatkhau'], PASSWORD_DEFAULT);
    $ngay= $_POST['txtNgay'];
    $thang= $_POST['txtThang'];
    $nam= $_POST['txtNam'];
    $gioitinh= $_POST['txtGioitinh'];
    $quoctich= $_POST['txtQuoctich'];
    if(!$hoten ||!$email ||!$matkhau ||!$ngay ||!$thang ||!$nam ||!$gioitinh ||!$quoctich){
        $err="Không được để trống trường nào";
        header("location: ../../../admin/view/Users/addUser.php?error=$err");
    }
    else{
        include('../../../connect_db.php'); 
        $qr="select * from nguoidung where email='$email'";
        $kq = mysqli_query($conn,$qr);
        // Bước 03: Xử lý kết quả truy vấn
        if(mysqli_num_rows($kq) > 0){
            $err="Tài khoản đã tồn tại";
            header("location: ../../../admin/view/Users/addUser.php?error=$err");
        }
       else{
        $sql="INSERT INTO `nguoidung`(`ten_nguoidung`, `ngay`, `thang`, `nam`, `email`, `matkhau`, `gioitinh`, `quoctich`) 
        VALUES ('$hoten',' $ngay','$thang',' $nam','$email','$matkhau',' $gioitinh','$quoctich')";
        $truyvan= mysqli_query($conn,$sql);
        if($truyvan){
            $suscces="Thêm mới thành công";
            header("location: ../../../admin/view/Users/table-User.php?suscces=$suscces"); 
        }else{
            $err="Thêm mới thất bại";
            header("location: ../../../admin/view/Users/table-User.php?error=$err");
        }
       }
    }
   
    mysqli_close($conn);
}

    
?>
<?php
    // admin.php TRUYỀN DỮ LIỆU SANG
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $ma = $_GET['id'];

    // Bước 01: Kết nối Database Server
    include('../../../connect_db.php');
    // Bước 02: Thực hiện truy vấn
    $sql = "DELETE FROM `nguoidung` WHERE ma_nguoidung = '$ma'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        $suscces="Xóa thành công";
        header("location: ../../../admin/view/Users/table-User.php?suscces=$suscces"); 
    }else{
        $err="Xóa thất bại";
        header("location: ../../../admin/view/Users/table-User.php?error=$err");
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>
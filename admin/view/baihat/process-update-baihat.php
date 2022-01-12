<?php 
// Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: ../login/login-admin.php");
    }
?>
<?php

    if(isset($_POST['ma_bh'])){
        $ma_bh = $_POST['ma_bh'];
    }

    if(isset($_POST['ten_bh'])){
        $ten_bh = $_POST['ten_bh'];
    }

    $anh_bh = $_POST['anh_bh'];
    $ngaythem = $_POST['ngaythem'];
    $quocgia = $_POST['quocgia'];
    $link_bh = $_POST['link_bh'];
    $id_theloai = $_POST['id_theloai'];
    $id_abum = $_POST['id_abum'];
    $id_nghesi = $_POST['id_nghesi'];

    // b1: connect db
    require_once "../../../connect_db.php";
    // b2: truy van
    $sql = "UPDATE baihat SET  ten_bh= '$ten_bh', anh_bh = '$anh_bh', ngaythem = '$ngaythem' ,
            quocgia= '$quocgia', link_bh = '$link_bh', id_theloai = '$id_theloai',
            id_abum = '$id_abum', id_nghesi = '$id_nghesi'      
            WHERE ma_bh =  '$ma_bh'   ";
    // echo $sql;
    $ketqua = mysqli_query($conn, $sql);

    // echo $ketqua;
    if(!$ketqua){
        echo "chua update dc";
    }else{
        header("location: index.php");
    }

    // b3: dong ket noi
    mysqli_close($conn);

?>
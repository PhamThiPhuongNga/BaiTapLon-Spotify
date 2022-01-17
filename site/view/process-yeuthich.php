<?php 
//Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: login.php");
    }
    if(!isset($_SESSION['idnguoidung'])){
        header("location: login.php");
    }
//    echo  $_SESSION['idnguoidung'];
    $id_baihat = $_GET['id'];
    $id_user = $_SESSION['idnguoidung'];

    $check = 0;
    require_once "../../connect_db.php";

    $sql = "SELECT * FROM `yeuthich` 
    WHERE id_user = '$id_user' 
    AND id_baihat = '$id_baihat'";
    $ketqua = mysqli_query($conn,$sql);
    if(mysqli_num_rows($ketqua) > 0){
        // $check = 1;
        header("location: yeuthich.php");
    }else{

    $sqladd = "INSERT INTO yeuthich (id_user, id_baihat)
    VALUES ('$id_user','$id_baihat')";
    $ketquaadd = mysqli_query($conn, $sqladd);
    header("location: yeuthich.php");
    }
    
    // echo $check;







    // $sql = "INSERT INTO yeuthich (id_user, id_baihat)
    // VALUES ('$id_user','$id_baihat')";
    // $ketqua = mysqli_query($conn, $sql);

    // echo $ketqua;
    // if(!$ketqua){
    //     echo "lỗi, ko add đc gofy!";
    // }
    // else{
    //     header("location: yeuthich.php");
    // }
?>

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
    $id_yeuthich = $_GET['id'];
    // $id_user = $_SESSION['idnguoidung'];

    require_once "../../connect_db.php";
    $sql = "DELETE FROM yeuthich WHERE 	id = '$id_yeuthich'";
    $ketqua = mysqli_query($conn, $sql);

    // echo $ketqua;
    if(!$ketqua){
        echo "lỗi, ko del đc gofy!";
    }
    else{
        header("location: yeuthich.php");
    }
?>

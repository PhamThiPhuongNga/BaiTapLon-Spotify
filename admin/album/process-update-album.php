<?php

    if(isset($_POST['ma_ab'])){
        $ma_ab = $_POST['ma_ab'];
    }

    if(isset($_POST['ten_ab'])){
        $ten_ab = $_POST['ten_ab'];
    }

    $anh_ab = $_POST['anh_ab'];
    $id_nghesi = $_POST['id_nghesi'];

    // b1: connect db
    require_once "../../connect_db.php";
    // b2: truy van
    $sql = "UPDATE album SET  ten_ab= '$ten_ab', anh_ab = '$anh_ab', id_nghesi = '$id_nghesi '  WHERE ma_ab =  '$ma_ab'   ";
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
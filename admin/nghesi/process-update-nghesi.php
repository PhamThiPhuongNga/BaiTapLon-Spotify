<?php

    if(isset($_POST['id_nghesi'])){
        $id_nghesi = $_POST['id_nghesi'];
    }

    if(isset($_POST['ten_nghesi'])){
        $ten_nghesi = $_POST['ten_nghesi'];
    }

    $anh_nghesi = $_POST['anh_nghesi'];

    // b1: connect db
    require_once "../../connect_db.php";
    // b2: truy van
    $sql = "UPDATE nghesi SET  ten_nghesi = '$ten_nghesi', anh_nghesi= '$anh_nghesi'  WHERE id_nghesi =  '$id_nghesi'   ";
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
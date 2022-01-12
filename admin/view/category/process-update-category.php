<?php 
// Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: ../login/login-admin.php");
    }
?>
<?php

    if(isset($_POST['id_category'])){
        $id_category = $_POST['id_category'];
    }

    if(isset($_POST['ten'])){
        $ten = $_POST['ten'];
    }

    $anh = $_POST['anh'];
    $maunen = $_POST['maunen'];

    // b1: connect db
    require_once "../../../connect_db.php";
    // b2: truy van
    $sql = "UPDATE categories SET  ten= '$ten', anh = '$anh', maunen= '$maunen'  WHERE id_category =  '$id_category'   ";
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
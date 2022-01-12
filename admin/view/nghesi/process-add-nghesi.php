<?php 
// Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: ../login/login-admin.php");
    }
?>
<?php



    if(isset($_POST['ten_nghesi'])){
        $ten_nghesi = $_POST['ten_nghesi'];
    }

    $anh_nghesi = $_POST['anh_nghesi'];

    // b1: connect db
    require_once "../../../connect_db.php";
    // b2: truy van
    $sql = "INSERT INTO nghesi (ten_nghesi, anh_nghesi) VALUES ('$ten_nghesi', '$anh_nghesi')";
    // echo $sql;
    $ketqua = mysqli_query($conn, $sql);

    // echo $ketqua;
    if(!$ketqua){
        echo "lỗi, ko add đc gofy!";
    }else{
        header("location: index.php");
    }

    // b3: dong ket noi
    mysqli_close($conn);

?>
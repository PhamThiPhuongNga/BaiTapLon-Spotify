<?php 
// Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginadmin'])){
        header("location: ../login/login-admin.php");
    }
?>
<?php



    if(isset($_POST['ten_ab'])){
        $ten_ab = $_POST['ten_ab'];
    }

    $anh_ab = $_POST['anh_ab'];
    $id_nghesi = $_POST['id_nghesi'];

    // b1: connect db
    require_once "../../../connect_db.php";
    // b2: truy van
    $sql = "INSERT INTO album (ten_ab, anh_ab, id_nghesi) VALUES ('$ten_ab', '$anh_ab', '$id_nghesi')";
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
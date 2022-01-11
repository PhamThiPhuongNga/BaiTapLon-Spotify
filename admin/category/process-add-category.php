<?php



    if(isset($_POST['ten'])){
        $ten = $_POST['ten'];
    }

    $anh = $_POST['anh'];
    $maunen = $_POST['maunen'];

    // b1: connect db
    require_once "../../connect_db.php";
    // b2: truy van
    $sql = "INSERT INTO categories (ten, anh, maunen) VALUES ('$ten', '$anh', '$maunen')";
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
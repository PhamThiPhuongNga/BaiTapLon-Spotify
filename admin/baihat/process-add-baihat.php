<?php



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
    require_once "../../connect_db.php";
    // b2: truy van
    $sql = "INSERT INTO baihat (ten_bh, anh_bh, ngaythem, quocgia, link_bh, id_theloai,id_abum, id_nghesi)
     VALUES ('$ten_bh', '$anh_bh', '$ngaythem', '$quocgia', '$link_bh', '$id_theloai', '$id_abum', '$id_nghesi')";
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
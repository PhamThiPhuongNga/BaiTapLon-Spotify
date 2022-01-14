<?php 
// Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginadmin'])){
        header("location: ../login/login-admin.php");
    }
?>
<?php
mysqli_close($conn);
require_once "../../../connect_db.php";
$ma_bh = $_POST['ma_bh'];
$ten_bh = $_POST['ten_bh'];
$anh_bh = $_POST['anh_bh'];
$ngaythem = $_POST['ngaythem'];
$quocgia = $_POST['quocgia'];
$link_bh = $_POST['link_bh'];
$id_theloai = $_POST['id_theloai'];
$id_abum = $_POST['id_abum'];
$id_nghesi = $_POST['id_nghesi'];

$statusMsg = '';
$targetDir = "../../../public/img/baihat/";
$fileName = basename($_FILES["myfile"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(isset($_POST["sbmAdd"]) && !empty($_FILES["myfile"]["name"])){
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFilePath)){
            // b2: truy van
            $sql = "UPDATE baihat SET  ten_bh= '$ten_bh', anh_bh = '".$fileName."', ngaythem = '$ngaythem' ,
            quocgia= '$quocgia', link_bh = '".$fileName."', id_category = '$id_theloai',
            ma_ab = '$id_abum', id_nghesi = '$id_nghesi'      
            WHERE ma_bh =  '$ma_bh'";
            // echo $sql;
            $ketqua = mysqli_query($conn, $sql);

            // echo $ketqua;
            if(!$ketqua){
                echo "lỗi, ko add đc gofy!";
            }else{
                header("location: index.php");
            }
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
echo $statusMsg;
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
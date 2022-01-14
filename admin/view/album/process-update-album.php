<?php 
// Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginadmin'])){
        header("location: ../login/login-admin.php");
    }
?>
<?php
require_once "../../../connect_db.php";
if(isset($_POST['ten'])){
    $ten = $_POST['ten'];
}
$ma_ab = $_POST['ma'];
$id_nghesi = $_POST['id_nghesi'];
$statusMsg = '';
$targetDir = "../../../public/img/album/";
$fileName = basename($_FILES["myfile"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(isset($_POST["sbmEdit"]) && !empty($_FILES["myfile"]["name"])){
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFilePath)){
            // b2: truy van
            $sql = "UPDATE album SET  ten_ab= '$ten', anh_ab = '".$fileName."', id_nghesi = '$id_nghesi'  where ma_ab =  '$ma_ab'";
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

?>
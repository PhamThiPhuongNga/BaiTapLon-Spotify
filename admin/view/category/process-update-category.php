<?php 
// Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginadmin'])){
        header("location: ../login/login-admin.php");
    }
?>
<?php
     require_once "../../../connect_db.php";
     $id=$_POST['id_category'];
     if(isset($_POST['ten'])){
         $ten = $_POST['ten'];
     }
     $maunen = $_POST['maunen'];
     $statusMsg = '';
     $targetDir = "../../../public/img/theloai/";
     $fileName = basename($_FILES["myfile"]["name"]);//$_FILES 1 biến siêu toàn cục lưu trữ
     $targetFilePath = $targetDir . $fileName;//giá trị cần truyền vào hàm movie_uploaded_file(tên đầy đủ + đường dẫn tập tin)
     $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);//định dạng tập tin
     //b2 Kiểm tra ng dùng đã nhấn submit hay nhập file chưu
     if(isset($_POST["sbmEdit"]) && !empty($_FILES["myfile"]["name"])){
         $allowTypes = array('jpg','png','jpeg','gif','pdf');// Khai báo biến mảng để lưu trữ định dạng cho phép upload lên
         if(in_array($fileType, $allowTypes)){//phương thức in_array kiểm tra 1 giá trị có thuộc mảng k
             if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFilePath)){ // Upload file từ nơi tạm đến nới chính
                 // b2: truy van
                 $sql = "UPDATE categories SET  ten = '$ten', anh= '".$fileName."', maunen='$maunen' WHERE id_category = '$id'";
                 $ketqua = mysqli_query($conn, $sql);
                 if(!$ketqua){
                     echo "lỗi update, ko update đc gofy!";
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
    mysqli_close($conn);
?>
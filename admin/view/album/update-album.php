<?php 
// Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginadmin'])){
        header("location: ../login/login-admin.php");
    }
?>
<?php

    $id = $_GET['id'];
    // echo $id;

    // b1: connect db
    require_once "../../../connect_db.php";

    // b2: truy van
    $sql = "SELECT * FROM album WHERE ma_ab = '$id'";

    $result = mysqli_query($conn, $sql);
    // b3: xu ly ket qua 
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $idnghesi = $row['id_nghesi'];
        // echo $idnghesi;
    }

    // b4: dong ket noi
    mysqli_close($conn);

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Album</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
</head>
<body>
    <div class="wrapper"> -->

<?php
include "../../../public/template/admin/header.php";
?>
        <div class="container">
            <div class="row">
                <div class=" mt-5 col-md-12">
                <div class="clearfix">
                        <h2 class="pull-left">Sửa Album</h2> <br> <br>
                        <p>Điền đầy đủ thông tin và submit để sửa bản ghi vào database</p>
                </div>
                <form action="process-update-album.php" method="post">
                    <div class="form-group">
                        <label for="">ID</label>
                        <input type="text" readonly class="form-control" name="ma_ab" value="<?php echo $row['ma_ab']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tên Album</label>
                        <input type="text" class="form-control" name="ten_ab"  value="<?php echo $row['ten_ab']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Link ảnh </label>
                        <input type="text" class="form-control" name="anh_ab" id="anh_ab" onchange="updateImg()"  value="<?php echo $row['anh_ab']; ?>"> <br>
                        <img src="<?php echo $row['anh_ab']; ?>" style="max-width:50px;" id="img_anh_ab" alt="">
                    </div>

                    <br>
                    <div class="form-group">
                        <label for="">Nghệ sĩ</label>
                        <select class="form-control"  name="id_nghesi">
                            <!-- Truy vấn dữ liệu để Hiển thị lựa chọn Đơn vị -->
                            <?php 
                                // Bước 01: Kết nối Database Server
                                
                                $conn = mysqli_connect('localhost','root','','spotify');
                                if(!$conn){
                                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                                }
                                // Bước 02: Thực hiện truy vấn
                                $sql = "SELECT * FROM nghesi";

                                $result = mysqli_query($conn,$sql);

                                // Bước 03: Xử lý kết quả truy vấn
                                if(mysqli_num_rows($result)){
                                    while($row = mysqli_fetch_assoc($result)){
                                        if($row['id_nghesi'] == $idnghesi){
                                            echo '<option selected value="'.$row['id_nghesi'].'">'.$row['ten_nghesi'].'</option>';
                                        }else{
                                            echo '<option value="'.$row['id_nghesi'].'">'.$row['ten_nghesi'].'</option>';
                                        }

                                    }
                                }

                                // Bước 03: Đóng kết nối
                                mysqli_close($conn);
                            ?>
                    
                        </select>
                    </div>
                    <br> 

                    <input type="submit" class="btn btn-primary" value="Sửa">
                    <a href="index.php" class="btn btn-secondary">Thoát</a>
                </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function updateImg(){
            $('#img_anh_ab').attr('src', $('#anh_ab').val())
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
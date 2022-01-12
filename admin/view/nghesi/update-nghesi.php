<?php 
// Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: ../login/login-admin.php");
    }
?>
<?php

    $id = $_GET['id'];
    // echo $id;

    // b1: connect db
    require_once "../../../connect_db.php";

    // b2: truy van
    $sql = "SELECT * FROM nghesi WHERE id_nghesi  = '$id'";

    $result = mysqli_query($conn, $sql);
    // b3: xu ly ket qua 
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
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
    <title>Update Nghệ sĩ</title>
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
                        <h2 class="pull-left">Sửa Nghệ sĩ</h2> <br> <br>
                        <p>Điền đầy đủ thông tin và submit để sửa bản ghi vào database</p>
                </div>
                <form action="process-update-nghesi.php" method="post">
                    <div class="form-group">
                        <label for="">ID</label>
                        <input type="text" readonly class="form-control" name="id_nghesi" value="<?php echo $row['id_nghesi']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tên</label>
                        <input type="text" class="form-control" name="ten_nghesi"  value="<?php echo $row['ten_nghesi']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh </label>
                        <input type="text" class="form-control" name="anh_nghesi" id="anh_ab" onchange="updateImg()"  value="<?php echo $row['anh_nghesi']; ?>"> <br>
                        <img src="<?php echo $row['anh_nghesi']; ?>" style="max-width:50px;" id="img_anh_ab" alt="">
                    </div> <br>
                    
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
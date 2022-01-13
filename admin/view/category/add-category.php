<?php 
// Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginadmin'])){
        header("location: ../login/login-admin.php");
    }
?>
<?php

require_once "../../../connect_db.php";


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add category</title>
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
                        <h2 class="pull-left">Thêm Category</h2> <br> <br>
                        <p>Điền đầy đủ thông tin và submit để thêm bản ghi vào database</p>
                </div>
                <form action="process-add-category.php" method="post">
                    <div class="form-group">
                        <label for="">Tên category</label>
                        <input type="text" class="form-control" name="ten"  placeholder="Điền đầy đủ Tên category.">
                    </div>
                    <div class="form-group">
                        <label for="">Link ảnh</label>
                        <input type="text" class="form-control" name="anh" placeholder="Điền đầy đủ Link ảnh."/>
                    </div>
                    <div class="form-group">
                        <label for="">Màu nền điền theo form sau vd : rgb(39, 133, 106)</label>
                        <input type="text" class="form-control" name="maunen" placeholder="Điền đầy đủ Màu nền" >
                    </div> <br> 
                    <input type="submit" class="btn btn-primary" value="Thêm">
                    <a href="index.php" class="btn btn-secondary">Thoát</a>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
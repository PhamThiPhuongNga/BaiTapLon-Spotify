<?php

require_once "../../connect_db.php";


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm nghệ sĩ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>
    <div class="wrapper"> -->

<?php
include "../template/header.php"
?>
        <div class="container">
            <div class="row">
                <div class=" mt-5 col-md-12">
                <div class="clearfix">
                        <h2 class="pull-left">Thêm nghệ sĩ</h2> <br> <br>
                        <p>Điền đầy đủ thông tin và submit để thêm bản ghi vào database</p>
                </div>
                <form action="process-add-nghesi.php" method="post">
                    <div class="form-group">
                        <label for="">Tên nghệ sĩ</label>
                        <input type="text" class="form-control" name="ten_nghesi"  placeholder="Điền đầy đủ Tên nghệ sĩ.">
                    </div>
                    <div class="form-group">
                        <label for="">Link ảnh</label>
                        <input type="text" class="form-control" name="anh_nghesi" placeholder="Điền đầy đủ Link ảnh."/>
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
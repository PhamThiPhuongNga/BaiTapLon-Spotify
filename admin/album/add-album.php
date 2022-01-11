<?php

require_once "../../connect_db.php";


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Album</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>
    <div class="wrapper">
         -->

<?php
include "../template/header.php"
?>
    <div class="container">
            <div class="row">
                <div class=" mt-5 col-md-12">
                <div class="clearfix">
                        <h2 class="pull-left">Thêm Album</h2> <br> <br>
                        <p>Điền đầy đủ thông tin và submit để thêm bản ghi vào database</p>
                </div>
                <form action="process-add-album.php" method="post">
                    <div class="form-group">
                        <label for="">Tên Album</label>
                        <input type="text" class="form-control" name="ten_ab"  placeholder="Điền đầy đủ Tên Album.">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh</label>
                        <input type="text" class="form-control" name="anh_ab"   placeholder="Điền đầy đủ Link ảnh.">
                    </div>
                    <div class="form-group">
                        <label for="">Nghệ sĩ</label>
                        <select class="form-control"  name="id_nghesi">
                            <!-- Truy vấn dữ liệu để Hiển thị lựa chọn Đơn vị -->
                            <?php 
                                // Bước 01: Kết nối Database Server
                                // $conn = mysqli_connect('localhost','root','','spotify');
                                // if(!$conn){
                                //     die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                                // }
                                // Bước 02: Thực hiện truy vấn
                                $sql = "SELECT * FROM nghesi";

                                $result = mysqli_query($conn,$sql);

                                // Bước 03: Xử lý kết quả truy vấn
                                if(mysqli_num_rows($result)){
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>
                                       <option value="<?php echo $row['id_nghesi']; ?>"><?php echo $row['ten_nghesi']; ?></option>
                            <?php
                                    }
                                }

                                // Bước 03: Đóng kết nối
                                mysqli_close($conn);
                            ?>
               
                        </select>
                    </div>
                    <br>
                    
                    <input type="submit" class="btn btn-primary" value="Thêm">
                    <a href="index.php" class="btn btn-secondary">Thoát</a>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
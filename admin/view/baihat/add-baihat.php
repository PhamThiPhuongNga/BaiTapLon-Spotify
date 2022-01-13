<?php 
// Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginadmin'])){
        header("location: ../login/login-admin.php");
    }
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
                        <h2 class="pull-left">Thêm Bài hát</h2> <br> <br>
                        <p>Điền đầy đủ thông tin và submit để thêm bản ghi vào database</p>
                </div>
                <form action="process-add-baihat.php" method="post">
                <div class="form-group">
                        <label for="">Tên bài hát</label>
                        <input type="text" class="form-control" name="ten_bh"  placeholder="Điền đầy đủ Tên bài hát.">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh</label>
                        <input type="text" class="form-control" name="anh_bh"   placeholder="Điền đầy đủ Link ảnh.">
                    </div>
                    <div class="form-group">
                        <label for="">Ngày thêm</label>
                        <input type="date" class="form-control" name="ngaythem"   >
                    </div>
                    <div class="form-group">
                        <label for="">Quốc gia</label>
                        <input type="text" class="form-control" name="quocgia"   placeholder="Điền đầy đủ Quốc gia.">
                    </div>
                    <div class="form-group">    
                        <label for="">Link bài hát</label>
                        <input type="text" class="form-control" name="link_bh"   placeholder="Điền đầy đủ Link bài hát.">
                    </div>
                    <div class="form-group">
                        <label for="">Tên Thể loại</label>
                        <select class="form-control"  name="id_theloai">
                            <!-- Truy vấn dữ liệu để Hiển thị lựa chọn Đơn vị -->
                            <?php 
                                // Bước 01: Kết nối Database Server
                                $conn = mysqli_connect('localhost','root','','spotify');
                                if(!$conn){
                                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                                }
                                // Bước 02: Thực hiện truy vấn
                                $sql = "SELECT * FROM categories";

                                $result = mysqli_query($conn,$sql);

                                // Bước 03: Xử lý kết quả truy vấn
                                if(mysqli_num_rows($result)){
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>
                                       <option value="<?php echo $row['id_category']; ?>"><?php echo $row['ten']; ?></option>
                            <?php
                                    }
                                }

                                // Bước 03: Đóng kết nối
                                mysqli_close($conn);
                            ?>
               
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tên Album</label>
                        <select class="form-control"  name="id_abum">
                            <!-- Truy vấn dữ liệu để Hiển thị lựa chọn Đơn vị -->
                            <?php 
                                // Bước 01: Kết nối Database Server
                                $conn = mysqli_connect('localhost','root','','spotify');
                                if(!$conn){
                                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                                }
                                // Bước 02: Thực hiện truy vấn
                                $sql = "SELECT * FROM album";

                                $result = mysqli_query($conn,$sql);

                                // Bước 03: Xử lý kết quả truy vấn
                                if(mysqli_num_rows($result)){
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>
                                       <option value="<?php echo $row['ma_ab']; ?>"><?php echo $row['ten_ab']; ?></option>
                            <?php
                                    }
                                }

                                // Bước 03: Đóng kết nối
                                mysqli_close($conn);
                            ?>
               
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tên nghệ sĩ</label>
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
                            ?>
                                       <option value="<?php echo $row['id_nghesi']; ?>"><?php echo $row['ten_nghesi']; ?></option>
                            <?php
                                    }
                                }

                                // Bước 03: Đóng kết nối
                                mysqli_close($conn);
                            ?>
               
                        </select>
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
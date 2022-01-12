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
    $sql = "SELECT * FROM baihat WHERE ma_bh = '$id'";

    $result = mysqli_query($conn, $sql);
    // b3: xu ly ket qua 
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $id_theloai = $row['id_theloai'];
        $id_abum = $row['id_abum'];
        $id_nghesi = $row['id_nghesi'];
        // echo $id_theloai;
        // echo $id_abum;
        // echo $id_nghesi;
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
                        <h2 class="pull-left">Sửa bài hát</h2> <br> <br>
                        <p>Điền đầy đủ thông tin và submit để sửa bản ghi vào database</p>
                </div>
                <form action="process-update-baihat.php" method="post">
                    <div class="form-group">
                        <label for="">ID</label>
                        <input type="text" readonly class="form-control" name="ma_bh" value="<?php echo $row['ma_bh']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tên bài hát</label>
                        <input type="text" class="form-control" name="ten_bh"  value="<?php echo $row['ten_bh']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh</label>
                        <input type="text" class="form-control" name="anh_bh" id="anh_ab" onchange="updateImg()"  value="<?php echo $row['anh_bh']; ?>"> <br>
                        <img src="<?php echo $row['anh_bh']; ?>" style="max-width:50px;" id="img_anh_ab" alt="">
                    </div> <br>
                    <div class="form-group">
                        <label for="">Ngày thêm</label>
                        <input type="date" class="form-control" name="ngaythem"  value="<?php echo $row['ngaythem']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Quốc gia</label>
                        <input type="text" class="form-control" name="quocgia"  value="<?php echo $row['quocgia']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Link bài hát</label>
                        <input type="text" class="form-control" name="link_bh"  value="<?php echo $row['link_bh']; ?>">
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
                                        if($row['id_category'] == $id_theloai){
                                            echo '<option selected value="'.$row['id_category'].'">'.$row['ten'].'</option>';
                                        }else{
                                            echo '<option value="'.$row['id_category'].'">'.$row['ten'].'</option>';
                                        }

                                    }
                                }

                                // Bước 03: Đóng kết nối
                                mysqli_close($conn);
                            ?>
                    
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Tên album</label>
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
                                        if($row['ma_ab'] == $id_abum){
                                            echo '<option selected value="'.$row['ma_ab'].'">'.$row['ten_ab'].'</option>';
                                        }else{
                                            echo '<option value="'.$row['ma_ab'].'">'.$row['ten_ab'].'</option>';
                                        }

                                    }
                                }

                                // Bước 03: Đóng kết nối
                                mysqli_close($conn);
                            ?>
                    
                        </select>
                    </div>

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
                                        if($row['id_nghesi'] == $id_nghesi){
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
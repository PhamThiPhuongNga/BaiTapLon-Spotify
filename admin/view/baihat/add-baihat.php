<?php 
// Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginadmin'])){
        header("location: ../login/login-admin.php");
    }
?>
<?php
include "../../../public/template/admin/header.php";
?>
<div class=""style="background-color:white;">
    <div class="containerrr">
    <div class="kcvien" >
        <div class="round shadow">
            <div class="containerrr">
                <h5 class="text-center h3 pt-3 ">Thêm mới bài hát</h5>
                <?php 
                    if(isset($_GET['error'])){
                        echo
                        "<div class='bXxIjv '>
                            <div class='hUAscM  tbao' style='background-color: red;color:white;border:0;'>
                                <label  class='hyIrKV'><i class='material-icon text-dark bi bi-x'></i> &nbsp;&nbsp; {$_GET['error']}</label>
                            </div>
                        </div>";}?>
                <form action="process-add-baihat.php" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="">Tên bài hát</label>
                        <input type="text" class="form-control" name="ten_bh"  placeholder="Điền đầy đủ Tên bài hát.">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Ảnh</label>
                        <input type="text" class="form-control" name="anh_bh"   placeholder="Điền đầy đủ Link ảnh.">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Ngày thêm</label>
                        <input type="date" class="form-control" name="ngaythem"   >
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Quốc gia</label>
                        <input type="text" class="form-control" name="quocgia"   placeholder="Điền đầy đủ Quốc gia.">
                    </div>
                    <div class="form-group mb-3">    
                        <label for="">Link bài hát</label>
                        <input type="file" class="form-control" name="myfile" >
                    </div>
                    <div class="form-group mb-3">
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
                                       <option value="<?php echo $row['id_category']; ?>"><?php echo $row['id_category']; ?> - <?php echo $row['ten']; ?></option>
                            <?php
                                    }
                                }

                                // Bước 03: Đóng kết nối
                                mysqli_close($conn);
                            ?>
               
                        </select>
                    </div>
                    <div class="form-group mb-3">
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
                                       <option value="<?php echo $row['ma_ab']; ?>"><?php echo $row['ma_ab']; ?> - <?php echo $row['ten_ab']; ?></option>
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
                                       <option value="<?php echo $row['id_nghesi']; ?>"><?php echo $row['id_nghesi']; ?> - <?php echo $row['ten_nghesi']; ?></option>
                            <?php
                                    }
                                }

                                // Bước 03: Đóng kết nối
                                mysqli_close($conn);
                            ?>
               
                        </select>
                    </div> <br> 
                    <div class="pb-3">
                        <input type="submit" name="sbmAdd" class="btn btn-primary" value="Thêm">
                        <a href="index.php" class="btn btn-secondary">Thoát</a> 
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
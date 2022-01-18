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
<?php
include "../../../public/template/admin/header.php";
?>
<div class=""style="background-color:white;">
    <div class="containerrr">
    <div class="kcvien" >
        <div class="round shadow">
            <div class="containerrr">
                <h5 class="text-center h3 pt-3 ">Thêm mới album</h5>
                <?php 
                    if(isset($_GET['error'])){
                        echo
                        "<div class='bXxIjv '>
                            <div class='hUAscM  tbao' style='background-color: red;color:white;border:0;'>
                                <label  class='hyIrKV'><i class='material-icon text-dark bi bi-x'></i> &nbsp;&nbsp; {$_GET['error']}</label>
                            </div>
                        </div>";}?>
                <form action="process-add-album.php" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="">Tên Album</label>
                        <input type="text" class="form-control" name="ten_ab"  placeholder="Điền đầy đủ Tên Album.">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Ảnh</label>
                        <input type="file" class="form-control" name="myfile" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Nghệ sĩ</label>
                        <select class="form-control"  name="id_nghesi">
                            <!-- Truy vấn dữ liệu để Hiển thị lựa chọn Đơn vị -->
                            <?php 
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
                                mysqli_close($conn);
                            ?>
               
                        </select>
                    </div>
                    <br>
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
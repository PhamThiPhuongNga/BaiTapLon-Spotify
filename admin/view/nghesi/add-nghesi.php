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
                    <h5 class="text-center h3 pt-3 ">Thêm mới Nghệ sĩ</h5>
                    <?php 
                        if(isset($_GET['error'])){
                            echo
                            "<div class='bXxIjv '>
                                <div class='hUAscM  tbao' style='background-color: red;color:white;border:0;'>
                                    <label  class='hyIrKV'><i class='material-icon text-dark bi bi-x'></i> &nbsp;&nbsp; {$_GET['error']}</label>
                                </div>
                            </div>";}?>
                    <form action="process-add-nghesi.php" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="">Tên nghệ sĩ</label>
                            <input type="text" class="hUAscM" name="ten_nghesi"  placeholder="Điền đầy đủ Tên nghệ sĩ.">
                        </div>
                        <!-- <div class="form-group mb-3">
                            <label for="">Link ảnh</label>
                            <input type="text" class="hUAscM" name="anh_nghesi" placeholder="Điền đầy đủ Link ảnh."/>
                        </div> -->
                        <div class="form-group mb-3">
                            <label for="">Ảnh</label>
                            <input type="file" class="hUAscM" name="myfile" value="Upload"/>
                        </div>
                         <br>
                        <div class="pb-3">
                            <input type="submit" name="sbmAdd"class="btn btn-primary" value="Thêm">
                            <a href="index.php" class="btn btn-secondary">Thoát</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <?php
include "../../../public/template/admin/footer.php";
?> -->
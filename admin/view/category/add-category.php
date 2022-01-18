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
                <h5 class="text-center h3 pt-3 ">Thêm mới Thể loại</h5>
                <?php 
                    if(isset($_GET['error'])){
                        echo
                        "<div class='bXxIjv '>
                            <div class='hUAscM  tbao' style='background-color: red;color:white;border:0;'>
                                <label  class='hyIrKV'><i class='material-icon text-dark bi bi-x'></i> &nbsp;&nbsp; {$_GET['error']}</label>
                            </div>
                        </div>";}?>
                <form action="process-add-category.php" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="">Tên thể loại</label>
                        <input type="text" class="form-control" name="tentl"  placeholder="Điền đầy đủ tên thể loại.">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Ảnh thể loại</label>
                        <input type="file" class="form-control" name="myfile"value="Upload"/>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Màu nền điền theo form sau vd : rgb(39, 133, 106)</label>
                        <input type="text" class="form-control" name="maunen" placeholder="Điền đầy đủ Màu nền" >
                    </div>
                    <!-- <div class="form-group mb-3">
                        <label for="">Tên nghệ sĩ</label>
                       
                        <select class="form-control" id="cbotenns" name="cbotenns">
                        <?php 
                        include('../../../connect_db.php');
                        $ssl="SELECT * FROM `nghesi`";
                        $pro= mysqli_query($conn,$ssl);
                        if(mysqli_num_rows($pro)){
                            while($row = mysqli_fetch_array($pro)){
                        ?>
                            <option value="<?php echo $row['id_nghesi'] ?>"><?php echo $row['id_nghesi'] ?> - <?php echo $row['ten_nghesi'] ?></option>
                        <?php }}?>
                        </select>
                    </div>  -->
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

<head>
    <title>Chỉnh sửa hồ sơ - Spotify</title>
</head>
<?php include('../../../public/template/site/header-account.php');?>
<style>
.bl-2{
    border-left: 6px solid var(--green-color);
}</style>
<?php 
    if(isset($_SESSION['isLoginOK'])){
        include('../../../connect_db.php');
        $sql = "SELECT * FROM nguoidung where ten_nguoidung = '".$_SESSION['isLoginOK']."'";
        $resultt = mysqli_query($conn,$sql);
        // Bước 03: Xử lý kết quả truy vấn
        if(mysqli_num_rows($resultt) > 0){
            while($row = mysqli_fetch_assoc($resultt)){
?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <div class="main-acc-right p-5"style="width:75%;background-color: white;">
                <h1 class="font-weight-bold ng-binding ff-title">Chỉnh sửa hồ sơ</h1>
                <?php 
                    if(isset($_GET['suscces'])){
                    echo
                    "<div class='bXxIjv'>
                        <div class='hUAscM color-suscess' style='background-color: var(--green-color);border:0;'>
                            <label for='password' class='hyIrKV'><i class='material-icon text-dark bi bi-check2-circle'></i> &nbsp;&nbsp; {$_GET['suscces']}</label>
                        </div>
                    </div>";
                }
                ?>
                <form action="../../../site/model/process-edit-profile.php" method="post">
                    <div class="form-group mb-3">
                        <label class="biNheR" for="txtHoTen">Họ và tên</label>
                        <input type="text" value="<?php echo $row['ten_nguoidung'];?>" class="hUAscM" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label  class="biNheR" for="txtEmail">Email</label>
                        <input type="text" value="<?php echo $row['email'];?>" class="hUAscM" id="txtEmail" name="txtEmail" placeholder="abc@gmail.com">
                    </div>

                    <!-- <div class="form-group mb-3">
                        <label  class="biNheR" for="txtMatkhau">Mật khẩu</label>
                        <input type="tel" class="hUAscM" id="txtMatkhau" name="txtMatkhau" placeholder="Nhập mật khẩu">
                    </div> -->
                    <div class="form-group mb-3 row">
                        <div class="col-md-4">
                            <label  class="biNheR" for="txtNgay">Ngày</label>
                            <input type="number" value="<?php echo $row['ngay'];?>" class="hUAscM" min='1' max='30' id="txtNgay" name="txtNgay" placeholder="">
                        </div>
                        <div class="col-md-4">
                            <label  class="biNheR" for="txtThang">Tháng</label>
                            <select class="hUAscM" name="month" aria-label="Default select example">
                                <option value="<?php echo $row['thang'];?>"selected>Tháng <?php echo $row['thang'];?></option>
                                <option value="01">Tháng 1</option>
                                <option value="02">Tháng 2</option>
                                <option value="03">Tháng 3</option>
                                <option value="04">Tháng 4</option>
                                <option value="05">Tháng 5</option>
                                <option value="06">Tháng 6</option>
                                <option value="07">Tháng 7</option>
                                <option value="08">Tháng 8</option>
                                <option value="09">Tháng 9</option>
                                <option value="10">Tháng 10</option>
                                <option value="11">Tháng 11</option>
                                <option value="12">Tháng 12</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label  class="biNheR" for="txtNam">Năm</label>
                            <input type="number" value="<?php echo $row['nam'];?>" class="hUAscM"  id="txtNam" name="txtNam" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="biNheR" for="txtGioitinh">Giới tính</label>
                            <select class="hUAscM" name="gender"aria-label="Default select example">
                                <option selected value="<?php echo $row['gioitinh'];?>"><?php echo $row['gioitinh'];?></option>
                                <option value="N/N">N/N</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label  class="biNheR" for="txtQuoctich">Quốc tịch</label>
                            <select class="hUAscM" name="country"aria-label="Default select example">
                                <option value="Việt Nam" selected>Việt Nam</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="d-grid  gap-2 d-md-flex justify-content-md-end p-3">
                        <button class="btn btn-success me-md-2" name="btnEditProfile" type="submit">Lưu hồ sơ</button>
                    </div>
                </form>
                <?php } } } ?> 
            </div>
        </div>
    </main>

<?php include('../../../public/template/site/footer.php');?>
</body>
</html>
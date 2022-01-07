
<?php include('../../../public/template/site/header-account.php');?>
<style>
.bl-2{
    border-left: 6px solid var(--green-color);
}</style>
<?php 
    if(isset($_SESSION['ten_nguoidung']) && isset($_SESSION['isLoginOK'])){
        include('../../../connect_db.php');
        $sql = "SELECT * FROM nguoidung";
        $result = mysqli_query($conn,$sql);
        // Bước 03: Xử lý kết quả truy vấn
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <div class="main-acc-right p-5"style="width:75%;background-color: white;">
                <h1 class="font-weight-bold ng-binding ff-title">Chỉnh sửa hồ sơ</h1>
                <form action="../../controller/" method="post">
                    <div class="form-group mb-3">
                        <label class="biNheR" for="txtHoTen">Họ và tên</label>
                        <input type="text" value="<?php echo $row['ten_nguoidung'];?>" class="hUAscM" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên">
                        <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
                    </div>
                    
                    <div class="form-group mb-3">
                        <label  class="biNheR" for="txtEmail">Email</label>
                        <input type="text" class="hUAscM" id="txtEmail" name="txtEmail" placeholder="abc@gmail.com">
                        <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
                    </div>

                    <div class="form-group mb-3">
                        <label  class="biNheR" for="txtMatkhau">Mật khẩu</label>
                        <input type="tel" class="hUAscM" id="txtMatkhau" name="txtMatkhau" placeholder="Nhập mật khẩu">
                        <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
                    </div>
                    <div class="form-group mb-3 row">
                        <div class="col-md-4">
                            <label  class="biNheR" for="txtNgay">Ngày</label>
                            <input type="number" class="hUAscM" min='1' max='30' id="txtNgay" name="txtNgay" placeholder="">
                        </div>
                        <div class="col-md-4">
                            <label  class="biNheR" for="txtThang">Tháng</label>
                            <select class="hUAscM" aria-label="Default select example">
                                <option selected>Tháng</option>
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
                            <input type="text" class="hUAscM"  id="txtNam" name="txtNam" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="biNheR" for="txtGioitinh">Giới tính</label>
                            <select class="hUAscM" name="gender"aria-label="Default select example">
                                <option value="N/N" selected>N/N</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label  class="biNheR" for="txtQuoctich">Quốc tịch</label>
                            <input type="text" class="hUAscM"  id="txtQuoctich" name="txtQuoctich" placeholder="">
                        </div>
                        
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end p-3">
                        <a href="editUser.php" class="h"><button class="btn btn-success me-md-2" type="submit">Sửa</button></a>
                        <a href="deleteUser.php" class="h"><button class="btn btn-success" type="submit">Xóa</button></a>
                    </div>
                </form>
                <?php } } } ?> 
            </div>
        </div>
    </main>

<?php include('../../../public/template/site/footer.php');?>
</body>
</html>
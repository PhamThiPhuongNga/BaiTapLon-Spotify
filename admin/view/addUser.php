<?php require_once('../../public/template/admin/header.php');?>  
<div class="kcvien">
    <h5 class="text-center text-gray-800 h3 pt-3 text-gr">Thêm mới Tài khoản người dùng</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
    <form action="process-add-employee.php" method="post">
        <div class="form-group">
            <label for="txtHoTen">Họ và tên</label>
            <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên">
            <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
        </div>
        
        <div class="form-group">
            <label for="txtChucVu">Chức vụ</label>
            <input type="text" class="form-control" id="txtChucVu" name="txtChucVu" placeholder="Nhập chức vụ">
            <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
        </div>

        <div class="form-group">
            <label for="txtSoMayBan">Số máy bàn</label>
            <input type="tel" class="form-control" id="txtSoMayBan" name="txtSoMayBan" placeholder="Nhập số máy bàn">
            <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
        </div>
        <div class="form-group">
            <label for="txtSoDiDong">Số di động</label>
            <input type="tel" class="form-control" id="txtSoDiDong" name="txtSoDiDong" placeholder="Số di động">
            
        </div>
        <div class="form-group">
            <label for="txtEmail">Email</label>
            <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Nhập email">
            
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Đơn vị</label>
            <select class="form-control" id="cboDonVi" name="cboDonVi">
                <!-- Truy vấn dữ liệu để Hiển thị lựa chọn Đơn vị -->
                <?php 
                    $conn=mysqli_connect('localhost','root','','dhtl_danhba');
                    if(!$conn)
                    {
                        die('Kết nối thất bại');
                    }
                    $sql="select * from db_donvi";
                    $truyvan=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($truyvan)){
                        while($row =mysqli_fetch_assoc($truyvan)){?>
                            <option value="<?php echo $row['ma_donvi']; ?>"><?php echo $row['ma_donvi']; ?> - <?php echo $row['ten_donvi']; ?></option>
                    <?php    }
                    }
                        // Bước 03: Đóng kết nối
                        mysqli_close($conn);
                        ?>
                    <!-- // Bước 01: Kết nối Database Server
                    $conn = mysqli_connect('localhost','root','','dhtl_danhba');
                    if(!$conn){
                        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                    }
                    // Bước 02: Thực hiện truy vấn
                    $sql = "SELECT * FROM db_donvi";

                    $result = mysqli_query($conn,$sql);

                    // Bước 03: Xử lý kết quả truy vấn
                    if(mysqli_num_rows($result)){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                            <option value="<?php echo $row['ma_donvi']; ?>"><?php echo $row['ma_donvi']; ?> - <?php echo $row['ten_donvi']; ?></option>
                <?php
                        
                    

                    // Bước 03: Đóng kết nối
                    // mysqli_close($conn);
                ?> -->
            
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
    </form>  
</div>          
     
<?php require_once('../../public/template/admin/footer.php');?>   
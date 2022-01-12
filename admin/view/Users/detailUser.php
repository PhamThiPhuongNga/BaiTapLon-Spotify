<?php 
// Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: ../login/login-admin.php");
    }
?>
<?php require_once('../../../public/template/admin/header.php');?>  

<?php
    
    $ma = $_GET['id'];
    // Bước 01: Kết nối Database Server
    include('../../../connect_db.php');
    $sql = "SELECT * FROM nguoidung where ma_nguoidung = '$ma'";
    $resultt = mysqli_query($conn,$sql);
    // Bước 03: Xử lý kết quả truy vấn
    if(mysqli_num_rows($resultt) > 0){
        while($row = mysqli_fetch_assoc($resultt)){
?>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column text-muted">
            <div id="content">
                <div class="containerrr">
                    <div class="kcvien" >
                        <div class="round shadow">
                            <div class="containerrr">
                                <h5 class="text-center h3 pt-3 ">Chi tiết Tài khoản người dùng</h5>
                                <form action="process-add-employee.php" method="post">
                                    <div class="form-group mb-3">
                                        <label class="" for="txtID">Họ và tên</label>
                                        <input type="text" class="hUAscM" readonly id="txtID" value="<?php echo $row['ma_nguoidung'];?>" name="txtID">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="" for="txtHoTen">Họ và tên</label>
                                        <input type="text" class="hUAscM" readonly id="txtHoTen" value="<?php echo $row['ten_nguoidung'];?>" name="txtHoTen" placeholder="Nhập họ tên">
                                    </div>
                                    
                                    <div class="form-group mb-3">
                                        <label for="txtEmail">Email</label>
                                        <input type="text" class="hUAscM" readonly id="txtEmail"value="<?php echo $row['email'];?>" name="txtEmail" placeholder="abc@gmail.com">
                                    </div>
                                    <!-- 
                                    <div class="form-group mb-3">
                                        <label for="txtMatkhau">Mật khẩu</label>
                                        <input type="tel" class="hUAscM" id="txtMatkhau" name="txtMatkhau" placeholder="Nhập mật khẩu">
                                    </div> -->
                                    <div class="form-group mb-3 row">
                                        <div class="col-md-4">
                                            <label for="txtNgay">Ngày</label>
                                            <input type="number" class="hUAscM" readonly min='1'value="<?php echo $row['ngay'];?>" max='30' id="txtNgay" name="txtNgay" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="txtThang">Tháng</label>
                                
                                            <input type="number" class="hUAscM" readonly min='1'value="<?php echo  $row['thang'];?>" max='12' id="txtThang" name="txtThang" placeholder="">
                                                
                                        </div>
                                        <div class="col-md-4">
                                            <label for="txtNam">Năm</label>
                                            <input type="text" class="hUAscM" readonly value="<?php echo $row['nam'];?>"  id="txtNam" name="txtNam" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="txtGioitinh">Giới tính</label>
                                            <input type="text" class="hUAscM" readonly value="<?php echo $row['gioitinh'];?>"  id="txtGioitinh" name="txtGioitinh" placeholder="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txtQuoctich">Quốc tịch</label>
                                            <input type="text" class="hUAscM" readonly value="<?php echo $row['quoctich'];?> " id="txtQuoctich" name="txtQuoctich" placeholder="">
                                        </div>
                                        
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end p-3">
                                        <a href="../../model/UsersModel/deleteUser-model.php?id=<?php
                                         echo $row['ma_nguoidung'];?>" class="h"><button class="btn btn-primary" type="button">Xóa</button></a>
                                        <a href="../../../admin/view/Users/table-User.php" class="h"><button class="btn btn-primary" type="button">Thoát</button></a>
                                    </div>
                                </form> 
                            </div> 
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
<?php  
        }}
mysqli_close($conn);     
?>
<?php require_once('../../../public/template/admin/footer.php');?>   
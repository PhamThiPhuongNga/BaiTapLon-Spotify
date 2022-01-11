<?php require_once('../../../public/template/admin/header.php');?>  
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column text-muted">
            <div id="content">
                <div class="containerrr">
                    <div class="kcvien" >
                        <div class="round shadow">
                            <div class="containerrr">
                                <h5 class="text-center h3 pt-3 ">Thêm mới Tài khoản người dùng</h5>
                                <?php 
                                    if(isset($_GET['error'])){
                                        echo
                                        "<div class='bXxIjv '>
                                            <div class='hUAscM  tbao' style='background-color: red;color:white;border:0;'>
                                                <label  class='hyIrKV'><i class='material-icon text-dark bi bi-x'></i> &nbsp;&nbsp; {$_GET['error']}</label>
                                            </div>
                                        </div>";}?>
                                <form action="../../../admin/controller/controllerUsers/addUser-controller.php" method="post">
                                    <div class="form-group mb-3">
                                        <label class="" for="txtHoTen">Họ và tên</label>
                                        <input type="text" class="hUAscM" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên">
                                        <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
                                    </div>
                                    
                                    <div class="form-group mb-3">
                                        <label for="txtEmail">Email</label>
                                        <input type="text" class="hUAscM" id="txtEmail" name="txtEmail" placeholder="abc@gmail.com">
                                        <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="txtMatkhau">Mật khẩu</label>
                                        <input type="tel" class="hUAscM" id="txtMatkhau" name="txtMatkhau" placeholder="Nhập mật khẩu">
                                        <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <div class="col-md-4">
                                            <label for="txtNgay">Ngày</label>
                                            <input type="number" class="hUAscM" min='1' max='30' id="txtNgay" name="txtNgay" placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="txtThang">Tháng</label>
                                            <select class="hUAscM" name="txtThang"aria-label="Default select example">
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
                                            <label for="txtNam">Năm</label>
                                            <input type="text" class="hUAscM"  id="txtNam" name="txtNam" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="txtGioitinh">Giới tính</label>
                                            <select class="hUAscM" name="txtGioitinh"aria-label="Default select example">
                                                <option value="N/N" selected>N/N</option>
                                                <option value="Nam">Nam</option>
                                                <option value="Nữ">Nữ</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txtQuoctich">Quốc tịch</label>
                                            <input type="text" class="hUAscM"  id="txtQuoctich" name="txtQuoctich" placeholder="">
                                        </div>
                                        
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end p-3">
                                        <a href="../../../admin/controller/controllerUsers/addUser-controller.php" class="h"><button class="btn btn-primary me-md-2" type="submit" name="btnl">Lưu</button></a>
                                    </div>
                                </form> 
                            </div> 
                        </div>  
                    </div> 
                </div>
            </div>
        </div>        
<?php require_once('../../../public/template/admin/footer.php');?>   
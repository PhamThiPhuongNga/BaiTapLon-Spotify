<head>
    <title>Đổi mật khẩu của bạn - Spotify</title>
</head>
<?php include('../../../public/template/site/header-account.php');?>
<style>
.bl-3{
    border-left: 6px solid var(--green-color);
}</style>
            <div class="main-acc-right p-5">
            <?php 
                    if(isset($_GET['suscces'])){
                    echo
                    "<div class='bXxIjv'>
                        <div class='hUAscM color-suscess' style='background-color: var(--green-color);border:0;'>
                            <label for='password' class='hyIrKV'><i class='material-icon text-dark bi bi-check2-circle'></i> &nbsp;&nbsp; {$_GET['suscces']}</label>
                        </div>
                    </div>";
                }
                if(isset($_GET['error'])){
                    echo
                    "<div class='bXxIjv'>
                        <div class='hUAscM color-error' style='background-color: red;border:0;'>
                            <label  class='hyIrKV'><i class='material-icon text-dark bi bi-x'></i> &nbsp;&nbsp; {$_GET['error']}</label>
                        </div>
                    </div>";
                }
                ?>
                <h1 class="font-weight-bold ng-binding ff-title">Đổi mật khẩu của bạn</h1>
                <?php 
                    if(isset($_SESSION['isLoginOK'])){
                        include('../../../connect_db.php');
                        $sql = "SELECT * FROM nguoidung where ten_nguoidung = '".$_SESSION['isLoginOK']."'";
                        $resultt = mysqli_query($conn,$sql);
                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($resultt) > 0){
                            while($row = mysqli_fetch_assoc($resultt)){
                            
                ?>
                <form action="../../../site/controller/controll-change-pass.php" method="post">
                    <div class="form-group mb-3 ">
                        <label class="biNheR"for="formGroupExampleInput">ID</label>
                        <input type="text" class="hUAscM "  value="<?php echo $row['ma_nguoidung'];  ?>" name="txtID" >
                    </div>
                    <div class="form-group mb-3">
                        <label class="biNheR"for="formGroupExampleInput">Mật khẩu hiện nay</label>
                        <input type="password" class="hUAscM "  value="<?php echo $row['matkhau'];  ?>"  name="pass_old" >
                    </div>
                    <div class="form-group mb-3">
                        <label class="biNheR" for="formGroupExampleInput">Mật khẩu mới</label>
                        <input type="password" class="hUAscM" name="pass_new" >
                    </div>
                    <div class="form-group mb-3">
                        <label class="biNheR" for="formGroupExampleInput">Lặp lại mật khẩu mới</label>
                        <input type="password" class="hUAscM" name="pass_repnew" >
                    </div>
                    <div class="d-grid  gap-2 d-md-flex justify-content-md-end">
                        <a href="overview.php"><button class="btn  mt-3 " name="" type="button">Hủy</button></a>
                        <button class="btn btn-success mt-3 " name="btnsetpass" type="submit">Cài đặt mật khẩu mới</button>
                    </div>
                </form>
                <?php }}}?>
            </div>


        </div>

    </main>
<?php include('../../../public/template/site/footer.php');?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
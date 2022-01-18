<?php include('../../../public/template/site/header-account.php');?>
<style>
.bl-1{
    border-left: 6px solid var(--green-color);
}

</style>
        <div class="main-acc-right p-5"style="width:75%;background-color: white;">
            <h1 class="font-weight-bold ng-binding ff-title">Tổng quan về tài khoản</h1>
            <h2 class="font-weight-bold mt-4 ng-binding fs-3 ">Hồ sơ</h2>
            <?php 
                if(isset($_SESSION['isLoginOK'])){
                    include('../../../connect_db.php');
                    $sql = "SELECT * FROM nguoidung where ten_nguoidung = '".$_SESSION['isLoginOK']."'";
                    $resultt = mysqli_query($conn,$sql);
                    // Bước 03: Xử lý kết quả truy vấn
                    if(mysqli_num_rows($resultt) > 0){
                        while($row = mysqli_fetch_assoc($resultt)){
                        
            ?>
            <table class="table font-tex-col">
                <tbody>
                    <tr>
                        <td class="text-muted font-tex-col" style="font-family:inherit;">Tên người dùng</td>
                        <td><?php echo $row['ten_nguoidung'];?></td>
                    </tr>
                    <tr>
                        <td class="text-muted">Email</td>
                        <td><?php echo $row['email'];?></td>
                    </tr>
                    <tr>
                        <td class="text-muted">Ngày sinh</td>
                        <td><?php echo $row['ngay'];?> tháng <?php echo $row['thang'];?>, <?php echo $row['nam'];?></td>
                    </tr>
                    <tr>
                        <td class="text-muted">Quốc gia hoặc khu vực</td>
                        <td><?php echo $row['quoctich'];?></td>
                    </tr>
                </tbody>
            </table>
            <?php }} }?>
            <a href="profile.php"><button type="button" class=" btn btn-outline-dark">Chỉnh sửa hồ sơ</button></a>
            <h2 class="fomt-weight-bold pt-5 ng-binding fs-3">Đăng xuất ở mọi nơi</h2>
            <p>Thao tác này sẽ giúp bạn đăng xuất trên tất cả thiết bị di động, máy tính bảng, trình phát trên web
                và ứng dụng cho máy tính mà bạn đã đăng nhập. Đối với thiết bị của đối tác (ví dụ: loa, máy chơi trò
                chơi và TV), hãy chuyển đến phần Ứng dụng trong trang tài khoản của bạn rồi chọn XÓA QUYỀN TRUY CẬP.
            </p>
            <button type="button" class=" btn btn-outline-dark ">Đăng xuất mọi nơi</button>

        </div>
    </div>
</main>
<?php include('../../../public/template/site/footer.php');?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
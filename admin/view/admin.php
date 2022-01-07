<?php require_once('../../public/template/admin/header.php');?>             
                <h5 class="text-center text-primary p-4">DANH BẠ ĐIỆN THOẠI CÁN BỘ/GIẢNG VIÊN TRƯỜNG ĐH THỦY LỢI</h5>
                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã nhân viên</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Chức vụ</th>
                            <th scope="col">Số máy bàn</th>
                            <th scope="col">Số di động</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tên đơn vị</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                        <?php
                            // Bước 01: Kết nối Database Server
                            $conn = mysqli_connect('localhost','root','','dhtl_danhba');
                            if(!$conn){
                                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                            }
                            // Bước 02: Thực hiện truy vấn
                            $sql = "SELECT * FROM db_nhanvien";
                            $result = mysqli_query($conn,$sql);
                            // Bước 03: Xử lý kết quả truy vấn
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                                    <tr>
                                        <th scope="row"><?php echo $row['ma_nhanvien']; ?></th>
                                        <td><?php echo $row['hovaten']; ?></td>
                                        <td><?php echo $row['chucvu']; ?></td>
                                        <td><?php echo $row['sodt_coquan']; ?></td>
                                        <td><?php echo $row['sodt_didong']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['ma_donvi']; ?></td>
                                    </tr>
                        <?php
                                }
                            }
                        ?>
                        
                        
                    </tbody>
                    </table>
<?php require_once('../../public/template/admin/footer.php');?>   
<?php 
//Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: ../login-admin.php");
    }
?>
<?php include('../../../public/template/admin/header.php');?>
<style>
    .bnn-1{
        background-color: rgb(65, 65, 65);
    }
</style>
<div id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column text-muted">
            <div id="content">
                <div class="containerrr">
                    <div class="d-grid gap-2 justify-content-md-end">
                        <a href="addUser.php">
                            <button class="btn btn-primary fs-4" type="button">+</button>
                        </a>
                    </div>
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="../../../index.php">Spotify.com</a>.</p>
                    <div class="card shadow mb-4 text-muted">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Users</h6>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="dataTable_length">
                                                <label class ="d-flex">Show &nbsp;&nbsp;
                                                    <select name="dataTable_length"aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>&nbsp;&nbsp; entries
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 ">
                                            <div id="dataTable_filter" class="dataTables_filter float-end">
                                                <label class="d-flex">Search:&nbsp;&nbsp;
                                                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered dataTable text-muted" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                <thead>
                                                    <tr role="row">
                                                        <th scope="col">STT</th>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Password</th>
                                                        <th scope="col">Date of birth</th>
                                                        <th scope="col">Gender</th>
                                                        <th scope="col">Country</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">STT</th>
                                                        <th rowspan="1" colspan="1">ID</th>
                                                        <th rowspan="1" colspan="1">Name</th>
                                                        <th rowspan="1" colspan="1">Email</th>
                                                        <th rowspan="1" colspan="1">Password</th>
                                                        <th rowspan="1" colspan="1">Date of birth</th>
                                                        <th rowspan="1" colspan="1">Gender</th>
                                                        <th rowspan="1" colspan="1">Country</th>
                                                        <th rowspan="1" colspan="1">Status</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                   <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                                                    <?php
                                                       include('../../../connect_db.php');
                                                        // Bước 02: Thực hiện truy vấn
                                                        $sql = "SELECT * FROM nguoidung";
                                                        $result = mysqli_query($conn,$sql);
                                                        // Bước 03: Xử lý kết quả truy vấn
                                                        if(mysqli_num_rows($result) > 0){
                                                            while($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td><?php echo $row['ma_nguoidung']; ?></td>
                                                                    <td><?php echo $row['ten_nguoidung']; ?></td>
                                                                    <td><?php echo $row['email']; ?></td>
                                                                    <td><?php echo $row['matkhau']; ?></td>
                                                                    <td><?php echo $row['ngay']; ?>/<?php echo $row['thang']; ?>/<?php echo $row['nam']; ?></td>
                                                                    <td><?php echo $row['gioitinh']; ?></td>
                                                                    <td><?php echo $row['quoctich']; ?></td>
                                                                    <td><?php echo $row['status']; ?></td>
                                                                </tr>
                                                    <?php
                                                            }
                                                        }
                                                    ?>
                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers float-end" id="dataTable_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                                        <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                    </li>
                                                    <li class="paginate_button page-item active">
                                                        <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                                    </li>
                                                    <li class="paginate_button page-item next" id="dataTable_next">
                                                        <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include('../../../public/template/admin/footer.php');?>

<!-- <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

     -->

</body>

</html>
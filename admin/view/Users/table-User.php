<?php 
//Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: ../../../admin/controller/controll-login-admin.php");
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
                    <?php 
                        if(isset($_GET['suscces'])){
                        echo
                        "<div class='bXxIjv '>
                            <div class='hUAscM color-suscess tbao' style='background-color: var(--green-color);border:0;'>
                                <label for='password' class='hyIrKV'><i class='material-icon text-dark bi bi-check2-circle'></i> &nbsp;&nbsp; {$_GET['suscces']}</label>
                            </div>
                        </div>";}
                        if(isset($_GET['error'])){
                            echo
                            "<div class='bXxIjv '>
                                <div class='hUAscM  tbao' style='background-color: red;color:white;border:0;'>
                                    <label  class='hyIrKV'><i class='material-icon text-dark bi bi-x'></i> &nbsp;&nbsp; {$_GET['error']}</label>
                                </div>
                            </div>";}
                    ?>
                    <div class="d-grid gap-2 justify-content-md-end">
                        <a href="addUser.php">
                            <button class="btn btn-primary fs-6" type="button">Thêm mới +</button>
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
                                                        <th scope="col">Detail</th>
                                                        <th scope="col">Delete</th>
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
                                                        <th rowspan="1" colspan="1">Detail</th>
                                                        <th rowspan="1" colspan="1">Delete</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                   <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                                                    <?php
                                                       include('../../../connect_db.php');
                                                       $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:10;
                                                       $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
                                                       $offset = ($current_page - 1) * $item_per_page;
                                                        // Bước 02: Thực hiện truy vấn
                                                        $sql = "SELECT * FROM nguoidung";
                                                        $products = mysqli_query($conn, "SELECT * FROM `nguoidung` ORDER BY `ma_nguoidung` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
                                                        $totalRecords = mysqli_query($conn, "SELECT * FROM `nguoidung`");
                                                        $totalRecords = $totalRecords->num_rows;
                                                        $totalPages = ceil($totalRecords / $item_per_page);
                                                        // $result = mysqli_query($conn,$sql);
                                                        // Bước 03: Xử lý kết quả truy vấn
                                                        if(mysqli_num_rows($products) > 0){
                                                            $count=1;
                                                            while($row = mysqli_fetch_array($products)){
                                                               
                                                    ?>
                                                                <tr>
                                                                    <th scope="row"><?php echo $count++; ?></th>
                                                                    <td><?php echo $row['ma_nguoidung']; ?></td>
                                                                    <td><?php echo $row['ten_nguoidung']; ?></td>
                                                                    <td><?php echo $row['email']; ?></td>
                                                                    <td><?php echo $row['matkhau']; ?></td>
                                                                    <td><?php echo $row['ngay']; ?>/<?php echo $row['thang']; ?>/<?php echo $row['nam']; ?></td>
                                                                    <td><?php echo $row['gioitinh']; ?></td>
                                                                    <td><?php echo $row['quoctich']; ?></td>
                                                                    <td><?php echo $row['status']; ?></td>
                                                                    <td><a href="detailUser.php?id=<?php echo $row['ma_nguoidung']; ?>"><i class="bi bi-display"></i></a></td>
                                                                    <td><a href="../../../admin/model/UsersModel/deleteUser-model.php?id=<?php echo $row['ma_nguoidung']; ?>"><i class="bi bi-trash"></i></a></td>
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
                                                <?php
                                                include '../../../admin/model/pagination.php';
                                                ?>
                                               
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


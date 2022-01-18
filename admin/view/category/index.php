<?php 
// Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginadmin'])){
        header("location: ../login/login-admin.php");
    }
?>
<style>
    .bnn-4{
        background-color: rgb(65, 65, 65);
    }
    
</style>
<?php
include "../../../public/template/admin/header.php";
?>
        <div class="containerrr">
            <div class="row">
                <div class="mt-5 col-md-12">
                    <div class="clearfix">
                        <h2 class="pull-left">Thể loại</h2>
                        <a href="add-category.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i>Thêm mới</a>
                    </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên thể loại</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Màu nền</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    
                                    // b1: include db
                                    require_once "../../../connect_db.php";
                                    // b2: Truy van
                                    
                                    $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:5;
                                    $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
                                    $offset = ($current_page - 1) * $item_per_page;
                                    // Bước 02: Thực hiện truy vấn
                                    // $sql = "SELECT * FROM nguoidung";
                                    $result = mysqli_query($conn, "SELECT * FROM categories ORDER BY id_category DESC  LIMIT " . $item_per_page . " OFFSET " . $offset);
                                    $totalRecords = mysqli_query($conn, "SELECT * FROM `categories`");
                                    $totalRecords = $totalRecords->num_rows;
                                    $totalPages = ceil($totalRecords / $item_per_page);
                                        if(mysqli_num_rows($result)>0){
                                            $count=1;
                                            while($row = mysqli_fetch_array($result)){
                                    ?>
                                        <th scope="row"><?php echo $count++; ?></th>
                                        <td><?php echo $row['id_category']; ?></td>
                                        <td><?php echo $row['ten']; ?></td>
                                        <td><img src="../../../public/img/theloai/<?php echo $row['anh']; ?>"   style="max-width:50px;"></td>
                                        <td><div style="background-color: <?php echo $row['maunen']; ?>; width:50px; height:50px"></div></td>
                                        <td>
                                            <a href="update-category.php?id=<?php echo $row['id_category']?>" title="Update Record" ><i class="fas fa-pencil-alt"></i></a>
                                            <a href="delete-category.php?id=<?php echo $row['id_category']?>" title="Delete Record" ><i class="far fa-trash-alt"></i></a>
                                        </td>
                                </tr>    
                                        

                                    <?php
                                            }
                                        } else{
                                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                                        } 
                                    // }
                                    // else{
                                    //     echo "Da xay ra su co";
                                    // }
                                    
                                    mysqli_close($conn);
                                    ?>
                                    
                                    
                            </tbody>
                        </table>
                    <?php
                    include "../../model/pagination.php";
                    ?>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
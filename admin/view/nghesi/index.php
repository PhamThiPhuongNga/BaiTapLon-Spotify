<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nghệ sĩ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>

<div class="wrapper" > -->
<?php 
// Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: ../login/login-admin.php");
    }
?>
<?php
include "../../../public/template/admin/header.php";
?>
        <div class="container">
            <div class="row">
                <div class="mt-5 col-md-12">
                    <div class="clearfix">
                        <h2 class="pull-left">Danh sách nghệ sĩ</h2>
                        <a href="add-nghesi.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i>Thêm nghệ sĩ</a>
                    </div>
                    <table>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên nghệ sĩ</th>
                                    <th scope="col">Ảnh</th>
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
                                    $result = mysqli_query($conn, "SELECT * FROM nghesi ORDER BY id_nghesi DESC
                                                LIMIT " . $item_per_page . " OFFSET " . $offset);
                                    $totalRecords = mysqli_query($conn, "SELECT * FROM nghesi ORDER BY id_nghesi DESC");
                                    $totalRecords = $totalRecords->num_rows;
                                    $totalPages = ceil($totalRecords / $item_per_page);

                                    // $sql = "SELECT * FROM nghesi ORDER BY id_nghesi DESC ";
                                    // if($result = mysqli_query($conn, $sql)){
                                    // b3: Xu ly ket qua truy van
                                        if(mysqli_num_rows($result)>0){
                                            $count=1;
                                            while($row = mysqli_fetch_array($result)){
                                    ?>
                                        <th scope="row"><?php echo $count++; ?></th>
                                        <th scope="row"><?php echo $row['id_nghesi']; ?></th>
                                        <td><?php echo $row['ten_nghesi']; ?></td>
                                        <td><img src="<?php echo $row['anh_nghesi']; ?>"   style="max-width:50px;"></td>
                                        <td>
                                            <a href="update-nghesi.php?id=<?php echo $row['id_nghesi']?>" title="Update Record" ><i class="fas fa-pencil-alt"></i></a>
                                            <a href="delete-nghesi.php?id=<?php echo $row['id_nghesi']?>" title="Delete Record" ><i class="far fa-trash-alt"></i></a>
                                        </td>
                                </tr>    
                                        

                                    <?php
                                            }
                                        } else{
                                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                                        } 
                                    // }else{
                                    //     echo "Da xay ra su co";
                                    // }
                                    
                                    mysqli_close($conn);
                                    ?>
                                    
                                    
                            </tbody>
                        </table>
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
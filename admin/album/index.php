<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album</title> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../public/css/styleN.css">
     -->
<!-- </head>
<body>

<div class="wrapper" >
         -->
<?php
include "../template/header.php";
?>
    <div class="container">
            <div class="row">
                <div class="mt-5 col-md-12">
                    <div class="clearfix">
                        <h2 class="pull-left">Album</h2> 
                        <a href="add-album.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i>Add New
                        Album</a>
                    </div>
                    <table>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên Album</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Nghệ sĩ</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    
                                    // b1: include db
                                    require_once "../../connect_db.php";
                                    // b2: Truy van
                                    $sql = "SELECT ab.ma_ab, ab.ten_ab, ab.anh_ab, ns.ten_nghesi 
                                            FROM album ab, nghesi ns  
                                            WHERE ab.id_nghesi  = ns.id_nghesi 
                                            ORDER BY ma_ab DESC ";
                                    if($result = mysqli_query($conn, $sql)){
                                    // b3: Xu ly ket qua truy van
                                        if(mysqli_num_rows($result)>0){
                                            $count=1;
                                            while($row = mysqli_fetch_array($result)){
                                    ?>
                                        <th scope="row"><?php echo $count++; ?></th>
                                        <td><?php echo $row['ma_ab']; ?></td>
                                        <td><?php echo $row['ten_ab']; ?></td>
                                        <td><img src="<?php echo $row['anh_ab']; ?>"   style="max-width:50px;"></td>
                                        <td><?php echo $row['ten_nghesi']; ?></td>
                                        <td>
                                            <a href="update-album.php?id=<?php echo $row['ma_ab']?>" title="Update Record" ><i class="fas fa-pencil-alt"></i></a>
                                            <a href="delete-album.php?id=<?php echo $row['ma_ab']?>" title="Delete Record" ><i class="far fa-trash-alt"></i></a>
                                        </td>
                                </tr>    
                                        

                                    <?php
                                            }
                                        } else{
                                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                                        } 
                                    }else{
                                        echo "Da xay ra su co";
                                    }
                                    
                                    mysqli_close($conn);
                                    ?>
                                    
                                    
                            </tbody>
                        </table>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
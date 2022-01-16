
<?php 
//Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: login.php");
    }

?>
<?php

$id = $_GET['id'];
include('../../connect_db.php');
$sql = "SELECT * FROM baihat bh, album ab 
        WHERE bh.ma_ab = ab.ma_ab AND 
        bh.ma_ab = '$id'";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
}

mysqli_close($conn);

?>
<style>
    .ql3{
        background-color: #2a2f30;
    }
</style>
<?php include('../../public/template/site/header_main.php');?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<div class="contain-right">
    <div class="control-page space control-page" style="margin-left:50px;margin-top:10px;">
        <i class="material-icon fas fa-chevron-circle-left fs-3 ml-5 myIconArrow ">
            <a href="#" target="_blank"
                rel="noopener noreferrer">
            </a>
        </i>
        <i class="material-icon fas fa-chevron-circle-right fs-3 pl-5 myIconArrow "></i>

    </div>
    
    <?php include("view-signin.php");?>
</div>
</div>
    </div>  
<div class="main">  
    <div class="main-inner-vien" style="width:83%;">
        <div class="bg-nen">
            <div class="main-bottom-t">
                    <div class="container  ">
                        <div class="row ">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 ms-3">
                                    <button class="btn-playlist align-items-center bg-dark ml-3">
                                        <img src="../../public/img/album/<?php echo $row['anh_ab']; ?>" class="my-img-list" alt="">
                                    </button>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-light">ALBUM</p>
                                    <a href="" class="text-decoration-none link-light ">
                                        <h1 style="font-size: 6.0rem;"><?php echo $row['ten_ab']; ?></h1>
                                    </a>
                                    <p><a href="" class="text-decoration-none link-light a-cogach"> <?php echo $_SESSION['isLoginOK']; ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <table class="table text-light  my-table   mt-5 ">
                <thead>
                    <tr>
                    <th scope="col"># TIÊU ĐỀ</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                include('../../connect_db.php');
                $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:5;
                $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
                $offset = ($current_page - 1) * $item_per_page;
                $result = mysqli_query($conn, "SELECT * FROM baihat bh, album ab ,nghesi ns 
                                                WHERE bh.ma_ab = ab.ma_ab and bh.id_nghesi=ns.id_nghesi AND bh.ma_ab = '$id'
                                                LIMIT " . $item_per_page . " OFFSET " . $offset);
                $totalRecords = mysqli_query($conn, "SELECT * FROM baihat bh, album ab ,nghesi ns 
                                                    WHERE bh.ma_ab = ab.ma_ab and bh.id_nghesi=ns.id_nghesi AND bh.ma_ab = '$id'");
                $totalRecords = $totalRecords->num_rows;
                $totalPages = ceil($totalRecords / $item_per_page);
                    if(mysqli_num_rows($result)>0){
                        $count=1;
                        while($row = mysqli_fetch_array($result)){
                ?>

            <tr class="">
                <th scope="row">
                    <div class="d-flex align-items-center"> 
                        <p><?php echo $count++; ?></p> 
                        &ensp;
                        <img src="../../public/img/baihat<?php echo $row['anh_bh']; ?>" class="my-img-table" alt="">
                        &ensp;
                        <div class="pt-2">
                            <h6><?php echo $row['ten_bh']; ?></h6>
                            <p class="text-secondary"><?php echo $row['ten_nghesi']; ?></p>
                        </div>
                    </div>
                </th>
               
                <td class="pt-4"><a href="../../site/model/process-yeuthich.php?id=<?php echo $row1['ma_bh'];?>"class=""><i class="bi bi-suit-heart-fill"></i></a></td>
            </tr>
                    
            <?php
                }
            } else{
                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
            } 
            mysqli_close($conn);
            ?>              
                
                </tbody> 
            </table>` 
        </div>
    </div> 
</div>

<?php include('../../public/template/site/footer_main.php');?>
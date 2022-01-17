
<?php 
//Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: login.php");
    }
   
?>
<<<<<<< HEAD
<style>
    .ql3{
        background-color: #2a2f30;
    }
</style>
=======

>>>>>>> 788be0e7ebe76c37207889fcd935186a3b928ed6
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
 
<div class="main">   
    <div class="main-inner-vien" style="width:83%;">
        <div class="bg-nen">
<<<<<<< HEAD
            <div class="main-bottom-t">
                    <div class="container  ">
                        <div class="row ">
                        <?php

                            $id = $_GET['id'];
                            include('../../connect_db.php');
                            $sql = "SELECT * FROM baihat bh, album ab 
                                    WHERE bh.ma_ab = ab.ma_ab AND 
                                    bh.ma_ab = '$id'";

                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result) > 0){
                                $row = mysqli_fetch_assoc($result);

                            ?>
                            <div class="d-flex align-items-center">
=======
                <?php 
                    $id = $_GET['id'];
                    include('../../connect_db.php');
                    $sql = "SELECT * FROM album where ma_ab = '$id'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                       $row = mysqli_fetch_assoc($result);
                ?> 
            <div class="main-bottom-t"  style="height:300px; background-image: url('../img/anh-mang-dep-nhat-24.jpg');">  
                <!-- <div class="row "> -->
                        <div class="d-flex align-items-center">
>>>>>>> 788be0e7ebe76c37207889fcd935186a3b928ed6
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
                                </div>
<<<<<<< HEAD
                            </div>
                            <?php }?>
=======
>>>>>>> 788be0e7ebe76c37207889fcd935186a3b928ed6
                        </div>
                <!-- </div> -->
            </div><?php } ?>
            <table class="table text-light m-5 mh-100 mx-auto my-table">
                <thead>
                    <tr>
                    <th scope="col"># TIÊU ĐỀ</th>
                    <th scope="col">NGÀY THÊM</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $id = $_GET['id'];
                    include('../../connect_db.php');
                    $sqll = "SELECT * 
                            FROM baihat bh, album ab, nghesi ns
                            WHERE bh.ma_ab = ab.ma_ab
                            AND bh.id_nghesi = ns.id_nghesi
                            AND ab.ma_ab  = '$id'
                            ORDER BY ma_bh DESC ";
                    $resultt = mysqli_query($conn,$sqll);
                    if(mysqli_num_rows($resultt) > 0){
                        $count=1;
<<<<<<< HEAD
                        while($row = mysqli_fetch_array($result)){
                ?>

            <tr class="">
                <th scope="row">
                    <div class="d-flex align-items-center"> 
                        <p><?php echo $count++; ?></p> 
                        &ensp;
                        <img src="../../public/img/baihat/<?php echo $row['anh_bh']; ?>" class="my-img-table" alt="">
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
                }}
            // } else{
            //     echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
            // } 
            mysqli_close($conn);
            ?>              
                
                </tbody> 
            </table>` 
=======
                       while($row1 = mysqli_fetch_assoc($resultt)){
                ?> 
                <tr>
                    <th scope="row">
                        <div class="d-flex align-items-center" id="<?php echo $count; ?> " onClick="play_click(this.id)"> 
                            <p><?php echo $count++;?></p> 
                            &ensp;
                            <img src="../../public/img/baihat/<?php echo $row1['anh_bh'];?>" class="my-img-table" alt="">
                            &ensp;
                            <div class="pt-2">
                                <h6><?php echo $row1['ten_bh'];?></h6>
                                <span class=""><?php echo $row1['ten_nghesi'];?></span>
                            </div>
                        </div>
                    </th>
                    <td class="pt-4"><?php echo $row1['ngaythem'];?></td>
                    <td class="pt-4"><a href="process-yeuthich.php?id=<?php echo $row1['ma_bh'];?>"class=""><i class="bi bi-suit-heart-fill"></i></a></td>
                </tr>
                <?php }} ?>
                </tbody>
            </table>
>>>>>>> 788be0e7ebe76c37207889fcd935186a3b928ed6
        </div>
    </div>
</div> 

<?php
      // Bước 01: Kết nối Database Server
    //   echo $id;
      $conn = mysqli_connect('localhost','root','','spotify');
      if(!$conn){
          die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
      }
    //   Bước 02: Thực hiện truy vấn
      $sql = "SELECT * 
      FROM baihat bh, album ab, nghesi ns
      WHERE bh.ma_ab = ab.ma_ab
      AND bh.id_nghesi = ns.id_nghesi
      AND ab.ma_ab  = '$id'
      ORDER BY ma_bh DESC ";
      $resultbh = mysqli_query($conn,$sql);
    //   echo $result;
    //   $yeuthich;
    //    echo "<pre>";
    //     print_r($yeuthich);
      echo '<script>';
      echo 'var track_list =[] ;';
      echo '</script>';
      while($row = mysqli_fetch_assoc($resultbh)){

      echo '<script>';
      echo 'var track = ' . json_encode($row) . ';';
    //   echo 'console.log(track);';
      echo 'track_list.push(track) ;';
      echo '</script>';
      }
?>

<?php include('../../public/template/site/footer_main.php');?>
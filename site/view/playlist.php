<?php 
//Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: login.php");
    }
   
?>
<?php
$s = '';
if(isset($_GET['search'])){
    $s = $_GET['search'];
}
$search = '';
if(!empty($s)){
    $search = 'where ten like "%'.$s.'%" ';
}

?>
<style>
    .ql2{
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
    <div class="box-search">
        <div class="form-search">
            <form class="" method="get" action="playlist.php">
                <input class="search-input" type="text" name="search" id="search" placeholder="Nghệ sĩ, bài hát hoặc album"> 
                <i class=" icon-search bi bi-search"></i>
            </form>
        </div>
    </div>
    <?php include("view-signin.php");?>
</div>
</div>
    </div>  
<div class="main">
    <div class="main-inner-vien">
        <div class="bg-nen ">
            <div class="form-item text" style="width: 688px">
                <?php
                if(!empty($s)){
                    echo '
                <table class="table text-light  mh-100 mx-auto my-table"  style="margin-bottom: 22px !important;">
                    <thead>
                        <tr>
                        <th scope="col"> <h5 style="font-weight:700; letter-spacing:-1.5px;">Bài hát</h5></th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                ';
                include('../../connect_db.php');
                $sqll = 'SELECT *
                FROM baihat bh, nghesi ns
                WHERE bh.id_nghesi = ns.id_nghesi 
                AND (bh.ten_bh LIKE "%'.$s.'%"
                    OR ns.ten_nghesi LIKE "%'.$s.'%")
                ORDER BY ma_bh DESC';
                        // echo $sqll;
                $resulbh = mysqli_query($conn,$sqll);
                if(mysqli_num_rows($resulbh) > 0){
                    $count=1;
                    while($row1 = mysqli_fetch_assoc($resulbh)){
                        echo '<tr class="change-bg-list">
                            <th scope="row">
                                <div class="d-flex align-items-center" id="'.$count.'" onClick="play_click(this.id)"> 
                                    <p>'.$count++.'</p> 
                                    &ensp;
                                    <img src="../../public/img/baihat/'.$row1['anh_bh'].'" class="my-img-table" alt="">
                                    &ensp;
                                    <div class="pt-2">
                                        <h6>'.$row1['ten_bh'].'</h6>
                                        <span class="">'.$row1['ten_nghesi'].'</span>
                                    </div>
                                </div>
                            </th>
                            <td class="pt-4"><a href="process-yeuthich.php?id='.$row1['ma_bh'].'"class=""><i class="bi bi-suit-heart-fill"></i></a></td>
                        </tr>';
                        }
                    }


                    echo '</tbody>
                    </table>';
                    }
                
                ?>

            </div>
            <div class="form-item text">
                <div class=" space " style="border-bottom: solid 1px #dee2e6;">
                    <h5 class=""style="font-weight:700; letter-spacing:-1.5px;">Thể loại</h5>
                </div>
                <div class="clear"></div>
                <div class="row">
                <?php 
                    include('../../connect_db.php');
                    $sql = "SELECT * FROM `categories` $search ";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?> 
                        <div class="col-md-2 vien-item vien-item2">
                            <a href="../../site/view/generer.php?idtl=<?php echo $row['id_category']?>">
                                <div  class="image-content"style="background-color: <?php echo $row['maunen'] ?>;">
                                    <img src="../../public/img/theloai/<?php echo $row['anh'] ?>" class="card-img-topp image-item" alt="..."width="auto">
                                    <div class="caption mauchu">
                                        <h4 style="font-weight:700;"><?php echo $row['ten'] ?></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php }}?>
                </div>                
            </div>
            <div class="form-item text">  
                <?php
                if(!empty($s)){
                        echo '
                    <div class=" space " style="border-bottom: solid 1px #dee2e6;">
                        <h5 style="font-weight:700; letter-spacing:-1.5px;">Nghệ sĩ tìm được</h5>
                                        
                    </div>
                    <div class="clear"></div>
                    <div class="row ">
                    ';
                    include('../../connect_db.php');
                    $sqlns = 'SELECT * FROM nghesi
                    WHERE ten_nghesi LIKE "%'.$s.'%"';
                    // echo $sqlns;
                    $result = mysqli_query($conn,$sqlns);
                                        
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result)){
                            echo '
                            <div class=" col-md-2 ">
                            <div  class="box">
                                <div class="cardd">
                                    <a href="nghesi_list.php?id='.$row['id_nghesi'].'">
                                        <img src="../../public/img/nghesi/'.$row['anh_nghesi'].'" class="card-imggg" alt="..." width="155px" height="155px"style="border-radius: 50%;">
                                        <div class="card-bodyy mauchu ">
                                            <p class="title-item text">'.$row['ten_nghesi'].'</p>
                                            <p class="card-text-infor title-item">Nghệ sĩ</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                            ';
                        }
                    }
                    echo '</div>';
                }

                ?>
            </div>  
            <div class="form-item text">
                <?php
                if(!empty($s)){
                    echo '
                    <div class="title-h space clear" style="border-bottom: solid 1px #dee2e6;">
                                        <h5 style="font-weight:700; letter-spacing:-1.5px;">Album tìm được</h5>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="row ">
                    
                    ';
                    include('../../connect_db.php');
                    $sqlab = 'SELECT ab.ma_ab, ab.ten_ab, ab.anh_ab, ns.ten_nghesi 
                    FROM album ab, nghesi ns  
                    WHERE ab.id_nghesi  = ns.id_nghesi  
                    AND  ten_ab LIKE"%'.$s.'%" ';
                    // echo $sqlab;
                    $result = mysqli_query($conn, $sqlab);
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_array($result)){
                                echo '
                                <div class=" col-md-2 ">
                                <div  class="box">
                                    <div class="cardd">
                                        <a href="album_list.php?id='.$row['ma_ab'].'">
                                            <img src="../../public/img/album/'.$row['anh_ab'].'" class="img-topp" alt="..."width="155px" height="155px">
                                            <div class="card-bodyy mauchu">
                                                <p class="title-item text">'.$row['ten_ab'].'</p>
                                                <p class="card-text-infor title-item">'.$row['ten_nghesi'].'</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                                ';
                            }
                        }
                    echo '</div> ';
                }

                ?>
            </div>
        </div>
    </div>
</div> 
<?php
    if(!empty($s)){
    $conn = mysqli_connect('localhost','root','','spotify');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sqll = 'SELECT *
    FROM baihat bh, nghesi ns
    WHERE bh.id_nghesi = ns.id_nghesi 
    AND (bh.ten_bh LIKE "%'.$s.'%"
        OR ns.ten_nghesi LIKE "%'.$s.'%")
    ORDER BY ma_bh DESC';
            // echo $sqll;
    $resulbh = mysqli_query($conn,$sqll);


    echo '<script>';
    echo 'var track_list =[] ;';
    echo '</script>';

    while($row = mysqli_fetch_assoc($resulbh)){

    echo '<script>';
    echo 'var track = ' . json_encode($row) . ';';
    //   echo 'console.log(track);';
    echo 'track_list.push(track) ;';
    echo '</script>';
    }
    }
?>
<?php include('../../public/template/site/footer_main.php');?>
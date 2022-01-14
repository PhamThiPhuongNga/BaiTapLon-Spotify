
<?php 
//Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: login.php");
    }
   
?>
<style>
    .ql6{
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
    <ul class="nav nav-pills d-flex align-items-center my-nav" >
        <!-- <i class="fas fa-chevron-circle-left fs-3 ml-5 myIconArrow"><a href="#" target="_blank"
                rel="noopener noreferrer"></a></i>
        <i class="fas fa-chevron-circle-right fs-3 pl-5 myIconArrow"></i> -->

        <li class="nav-item menu-list">
            <a class="nav-linkk   text-light" aria-current="page" href="playlist.php">Playlist</a>
        </li>
        <!-- <li class="nav-item ">
            <a class="nav-link active text-light" href="podcasts.html">Postcast</a>
        </li> -->
        <li class="nav-item">
            <a class="nav-linkk  text-light" href="nghesi.php">Nghệ sĩ</a>
        </li>
        <li class="nav-item ql6">
            <a class="nav-linkk  text-light" href="album.php">Album</a>
        </li>

    </ul>
    <?php include("view-signin.php");?>
</div>
</div>
    </div>  
<div class="main">   
    <div class="main-inner-vien"style="width:83%;">
      <div class="bg-nen">
            <div class="form-item text">
                <div class="title-h space clear">
                    <h4 class=""style="font-weight:700; letter-spacing:-1.5px;">Abum</h4>
                </div>
                <div class="clear"></div>
                <div class="row ">

                    <?php
                    require_once "../../connect_db.php";
                    $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:5;
                    $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
                    $offset = ($current_page - 1) * $item_per_page;
                    $result = mysqli_query($conn, "SELECT ab.ma_ab, ab.ten_ab, ab.anh_ab, ns.ten_nghesi 
                                                    FROM album ab, nghesi ns  
                                                    WHERE ab.id_nghesi  = ns.id_nghesi 
                                                    ORDER BY ma_ab DESC
                                                    LIMIT " . $item_per_page . " OFFSET " . $offset);
                    $totalRecords = mysqli_query($conn, "SELECT * FROM album ab, nghesi ns
                                                    WHERE ab.id_nghesi  = ns.id_nghesi");
                    $totalRecords = $totalRecords->num_rows;
                    $totalPages = ceil($totalRecords / $item_per_page);
                    if(mysqli_num_rows($result)>0){
                        $count=1;
                        while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class=" col-md-2 pb-5">
                        <div  class="box">
                            <div class="cardd">
                                <a href="album_list.php?id=<?php echo $row['ma_ab']?>">
                                    <img src="<?php echo $row['anh_ab']; ?>" class="img-topp" alt="..."width="auto" height="155px">
                                    <div class="card-bodyy mauchu">
                                        <p class="title-item text"><?php echo $row['ten_ab']; ?></p>
                                        <p class="card-text-infor title-item"><?php echo $row['ten_nghesi']; ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>  
                        
                    <?php
                        }
                    } else{
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    } 
                    mysqli_close($conn);
                    ?>                                          
                </div>   
                <?php
                include "../../admin/model/pagination.php";
                ?>                    
            </div>     
        </div>
        
    </div>
</div> 
<?php include('../../public/template/site/footer_main.php');?>
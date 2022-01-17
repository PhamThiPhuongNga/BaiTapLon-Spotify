
<?php 
//Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: login.php");
    }
   
?>
<style>
    .ql1{
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
    <div class="main-inner-vien">
        <div class="bg-nen">
            <div class="form-item text">
                <div class=" space ">
                    <h4 class=""style="font-weight:700; letter-spacing:-1.5px;">Nghệ sĩ</h4>
                    <a  class="see-more card-text-infor mauchu" href="nghesi.php">XEM TẤT CẢ</a>
                </div>
                <div class="clear"></div>
                <div class="row ">
                <?php 
                include('../../connect_db.php');
                $result = mysqli_query($conn, "SELECT * FROM nghesi ORDER BY id_nghesi DESC limit 6");
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result)){
                ?>
                    <div class=" col-md-2 ">
                        <div  class="box">
                            <div class="cardd">
                                <a href="nghesi_list.php?id=<?php echo $row['id_nghesi']?>">
                                    <img src="../../public/img/nghesi/<?php echo $row['anh_nghesi']; ?>" class="card-imggg" alt="..." width="155px" height="155px"style="border-radius: 50%;">
                                    <div class="card-bodyy mauchu ">
                                        <p class="title-item text"><?php echo $row['ten_nghesi']; ?></p>
                                        <p class="card-text-infor title-item">Nghệ sĩ</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php }}?>
                </div>                
            </div>
            <div class="form-item text">
                <div class="title-h space clear">
                    <h4 class=""style="font-weight:700; letter-spacing:-1.5px;">Thể loại</h4>
                    <a  class="see-more card-text-infor mauchu" href="search.php">XEM TẤT CẢ</a>
                </div>
                <div class="clear"></div>
                <div class="row ">
                <?php 
                    include('../../connect_db.php');
                    $sql = "SELECT * FROM `categories` ORDER BY id_category DESC LIMIT 6;";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?> 
                    
                        <div class="col-md-4 vien-item">
                            <a href="../../site/view/generer.php?idtl=<?php echo $row['id_category']?>">
                                <div  class="bg-content"style="background-color: <?php echo $row['maunen'] ?>;">
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
                <div class="title-h space clear">
                    <h4 class=""style="font-weight:700; letter-spacing:-1.5px;">Abum</h4>
                    <a  class="see-more card-text-infor mauchu" href="album.php">XEM TẤT CẢ</a>
                </div>
                <div class="clear"></div>
                <div class="row ">
                <?php 
                include('../../connect_db.php');
                $result = mysqli_query($conn, "SELECT ab.ma_ab, ab.ten_ab, ab.anh_ab, ns.ten_nghesi 
                FROM album ab, nghesi ns  
                WHERE ab.id_nghesi  = ns.id_nghesi ORDER BY ma_ab DESC limit 6");
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result)){
                ?>
                    <div class=" col-md-2 ">
                        <div  class="box">
                            <div class="cardd">
                                <a href="album.php">
                                    <img src="../../public/img/album/<?php echo $row['anh_ab']; ?>" class="img-topp" alt="..."width="155px" height="155px">
                                    <div class="card-bodyy mauchu">
                                        <p class="title-item text"><?php echo $row['ten_ab']; ?></p>
                                        <p class="card-text-infor title-item"><?php echo $row['ten_nghesi']; ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php }}?>
                </div>                
            </div>
        </div>
        
    </div>
</div> 
<?php include('../../public/template/site/footer_main.php');?>

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
                    <a  class="see-more card-text-infor mauchu" href="">XEM TẤT CẢ</a>
                </div>
                <div class="clear"></div>
                <div class="row ">
                    <div class=" col-md-2 ">
                        <div  class="box">
                            <div class="cardd">
                                <a href="">
                                    <img src="../../public\img\anh-mang-dep-nhat-24.jpg" class="card-imggg" alt="..."width="auto" height="155px">
                                    <div class="card-bodyy mauchu">
                                        <span class="title-item text">Tri Kỷ Cảm Xúc</span>
                                        <span class="card-text ">Web5Ngay</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="form-item text">
                <div class="title-h space clear">
                    <h4 class=""style="font-weight:700; letter-spacing:-1.5px;">Thể loại</h4>
                    <a  class="see-more card-text-infor mauchu" href="">XEM TẤT CẢ</a>
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
                            <a href="">
                                <div  class="bg-content"style="background-color: <?php echo $row['maunen'] ?>;">
                                    <img src="<?php echo $row['anh'] ?>" class="card-img-topp image-item" alt="..."width="auto">
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
                    <a  class="see-more card-text-infor mauchu" href="">XEM TẤT CẢ</a>
                </div>
                <div class="clear"></div>
                <div class="row ">
                    <div class=" col-md-2 ">
                        <div  class="box">
                            <div class="cardd">
                                <a href="">
                                    <img src="../../public\img\anh-mang-dep-nhat-24.jpg" class="img-topp" alt="..."width="auto" height="155px">
                                    <div class="card-bodyy mauchu">
                                        <p class="title-item text">Bài hát hàng đầu tại Toàn Cầu</p>
                                        <p class="card-text-infor title-item">Thông tin cập nhật hàng tuần cập nhật tại</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-2 ">
                        <div  class="box">
                            <div class="cardd">
                                <a href="">
                                    <img src="../../public\img\anh-mang-dep-nhat-24.jpg" class="img-topp" alt="..."width="auto" height="155px">
                                    <div class="card-bodyy mauchu">
                                        <p class="title-item text">Bài hát hàng đầu tại Toàn Cầu</p>
                                        <p class="card-text-infor title-item">Thông tin cập nhật hàng tuần cập nhật tại</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                
                </div>                
            </div>
        </div>
        
    </div>
</div> 
<?php include('../../public/template/site/footer_main.php');?>
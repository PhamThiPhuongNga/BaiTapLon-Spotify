
<?php 
//Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: login.php");
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
            <form class="">
                <input class="search-input" type="text" name="search" id="search" placeholder="Nghệ sĩ, bài hát, hoặc postcard"> 
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
        <div class="bg-nen">
            <div class="form-item text">
                <div class=" space ">
                    <h4 class=""style="font-weight:700; letter-spacing:-1.5px;">Duyệt tìm tất cả</h4>
                </div>
                <div class="clear"></div>
                <div class="row">
                <?php 
                    include('../../connect_db.php');
                    $sql = "SELECT * FROM `categories`";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?> 
                        <div class="col-md-2 vien-item">
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
            
            
        </div>
        
    </div>
</div> 
<?php include('../../public/template/site/footer_main.php');?>

<?php 
//Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: login.php");
    }
   
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
                <?php 
                    $idtl = $_GET['idtl'];
                    include('../../connect_db.php');
                    $sql = "SELECT * FROM `categories` where id_category = '$idtl'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                       $row = mysqli_fetch_assoc($result);
                ?> 
            <div class="main-bottom-t"  style="height:300px; background-image: url('../img/anh-mang-dep-nhat-24.jpg');">  
                <!-- <div class="row "> -->
                    <div class="d-flex align-items-center tenthloai">
                        <div class="flex-grow-1 ms-3 mt-5">
                            <p class="text-light">PLAYLIST</p>
                            <a href="" class="text-decoration-none link-light ">
                                <h1 style="font-size: 6.0rem;"><?php echo $row['ten'];?></h1>
                            </a>
                            <p><a href="" class="text-decoration-none link-light a-cogach">Spotify - đây là những ca khúc thịnh hành nhất ở Việt Nam</a></p>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
                <?php }?>
                <?php  $idtl = $_GET['idtl'];
                    include('../../connect_db.php');
                    $sql = "SELECT `ma_bh`, `ten_bh`, `anh_bh`, `ngaythem`, `thoiluong_bh`, `quocgia`, `link_bh`, `ma_ab`, `id_nghesi` 
                    FROM `baihat` as bh INNER JOIN categories as ct WHERE bh.id_category=ct.id_category and ct.id_category='$idtl'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                       while($row = mysqli_fetch_assoc($result)){;?>
            <table class="table text-light m-5 mh-100 mx-auto my-table">
                <thead>
                    <tr>
                    <th scope="col"># TIÊU ĐỀ</th>
                    <th scope="col">ALBUM</th>
                    <th scope="col">NGÀY THÊM</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">
                        <div class="d-flex align-items-center"> 
                            <p>1</p> 
                            &ensp;
                            <img src="https://i.scdn.co/image/ab67616d000048510ac09baba508700ed0b5d4e3" class="my-img-table" alt="">
                            &ensp;
                            <div class="pt-2">
                                <h6><?php echo $row['ten_bh'];?></h6>
                                <?php  
                                    // $idtl = $_GET['idtl'];
                                    // include('../../connect_db.php');
                                    $sql1 = "SELECT bh.ma_bh,bh.ten_bh,bh.anh_bh,bh.ngaythem,bh.thoiluong_bh,bh.quocgia,bh.link_bh,ns.ten_nghesi,ns.anh_nghesi,bh.id_category 
                                    FROM `baihat` as bh INNER JOIN nghesi as ns WHERE bh.id_nghesi=ns.id_nghesi and id_category='$idtl'";
                                    $result1 = mysqli_query($conn,$sql1);
                                    if(mysqli_num_rows($result) > 0){
                                        $row1 = mysqli_fetch_assoc($result);?>
                                <p class="text-secondary"><?php echo $row1['ten_nghesi'] ?></p>
                                <?php }?>
                            </div>
                        </div>
                    </th>
                    <td class="pt-4">Hãy trao cho anh</td>
                    <td class="pt-4"><?php echo $row['ngaythem'];?></td>
                    <td class="pt-4"><button type="submit" class="l"><i class="bi bi-suit-heart-fill"></i></button></td>
                </tr>
                <tr>
                    <th scope="row">
                        <div class="d-flex align-items-center"> 
                            <p>1</p> 
                            &ensp;
                            <img src="https://i.scdn.co/image/ab67616d000048510ac09baba508700ed0b5d4e3" class="my-img-table" alt="">
                            &ensp;
                            <div class="pt-2">
                                <h6>Hãy trao cho anh</h6>
                                <p class="text-secondary">Sơn Tùng MTP</p>
                            </div>
                        </div>
                    </th>
                    <td class="pt-4">Hãy trao cho anh</td>
                    <td class="pt-4">9 giờ trước</td>
                    <td class="pt-4"><i class="bi bi-suit-heart-fill"></i></td>
                </tr>
                <tr>
                    <th scope="row">
                        <div class="d-flex align-items-center"> 
                            <p>1</p> 
                            &ensp;
                            <img src="https://i.scdn.co/image/ab67616d000048510ac09baba508700ed0b5d4e3" class="my-img-table" alt="">
                            &ensp;
                            <div class="pt-2">
                                <h6>Hãy trao cho anh</h6>
                                <p class="text-secondary">Sơn Tùng MTP</p>
                            </div>
                        </div>
                    </th>
                    <td class="pt-4">Hãy trao cho anh</td>
                    <td class="pt-4">9 giờ trước</td>
                    <td class="pt-4"><i class="bi bi-suit-heart-fill"></i></td>
                </tr>
                <tr>
                    <th scope="row">
                        <div class="d-flex align-items-center"> 
                            <p>1</p> 
                            &ensp;
                            <img src="https://i.scdn.co/image/ab67616d000048510ac09baba508700ed0b5d4e3" class="my-img-table" alt="">
                            &ensp;
                            <div class="pt-2">
                                <h6>Hãy trao cho anh</h6>
                                <p class="text-secondary">Sơn Tùng MTP</p>
                            </div>
                        </div>
                    </th>
                    <td class="pt-4">Hãy trao cho anh</td>
                    <td class="pt-4">9 giờ trước</td>
                    <td class="pt-4"><i class="bi bi-suit-heart-fill"></i></td>
                </tr>
                <tr>
                    <th scope="row">
                        <div class="d-flex align-items-center"> 
                            <p>1</p> 
                            &ensp;
                            <img src="https://i.scdn.co/image/ab67616d000048510ac09baba508700ed0b5d4e3" class="my-img-table" alt="">
                            &ensp;
                            <div class="pt-2">
                                <h6>Hãy trao cho anh</h6>
                                <p class="text-secondary">Sơn Tùng MTP</p>
                            </div>
                        </div>
                    </th>
                    <td class="pt-4">Hãy trao cho anh</td>
                    <td class="pt-4">9 giờ trước</td>
                    <td class="pt-4"><i class="bi bi-suit-heart-fill"></i></td>
                </tr>
                    
                </tbody>
            </table>
            <?php } }?>
        </div>
    </div>
</div> 
<?php include('../../public/template/site/footer_main.php');?>
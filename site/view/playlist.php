
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
    <ul class="nav nav-pills d-flex align-items-center my-nav" >
        <!-- <i class="fas fa-chevron-circle-left fs-3 ml-5 myIconArrow"><a href="#" target="_blank"
                rel="noopener noreferrer"></a></i>
        <i class="fas fa-chevron-circle-right fs-3 pl-5 myIconArrow"></i> -->

        <li class="nav-item menu-list ql3">
            <a class="nav-linkk  active text-light" aria-current="page" href="playlist.php">Playlist</a>
        </li>
        <!-- <li class="nav-item ">
            <a class="nav-link active text-light" href="podcasts.html">Postcast</a>
        </li> -->
        <li class="nav-item">
            <a class="nav-linkk text-light" href="nghesi.php">Nghệ sĩ</a>
        </li>
        <li class="nav-item">
            <a class="nav-linkk text-light" href="album.php">Album</a>
        </li>

    </ul>
    <?php include("view-signin.php");?>
</div>
</div>
    </div>  
<div class="main">   
    <div class="main-inner-vien" style="width:83%;">
        <div class="bg-nen">
        
            <div class="main-bottom-t">  
                <div class="row ">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 ms-3">
                            <button class="btn-playlist align-items-center bg-dark ml-3">
                                <i class="material-icons my-icon-thuvien text-secondary"></i>
                                <i class="bi bi-music-note-beamed my-icon-thuvien text-secondary"></i>
                            </button>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-light">PLAYLIST</p>
                            <a href="" class="text-decoration-none link-light ">
                                <h1 style="font-size: 6.0rem;">Playlist của tôi </h1>
                            </a>
                            <p><a href="" class="text-decoration-none link-light a-cogach"> <?php echo $_SESSION['isLoginOK']; ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
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
                <?php 
            include('../../connect_db.php');
            $search = $_POST['search'];
            $query = "SELECT bh.ma_bh,bh.ten_bh,bh.anh_bh,bh.ngaythem,bh.link_bh,bh.quocgia,ns.ten_nghesi,ab.ten_ab 
            FROM baihat as bh, nghesi as ns,album as ab 
            WHERE bh.id_nghesi=ns.id_nghesi and bh.ma_ab=ab.ma_ab and ns.ten_nghesi like '%$search%' or bh.ten_bh like '%$search%'";
            $truyvan=mysqli_query($conn,$query);
            if(mysqli_num_rows($truyvan)>0){
                // if(isset($_POST['ten_nghesi'])){
                    $count=1;
                    while($row = mysqli_fetch_array($truyvan)){
            ?>
                    <th scope="row">
                        <div class="d-flex align-items-center"> 
                            <p><?php echo $count++;?></p> 
                            &ensp;
                            <img src="../../public/img/baihat/<?php echo $row['anh_bh'];?>" class="my-img-table" alt="">
                            &ensp;
                            <div class="pt-2">
                                <h6><?php echo $row['ten_bh'];?></h6>
                                <p class="text-secondary"><?php echo $row['ten_nghesi'];?></p>
                            </div>
                        </div>
                    </th>
                    <td class="pt-4"><?php echo $row['ten_ab'];?></td>
                    <td class="pt-4"><?php echo $row['ngaythem'];?></td>
                    <td class="pt-4"><a href="../../site/model/process-yeuthich.php?id=<?php echo $row ['ma_bh'];?>"class=""><i class="bi bi-suit-heart-fill"></i></a></td>
                </tr>
                <?php }}?>
               
                </tbody>
            </table>
        </div>
    </div>
</div> 
<?php include('../../public/template/site/footer_main.php');?>
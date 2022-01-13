
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

                    <li class="nav-item menu-list">
                        <a class="nav-link  active text-light" aria-current="page" href="playlist.php">Playlist</a>
                    </li>
                    <!-- <li class="nav-item ">
                        <a class="nav-link active text-light" href="podcasts.html">Postcast</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="nghesi.php">Nghệ sĩ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="album.php">Album</a>
                    </li>

                </ul>
    <?php include("view-signin.php");?>
</div>
</div>
    </div>  
<div class="main">
           
    <div class="main-inner-vien">
        <div class="main-bottom-t">
                <div class="container  ">
                    <div class="row ">
                        <div class="col-3 "><button class="btn-playlist align-items-center bg-dark">
                                <i class="material-icons my-icon-thuvien text-secondary"></i>
                                <i class="bi bi-music-note-beamed my-icon-thuvien text-secondary"></i>
                            </button></div>
                        <div class="col-9 p-5">
                            <p class="text-light">PLAYLIST</p>
                            <a href="" class="text-decoration-none link-light ">
                                <h1 style="font-size: 6.0rem;">Playlist của tôi </h1>
                            </a>
                            <p><a href="" class="text-decoration-none link-light a-cogach"> <?php echo $_SESSION['isLoginOK']; ?></a></p>
                        </div>
                    </div>
                </div>
        </div>
        <table class="table text-light  my-table w-75  mt-5">
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
        
    </div>
</div> 
<?php include('../../public/template/site/footer_main.php');?>

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
                        <a class="nav-link   text-light" aria-current="page" href="playlist.php">Playlist</a>
                    </li>
                    <!-- <li class="nav-item ">
                        <a class="nav-link active text-light" href="podcasts.html">Postcast</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="nghesi.php">Nghệ sĩ</a>
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
      <div class="bg-nen">
            
            <div class="form-item text">
                    <div class="title-h space clear">
                        <h4 class=""style="font-weight:700; letter-spacing:-1.5px;">Abum</h4>
                        <a  class="see-more card-text-infor mauchu" href="">XEM TẤT CẢ</a>
                    </div>
                    <div class="clear"></div>
                    <div class="row ">
                        <div class=" col-md-2 pb-5">
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
                        <div class=" col-md-2 pb-5">
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
                        <div class=" col-md-2 pb-5">
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
                        <div class=" col-md-2 pb-5">
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
                        <div class=" col-md-2 pb-5">
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
                        <div class=" col-md-2 pb-5">
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
                        <div class=" col-md-2 pb-5">
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
                        <div class=" col-md-2 pb-5">
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
                        <div class=" col-md-2 pb-5">
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
                        <div class=" col-md-2 pb-5">
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

<?php require_once('../template/header_main.php'); ?>
<?php 
    include('../config/connect_db.php');
    $sql = "SELECT * FROM `categories`";
    $result = mysqli_query($conn,$sql);
?>
<div class="main">
    <div class="title-banner">
      <img class="img-tk" src="https://t.scdn.co/images/1a8b7a2d15224432824276e086493324">
      <div class="title-small mauchu"style="position: absolute;
    padding:20px;
    top: 150px;
    text-align: center;
    color: white;
    z-index: 8;
    font-weight:700; 
    letter-spacing:-1.5px;">
            <h1 style="font-weight:700;font-size: 10em;">Podcards</h1>
        </div>   
    </div>
    <div class="main-inner-vien">
        
        <div class="form-item text">
            <div class="title-h space clear">
                <h4 class=""style="font-weight:700; letter-spacing:-1.5px;">Podcards hàng đầu</h4>
                <a  class="see-more card-text-infor mauchu" href="">XEM TẤT CẢ</a>
            </div>
            <div class="clear"></div>
            <div class="row ">
                <div class=" col-md-2 ">
                    <div  class="box">
                        <div class="cardd">
                            <a href="">
                                <img src="../img/anh-mang-dep-nhat-24.jpg" class="card-imggg" alt="..."width="auto" height="155px">
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
                <h4 class=""style="font-weight:700; letter-spacing:-1.5px;">Danh mục</h4>
                <a  class="see-more card-text-infor mauchu" href="">XEM TẤT CẢ</a>
            </div>
            <div class="clear"></div>
            <div class="row ">
                <div class=" col-md-2 ">
                    <div  class="box">
                        <div class="cardd">
                            <a href="">
                                <img src="https://t.scdn.co/images/7262179db37c498480ef06bfacb60310.jpeg" class="img-topp" alt="..."width="auto" height="155px">
                                <div class="card-bodyy mauchu">
                                    <p class="title-item text">Postcards hàng đầu</p>
                                    <p class="card-text-infor title-item">Thể loại</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=" col-md-2 ">
                    <div  class="box">
                        <div class="cardd">
                            <a href="">
                                <img src="https://t.scdn.co/images/d951a2d590194722bbfffe2a99ab0e45.jpeg" class="img-topp" alt="..."width="auto" height="155px">
                                <div class="card-bodyy mauchu">
                                    <p class="title-item text">Các câu chuyện</p>
                                    <p class="card-text-infor title-item">Thể loại</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=" col-md-2 ">
                    <div  class="box">
                        <div class="cardd">
                            <a href="">
                                <img src="https://t.scdn.co/images/ddc7cce63cdf49b5a632fb90872929e3.jpeg" class="img-topp" alt="..."width="auto" height="155px">
                                <div class="card-bodyy mauchu">
                                    <p class="title-item text">Tội ác thực sự</p>
                                    <p class="card-text-infor title-item">Thể loại</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=" col-md-2 ">
                    <div  class="box">
                        <div class="cardd">
                            <a href="">
                                <img src="https://t.scdn.co/images/c3d8dfcefd33495ba83756d57a43f15b.jpeg" class="img-topp" alt="..."width="auto" height="155px">
                                <div class="card-bodyy mauchu">
                                    <p class="title-item text">Tin tức & Chính trị</p>
                                    <p class="card-text-infor title-item">Thể loại</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=" col-md-2 ">
                    <div  class="box">
                        <div class="cardd">
                            <a href="">
                                <img src="https://t.scdn.co/images/203ee052f5034e00855de5b0d3ab3554.jpeg" class="img-topp" alt="..."width="auto" height="155px">
                                <div class="card-bodyy mauchu">
                                    <p class="title-item text">Hài kịch</p>
                                    <p class="card-text-infor title-item">Thể loại</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=" col-md-2 ">
                    <div  class="box">
                        <div class="cardd">
                            <a href="">
                                <img src="https://t.scdn.co/images/a5c53e7ac70245f683a27a4e13dff90a.jpeg" class="img-topp" alt="..."width="auto" height="155px">
                                <div class="card-bodyy mauchu">
                                    <p class="title-item text">Thể thao & Giải trí</p>
                                    <p class="card-text-infor title-item">Thể loại</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
    </div>
</div> 
<?php require_once('../template/footer_main.php'); ?>

<?php 
//Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: login.php");
    }
    if(!isset($_SESSION['idnguoidung'])){
        header("location: login.php");
    }
    $id_user = $_SESSION['idnguoidung'];
    // $yeuthich = (isset($_SESSION['yeuthich']))?$_SESSION['yeuthich']:[];
    // echo "<pre>";
    // print_r($yeuthich);
    $count=1;
?>
<style>
    .ql4{
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

        <!-- <li class="nav-item menu-list">
            <a class="nav-link   text-light" aria-current="page" href="playlist.php">Playlist</a>
        </li> -->
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
           
    <div class="main-inner-vien"style="width:83%;">
        <div class="bg-nen">
            <div class="main-bottom-t"style="background-color: #262134;">  
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
                                <h1 style="font-size: 6.0rem;">Bài hát đã thích</h1>
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
                    <th scope="col">NGÀY THÊM</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    
                    include('../../connect_db.php');
                    $sqll = "SELECT * 
                    FROM yeuthich yt, baihat bh, nghesi ns, nguoidung nd
                    WHERE yt.id_user = nd.ma_nguoidung
                    AND yt.id_baihat = bh.ma_bh
                    AND bh.id_nghesi = ns.id_nghesi
                    AND yt.id_user = '$id_user' 
                    ORDER BY yt.id DESC ";
                    $resultt = mysqli_query($conn,$sqll);
                    if(mysqli_num_rows($resultt) > 0){
                        $count=1;
                       while($row1 = mysqli_fetch_assoc($resultt)){
                ?> 
                <tr>
                    <th scope="row">
                        <div class="d-flex align-items-center" id="<?php echo $count; ?> " onClick="play_click(this.id)"> 
                            <p><?php echo $count++;?></p> 
                            &ensp;
                            <img src="../../public/img/baihat/<?php echo $row1['anh_bh'];?>" class="my-img-table" alt="">
                            &ensp;
                            <div class="pt-2">
                                <h6><?php echo $row1['ten_bh'];?></h6>
                                <span class=""><?php echo $row1['ten_nghesi'];?></span>
                            </div>
                        </div>
                    </th>
                    <td class="pt-4"><?php echo $row1['ngaythem'];?></td>
                    <td class="pt-4"><a href="process-del-yeuthich.php?id=<?php echo $row1['id'];?>"class=""><i class="bi bi-x-circle"></i></a></td>
                </tr>
                <?php }} ?>
                </tbody>
            </table>
        </div> 
    </div>
</div> 
<?php
      // Bước 01: Kết nối Database Server
    //   echo $id;
      $conn = mysqli_connect('localhost','root','','spotify');
      if(!$conn){
          die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
      }
    //   Bước 02: Thực hiện truy vấn
      $sql = "SELECT * 
      FROM yeuthich yt, baihat bh, nghesi ns, nguoidung nd
      WHERE yt.id_user = nd.ma_nguoidung
      AND yt.id_baihat = bh.ma_bh
      AND bh.id_nghesi = ns.id_nghesi
      AND yt.id_user = '$id_user' 
      ORDER BY yt.id DESC ";
      $resultbh = mysqli_query($conn,$sql);
    //   echo $result;
    //   $yeuthich;
    //    echo "<pre>";
    //     print_r($yeuthich);
      echo '<script>';
      echo 'var track_list =[] ;';
      echo '</script>';
      while($row = mysqli_fetch_assoc($resultbh)){

      echo '<script>';
      echo 'var track = ' . json_encode($row) . ';';
    //   echo 'console.log(track);';
      echo 'track_list.push(track) ;';
      echo '</script>';
      }
  ?>
<?php include('../../public/template/site/footer_main.php');?>
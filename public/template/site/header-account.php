
<?php 
//Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: login.php");
    }
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tổng quan về tài khoản - Spotify</title>
    <link rel="icon" href="../../../public/img/Logo/imageslogo.png" type="image/png">

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../../../public/css/styleN.css">
</head>

<body>

    <header class="bg">
        <div class="container">
            <div class="space " style="padding-top:20px;">
                <div class=" d-flex">
                    <a class="nav-item-logo" href="../../../site/view/index.php"><img src="../../../public/img/Logo/LogoSpotify.PNG" alt="Logo Spotify"
                            width="170px"></a>
                    <!-- <i class="material-icon fab fa-spotify fs-1 text-light "></i>
                    <p><span class="text-lightt fs-4 mauchu"> Spotify</span></p> -->
                </div>
                <div class="header-right">
                    <ul class="navv roww">
                        <li class="nav-item">
                            <a class="nav-linkk  co-text " href="https://www.spotify.com/vn-vi/premium/">Premium</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-linkk co-text" href="https://support.spotify.com/vn-vi/">Hỗ trợ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-linkk co-text" href="https://www.spotify.com/vn-vi/download/windows/">Tải
                                xuống</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-linkk co-text" >|</a>
                        </li>
                        <li class="nav-item">
                            <div class=" dropdown  ">
                            <?php
                                if(isset($_SESSION['isLoginOK']))
                                {
                                    echo " <a class=' align-items-center d-flex nav-linkk dropdown-toggle' data-bs-toggle='dropdown' href='' role='button' aria-haspopup='true' aria-expanded='false' id='dropdownMenuLink'style='border-radius: 30px;margin-top:0;'><i class='material-icon bi bi-person-circle'></i>".$_SESSION['isLoginOK']."</a>";          
                            ?>
                                <ul class="dropdown-menu dropdown-menu-dark"style="">
                                    <li><a class="dropdown-item " href="../../../site/view/account/overview.php">Tài khoản</a></li>
                                    <li><a class="dropdown-item " href="#">Hồ sơ</a></li>
                                    <li><a class="dropdown-item " href="#">Nâng cấp lên Premium</a></li>
                                    <li><a class="dropdown-item" href="../../../site/controller/controll-logout.php">Đăng xuất</a></li>
                                </ul>
                                
                                <?php   }?>
                            </div>
                        </li>
                        
                    </ul>
                </div>

            </div>
        </div>
    </header>
<body>
    <header></header>
    <main style="background-color: rgb(18,30,61);">
        <div class="container d-flex" >

            <div class="main-acc-left mauchu  " style="width:25%;background-color: #1f1f1f;">
                <div class="text-center border-acc-bottom p-3"><i
                        class="fas  fa-user-circle my-icon-thuvien mx-auto"></i></div>
                <div class="p-3 border-acc-bottom bl-1">
                    <a class="nav-linkk" href="overview.php">
                        <i class="material-icon fas fa-home "></i> Tổng quan
                    </a>
                </div>
                <div class="p-3 border-acc-bottom bl-2"><a class="nav-linkk" href="profile.php"><i
                            class="material-icon fas fa-pen"></i>Sửa hồ sơ</a>
                </div>
                <div class="p-3 border-acc-bottom bl-3"><a class="nav-linkk" href="change-password.php"><i
                            class="material-icon fas fa-lock"></i> Đổi mật
                        khẩu</a></div>
                <div class="p-3 border-acc-bottom bl-4"><a class="nav-linkk" href="notifications.php"><i
                            class="material-icon far fa-bell"></i>Cài đặt thông
                        báo </a> </div>
                <div class="p-3 border-acc-bottom bl-5"><a class="nav-linkk" href="privacy.php">
                    <i class="material-icon fas fa-lock"></i>
                        Cài đặt bảo
                        mật</a></div>

                <div class="p-3 border-acc-bottom bl-6"><a class="nav-linkk" href="apps.php"><i
                            class="material-icon fas fa-puzzle-piece"></i> Ứng
                        dụng</a></div>
            </div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin- Spotify</title>
    <link rel="icon" href="../../../public/img/Logo/imageslogo.png" type="image/png">

    <!-- fonawesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../../public/css/styleN.css">
</head>
<body>
    <div class="roww">
        <div class="col-md-2">
            <div class="banner-left main-add ">
                <div class="logo-banner">
                    <a class="nav-item-logo" href="#"><img src="../../../public/img/Logo/LogoSpotify.PNG" alt="Logo Spotify" width="170px"></a>
                </div>
                <div class="contain-ban">
                    <ul class="nav flex-column">
                        <li class="nav-item roww link-mananger bnn-1 ">
                            <i class="material-icon bi bi-person pt-1 "></i> 
                            <a class="nav-linkk pt-3"href="http://localhost/BaiTapLon-Spotify/admin/view/Users/table-User.php">Người dùng</a>
                        </li>
                        <li class="nav-item roww link-mananger bnn-2 ">
                            <i class="material-icon bi bi-file-earmark-music pt-1 "></i>
                            <a class="nav-linkk pt-3" href="http://localhost/BaiTapLon-Spotify/admin/view/baihat/">Bài hát</a>
                        </li>
                        <li class="nav-item roww link-mananger bnn-3">
                            <i class="material-icon bi bi-headset pt-1 "></i>
                            <a class="nav-linkk pt-3" href="http://localhost/BaiTapLon-Spotify/admin/view/nghesi/">Nghệ sĩ</a>
                        </li>
                        <li class="nav-item roww link-mananger bnn-4">
                            <i class="material-icon bi bi-music-note-list pt-1 "></i>
                            <a class="nav-linkk pt-3"href="http://localhost/BaiTapLon-Spotify/admin/view/category/">Thể loại</a>
                        </li>
                        <li class="nav-item roww link-mananger bnn-5">
                            <i class="material-icon bi bi-journal-album pt-1 "></i>
                            <a class="nav-linkk pt-3" href="http://localhost/BaiTapLon-Spotify/admin/view/album/">Album</a>
                        </li>
                    </ul>
                    <div class="list-playlist">
                        <ul>
                            <!-- <li><a class="nav-linkk"href="">Playlist của tôi #1</a></li>
                            <li><a class="nav-linkk"href="">Playlist của tôi #1</a></li> -->
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-md-10 content-right-ad main-add "style="background-color: white;">
            <div class=" shadow p-4 mb-2 bg-body rounded">
                <div class="space">
                <a class="navbar-brand" href="#">Administration</a>
                    <div class="nav-item dropdown bg-light">
                        <a class="nav-link text-dark dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        
                            <?php
                            if(isset($_SESSION['isLoginadmin']))
                            {
                                echo " <span class=' d-none d-lg-inline text-dark-500 small'>".$_SESSION['isLoginadmin']."</span>";          
                            }?>
                        <img class="img-profile rounded-circle" src="../../../public/img/anh-mang-dep-nhat-24.jpg">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"style="">
                            <li><a class="dropdown-itemm" href="#"> <i class=" material-icon fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile</a></li>
                            <li><a class="dropdown-itemm" href="#"><i class=" material-icon fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings</a></li>
                            <li><a class="dropdown-itemm" href="#"> <i class=" material-icon fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-itemm" href="../../../admin/controller/controllerLogin/controll-logout-admin.php"> <i class=" material-icon fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
           
                    

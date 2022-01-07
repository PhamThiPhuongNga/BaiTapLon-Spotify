<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin- Spotify</title>
    <link rel="icon" href="./public/img/Logo/imageslogo.png" type="image/png">

    
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./public/css/styleN.css">
</head>
<body>
    <div class="roww">
        <div class="col-md-2">
            <div class="banner-left main-add ">
                <div class="logo-banner">
                    <a class="nav-item-logo" href="#"><img src="./public/img/Logo/LogoSpotify.PNG" alt="Logo Spotify" width="170px"></a>
                </div>
                <div class="contain-ban">
                    <ul class="nav flex-column">
                        <li class="nav-item roww link-mananger">
                            <i class="material-icon bi bi-person pt-1"></i> 
                            <a class="nav-linkk pt-3"href="">Người dùng</a>
                        </li>
                        <li class="nav-item roww link-mananger">
                            <i class="material-icon bi bi-file-earmark-music pt-1"></i>
                            <a class="nav-linkk pt-3" href="">Bài hát</a>
                        </li>
                        <li class="nav-item roww link-mananger">
                            <i class="material-icon bi bi-headset pt-1"></i>
                            <a class="nav-linkk" href="#">Nghệ sĩ</a>
                        </li>
                        <li class="nav-item roww link-mananger">
                            <i class="material-icon bi bi-music-note-list pt-1"></i>
                            <a class="nav-linkk pt-3"href="#">Thể loại</a>
                        </li>
                        <li class="nav-item roww link-mananger">
                            <i class="material-icon bi bi-suit-heart pt-1"></i>
                            <a class="nav-linkk pt-3"href="#">Bài hát đã thích</a>
                        </li>
                    </ul>
                    <!-- <div class="list-playlist">
                        <ul>
                            <li><a class="nav-linkk"href="">Playlist của tôi #1</a></li>
                            <li><a class="nav-linkk"href="">Playlist của tôi #1</a></li>
                        </ul>
                    </div> -->
                </div>
                
            </div>
        </div>
        <div class="col-md-10 content-right-ad ">
            <div class=" shadow p-4 mb-5 bg-body rounded">
                <div class="space">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                   
                </div>
            </div>
            <div class="containerrr">
                <!-- <h1 class="position-absolute top-50 start-50 translate-middle">Đăng nhập ngay<a href="./admin/view/login-admin.php">Click Here</a>để đến trang Admin của Spotify</h1> -->
                <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">
                    <div class="text-center">
                        <div class="errorr mx-auto" data-text="404" style=" color: rgb(90 92 105);
    font-size: 7rem;
    position: relative;
    line-height: 1;
    width: 12.5rem;
    margin-top:50px;">404</div>
                        <p class="lead text-secondary-800 mb-5">Page Not Found</p>
                        <p class=" text-danger mb-0">ĐĂNG NHẬP ngay để đến trang Admin của spotify</p>
                        <a href="./admin/view/login-admin.php">&larr; To Page Login</a>
                    </div>
                </div>

            </div>
            
        </div>

    </div>
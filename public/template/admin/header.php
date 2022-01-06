<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nghe đa chiều, sống đa sắc - Spotify</title>
    <link rel="icon" href="../../../public/img/Logo/imageslogo.png" type="image/png">

    
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
        <div class="col-2">
            <div class="banner-left main-add ">
                <div class="logo-banner">
                    <a class="nav-item-logo" href="#"><img src="../../../public/img/Logo/LogoSpotify.PNG" alt="Logo Spotify" width="170px"></a>
                </div>
                <div class="contain-ban">
                    <ul class="nav flex-column">
                        <li class="nav-item roww">
                            <i class="material-icon bi bi-house-door"></i> 
                            <a class="nav-linkk "href="index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item roww">
                            <i class="material-icon bi bi-search"></i>
                            <a class="nav-linkk" href="search.php">Tìm kiếm</a>
                        </li>
                        <li class="nav-item roww">
                            <i class="material-icon bi bi-book"></i>
                            <a class="nav-linkk" href="#">Thư viện</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-linkk"></a>
                        </li>
                        <li class="nav-item roww">
                            <i class="material-icon bi bi-plus-square"></i>
                            <a class="nav-linkk"href="#">Tạo playlist</a>
                        </li>
                        <li class="nav-item roww">
                            <i class="material-icon bi bi-suit-heart"></i>
                            <a class="nav-linkk"href="#">Bài hát đã thích</a>
                        </li>
                    </ul>
                    <div class="list-playlist">
                        <ul>
                            <li><a class="nav-linkk"href="">Playlist của tôi #1</a></li>
                            <li><a class="nav-linkk"href="">Playlist của tôi #1</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-8 content-right-ad">
            <div class=" shadow p-4 mb-5 bg-body rounded">
                <div class="space">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <li class="nav-item dropdown no-arrow show">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                        <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                        </a>
                    <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in show" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </div>
            </div>
            
        </div>
    </div>
    
</body>
</html>
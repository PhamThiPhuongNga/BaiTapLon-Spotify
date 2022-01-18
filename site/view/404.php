<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nghe đa chiều, sống đa sắc - Spotify</title>
    <link rel="icon" href="../../public/img/Logo/imageslogo.png" type="image/png">

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
    <link rel="stylesheet" href="../../public\css\styleN.css">
</head>

<body>

    <header class="bg">
        <div class="container">
            <div class="space " style="padding-top:20px;">
                <div class=" d-flex">
                    <a class="nav-item-logo" href="#"><img src="../../public/img/Logo/LogoSpotify.PNG" alt="Logo Spotify"
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
                            <a class="nav-linkk co-text" href="register.php">Đăng ký</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-linkk co-text" href="login.php">Đăng nhập</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>
<body id="page-top">

    <!-- Page Wrapper -->
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
                        <p class="lead text-gray-800 mb-5">Page Not Found</p>
                        <p class="text-gray-500 mb-0"><?php if(isset($_GET['err'])){
          echo "<h6 style='color:red;'>{$_GET['err']}</h6>";
        } ?></p>
                        <!-- <a href="">&larr; Back to Dashboard</a> -->
                    </div>
                </div>

            </div>
            
        </div>

    </div>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nghe đa chiều, sống đa sắc - Spotify</title>
    <link rel="icon" href="../../public/img/Logo/imageslogo.png" type="image/png">

    
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- icons -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../public/css/styleN.css">
</head>
<body>

    <div class="dropdown">
        <!-- <i class="material-icon bi bi-person-circle"></i> -->
        <?php
            if(isset($_SESSION['isLoginOK']))
            {
                echo " <a class=' align-items-center d-flex nav-linkk dropdown-toggle' data-bs-toggle='dropdown' href='' role='button' aria-expanded='true' id='dropdownMenuLink'style='border-radius: 30px;margin-top:0;'><i class='material-icon bi bi-person-circle'></i>".$_SESSION['isLoginOK']."</a>";          
        ?>
        <ul class="dropdown-menu dropdown-menu-dark"style="">
            <li><a class="dropdown-item itemmm" href="../view/account/overview.php">Tài khoản</a></li>
            <li><a class="dropdown-item itemmm" href="#">Hồ sơ</a></li>
            <li><a class="dropdown-item itemmm" href="#">Nâng cấp lên Premium</a></li>
            <li><a class="dropdown-item itemmm" href="../controller/controll-logout.php">Đăng xuất</a></li>
        </ul>
    
     <?php   }

    ?>
    </div>

</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Activation by Email Verification using PHP - Spotify</title>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
        if($_GET['key'] && $_GET['token']) //Kiểm tra có giá trị trên URL
        {
            // B1. Kết nối DB Server
            require "../../../connect_db.php";
            // B2. Thực hiện truy vấn
            $email = $_GET['key']; //Nó bắt giá trị trên URL
            $token = $_GET['token'];
            $sql   = "SELECT * FROM `nguoidung` WHERE `email_verification_link`='".$token."' and `email`='".$email."'";
            $query = mysqli_query($conn,$sql);
            $d = date('Y-m-d H:i:s'); // Tạo ra 1 biến lưu thời gian
            if (mysqli_num_rows($query) > 0) { //Có bản ghi nào trong CSDL khớp với thông tin này ko
                $row= mysqli_fetch_array($query); //Lấy ra thông tin bản ghi này
                if($row['email_verified_at'] == NULL){ //Kiểm tra lại ANH chưa kích hoạt
                    $sql2 = "UPDATE nguoidung set email_verified_at ='$d', status = 1 WHERE email='$email'";
                    mysqli_query($conn,$sql2);
                    $msg = "Congratulations! Your email has been verified.";
                }else{
                    $msg = "You have already verified your account with us";
                }
            } else {
                $msg = "This email has been not registered with us";
            }
        }else
        {
            $msg = "Danger! Your something goes to wrong.";
        }
    ?>


<body>

    <header class="bg">
        <div class="container">
            <div class="space " style="padding-top:20px;">
                <div class=" d-flex">
                    <a class="nav-item-logo" href="#"><img src="../../../public/img/Logo/LogoSpotify.PNG" alt="Logo Spotify"
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
                            <a class="nav-linkk co-text" href="site/view/register.php">Đăng ký</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-linkk co-text" href="site/view/login.php">Đăng nhập</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>   
    <div class="container mt-3">
        <div class="card">
            <div class="card-header text-center">
                User Account Activation by Email Verification using PHP
            </div>
            <div class="card-body">
                <p>
                    <?php echo $msg; ?>
                </p>
                <a href="../../view/login.php" class="">Click here để đăng nhập</a>
            </div>
        </div>
    </div>
</body>

</html>
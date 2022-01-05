
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tổng quan về tài khoản - Spotify</title>
    <link rel="icon" href="public/img/Logo/imageslogo.png" type="image/png">

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
                            <div class=" dropdown roww ">
                            <i class="material-icon bi bi-person-circle"></i>
                            <?php
                                if(isset($_SESSION['isLoginOK']))
                                {
                                    echo " <a class='nav-linkk dropdown-toggle' data-bs-toggle='dropdown' href='' role='button' aria-expanded='false'>".$_SESSION['isLoginOK']."</a>";          
                            ?>
                            <ul class="dropdown-menu mauchu"style="">
                                <li><a class="dropdown-item" href="#">Tài khoản</a></li>
                                <li><a class="dropdown-item" href="#">Hồ sơ</a></li>
                                <li><a class="dropdown-item" href="#">Nâng cấp lên Premium</a></li>
                                <li><a class="dropdown-item" href="../controller/controll-logout.php">Đăng xuất</a></li>
                            </ul>
                        
                            <?php   }

                            ?>
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
                <div class="p-3 border-acc-bottom"><a class="nav-linkk" href="overview.html"><i
                            class="material-icon fas fa-home "></i> Tổng
                        quan</a></div>
                <div class="p-3 border-acc-bottom"><a class="nav-linkk" href="profile.html"><i
                            class="material-icon fas fa-pen"></i>Sửa hồ sơ</a>
                </div>
                <div class="p-3 border-acc-bottom"><a class="nav-linkk" href="change-password.html"><i
                            class="material-icon fas fa-lock"></i> Đổi mật
                        khẩu</a></div>
                <div class="p-3 border-acc-bottom"><a class="nav-linkk" href="notifications.html"><i
                            class="material-icon far fa-bell"></i>Cài đặt thông
                        báo </a> </div>
                <div class="p-3 border-acc-bottom"><a class="nav-linkk" href="privacy.html">
                    <i class="material-icon fas fa-lock"></i>
                        Cài đặt bảo
                        mật</a></div>

                <div class="p-3 border-acc-bottom"><a class="nav-linkk" href="apps.html"><i
                            class="material-icon fas fa-puzzle-piece"></i> Ứng
                        dụng</a></div>
            </div>
            <div class="main-acc-right p-5"style="width:75%;background-color: white;">
                <h1 class="font-weight-bold ng-binding"style=" font-family:spotify-circular, Helvetica, Arial, sans-serif;
    font-size: 48px;">Chỉnh sửa hồ sơ</h1>
                <form action=""class="">
                    <div class="form-group">
                        <label class="biNheR" for="formGroupExampleInput">Email</label>
                        <input type="text" class="hUAscM" id="formGroupExampleInput" placeholder="abc@gmail.com">
                    </div>
                    <div class="form-group mt-3">
                        <label class="biNheR" for="selectSex">Giới tính</label>
                        <select id="selectSex" class=" hUAscM">
                            <option>Nam</option>
                            <option>Nữ</option>
                        </select>
                    </div>
                    <div class="form-row mt-3">
                        <label class="biNheR" for="birthday">Ngày sinh</label>
                        <input type="date" class=" hUAscM" id="birthday" name="birthday">
                    </div>
                    <div class="form-group mt-3">
                        <label class="biNheR" for="selectSex">Quốc gia hoặc khu vực</label>
                        <select id="selectSex" class="hUAscM">
                            <option>Việt Nam</option>
                        </select>
                    </div>
                    <button class="btn btn-success mt-3" type="submit">Lưu hồ sơ</button>
                </form>
            </div>


        </div>

    </main>
    <footer class="bg-footer">
        <div class="content-fo">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class=" d-flex">
                            <a class="nav-item-logo" href="#"><img src="../../../public/img/Logo/LogoSpotify.PNG" alt="Logo Spotify"
                                    width="150px"></a>
                            <!-- <i class="material-icon fab fa-spotify fs-1 text-light "></i>
                            <p><span class="text-lightt fs-4 mauchu"> Spotify</span></p> -->
                        </div>
                    </div>
                    <div class="col-md-2">
                        <h6 class="text-lightt">CÔNG TY</h6>
                        <nav class="navv flex-column">
                            <a class="nav-linkk co-text " href="#">Giới thiệu</a>
                            <a class="nav-linkk co-text" href="#">Việc làm</a>
                            <a class="nav-linkk co-text" href="#">For the Record</a>
                        </nav>
                    </div>
                    <div class="col-md-2">
                        <h6 class="text-lightt">Cộng đồng</h6>
                        <nav class="navv flex-column">
                            <a class="nav-linkk co-text" href="#">Dành cho Nghệ sĩ</a>
                            <a class="nav-linkk co-text" href="#">Nhà phát triển</a>
                            <a class="nav-linkk co-text" href="#">Quảng cáo</a>
                            <a class="nav-linkk co-text">Nhà đầu tư</a>
                            <a class="nav-linkk co-text">Nhà cung cấp</a>
                        </nav>
                    </div>
                    <div class="col-md-2">
                        <h6 class="text-lightt">Liên kết hữu ích</h6>
                        <nav class="navv flex-column">
                            <a class="nav-linkk co-text" href="#">Hỗ trợ</a>
                            <a class="nav-linkk co-text" href="#">Trình phát Web</a>
                            <a class="nav-linkk co-text" href="#">Ứng dụng Di động Miễn phí</a>

                        </nav>
                    </div>
                    <div class="col-md-2">
                        <div class="social-icon">
                            <div class="roww">
                                <li class="svelte-1ad7r0v kc-ic">
                                    <a href="https://instagram.com/spotify" title="Instagram"
                                        class=" sty-icon text-co-link">
                                        <span aria-label="Instagram" class="bi bi-instagram mh-ft "></span>
                                    </a>
                                </li>
                                <li class="svelte-1ad7r0v kc-ic">
                                    <a href="https://twitter.com/spotify" title="Twitter"
                                        class="sty-icon text-co-link ">
                                        <span role="img" aria-label="Twitter" class="bi bi-twitter"></span>
                                    </a>
                                </li>
                                <li class="svelte-1ad7r0v">
                                    <a href="https://www.facebook.com/Spotify" title="Facebook"
                                        class="sty-icon text-co-link  ">
                                        <span role="img" aria-label="Facebook" class="bi bi-facebook "></span>
                                    </a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="language">
                    <div class="lang-right">
                        <div class="roww font">
                            <i class="bi bi-globe"></i>
                            <span>Việt Nam (Tiếng việt)</span>
                        </div>
                    </div>
                </div>
                <div class="bottom-links">
                    <div class="space">
                        <div class="navv roww" style="border-left:0;">
                            <li class="nav-item">
                                <a class="nav-linkk font text-co-link" href="https://www.spotify.com/vn-vi/legal/">Pháp
                                    lý</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-linkk font text-co-link"
                                    href="https://www.spotify.com/vn-vi/privacy">Trung tâm bảo mật</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-linkk font text-co-link"
                                    href="https://www.spotify.com/vn-vi/legal/privacy-policy/">Chính sách Quyền riêng
                                    tư</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-linkk font text-co-link"
                                    href="https://www.spotify.com/vn-vi/legal/cookies-policy/">Cookie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-linkk font text-co-link"
                                    href="https://www.spotify.com/vn-vi/legal/privacy-policy/#s3">Giới thiệu Quảng
                                    cáo</a>
                            </li>
                        </div>
                        <span class="font" style="padding:10px;">© 2021 Spotify AB</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify-Playlist của bạn</title>
    <!-- cdn boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- cdn icon boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- cdn gg font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="warmp">
        <header class="warmp-header">
            <div class="banner-left text-center ">
                <div class="logo-banner d-flex">
                    <!-- <a class="nav-item-logo" href="#"><img src="../img/LogoSpotify.PNG" alt="Logo Spotify" width="170px"></a> -->
                    <i class="fab fa-spotify fs-1 text-light "></i>
                    <p><span class="text-light fs-4"> Spotify</span></p>
                </div>
                <div class="contain-ban">
                    <ul class="nav flex-column nav-bottom">
                        <li class="nav-item roww">
                            <i class="material-icon bi bi-house-door"></i>
                            <a class="nav-linkk " href="../index/home.php">Trang chủ</a>
                        </li>
                        <li class="nav-item roww">
                            <i class="material-icon bi bi-search"></i>
                            <a class="nav-linkk" href="../index/search.php">Tìm kiếm</a>
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
                            <a class="nav-linkk" href="#">Tạo playlist</a>
                        </li>
                        <li class="nav-item roww">
                            <i class="material-icon bi bi-suit-heart"></i>
                            <a class="nav-linkk" href="#">Bài hát đã thích</a>
                        </li>
                    </ul>
                    <div class="list-playlist ">
                        <ul style="padding-left: 0px ;">
                            <li class="list-unstyled "><a class="nav-linkk " href="">Playlist của tôi #1</a></li>
                            <li class="list-unstyled"><a class="nav-linkk" href="">Playlist của tôi #1</a></li>
                        </ul>
                    </div>
                </div>
                <div class="download-app text-light ">
                    <i class="far fa-arrow-alt-circle-down"></i> Cài đặt ứng dụng
                </div>
            </div>
        </header>
        <main class="bg-dark my-main">
            <div class="main-top p-3 navbar " style="background-color: #515151;">

                <ul class="nav nav-pills d-flex align-items-center ">
                    <i class="fas fa-chevron-circle-left fs-3 ml-5 myIconArrow"><a href="#" target="_blank"
                            rel="noopener noreferrer"></a></i>
                    <i class="fas fa-chevron-circle-right fs-3 pl-5 myIconArrow"></i>

                </ul>

                <!-- <button class="justify-content-end ">
                NÂNG CẤP 
            </button> -->
                <div class="dropdown myDropdown">
                    <!-- <button > -->
                    <a class="btn btn-dark dropdown-toggle d-flex align-items-center" href="#" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-4 ">&nbsp;</i> Duy Nguyen
                    </a>

                    <ul class="dropdown-menu bg-dark " aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item text-light" href="#">Tài khoản </a></li>
                        <li><a class="dropdown-item text-light" href="#">Hồ sơ </a></li>
                        <li><a class="dropdown-item text-light" href="#">Nâng cấp lên Premium </a></li>
                        <li><a class="dropdown-item text-light" href="#">Đăng xuất </a></li>
                    </ul>
                    <!-- </button> -->
                </div>
            </div>
            <!-- end main-top -->
            <div class="main-bottom text-light bg-dark">
                <div class="main-bottom-t">
                    <div class="container  ">
                        <div class="row ">
                            <div class="col-3 "><button class="btn-playlist align-items-center bg-dark">
                                    <i class="material-icons my-icon-thuvien text-secondary">add_a_photo</i>
                                    <i class="bi bi-music-note-beamed my-icon-thuvien text-secondary"></i>
                                </button></div>
                            <div class="col-9 p-5">
                                <p>PLAYLIST</p>
                                <a href="" class="text-decoration-none link-light ">
                                    <h1 style="font-size: 6.0rem;">Playlist của tôi #1</h1>
                                </a>
                                <p><a href="" class="text-decoration-none link-light a-cogach"> Duy Nguyễn</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-bottom-c">
                    <a href=""><i class="fas fa-ellipsis-h fs-4 p-3 text-muted my-icon-fa-ellipsis-h"></i></a>
                </div>
                <div class="main-bottom-b ">
                    <h4>Hãy cùng tìm nội dung cho danh sách phát của bạn</h4>
                    <div style="display: flex;">
                        <div class="form_search-nd  p-2">

                            <i class="fa fa-search"></i>
                            <input type="text"
                                style=" border: 1px; background-color: #2D2D2D;width: 400px;color: aliceblue;"
                                placeholder="Tìm bài hát và tập podcast">
                        </div>
                        <a href=""><i class="fas fa-times text-secondary fs-2 my-fa-times"></i></a>
                    </div>
                </div>
            </div>
            <!-- end main-bottom -->
        </main>
        <footer class="footer-main mauchu">
            <div class="form-footer space">
                <div class="infor-song">
                    <div class="space " style="margin-right: 10px;padding:20px;">
                        <img src="../img/play.jpg" alt="" width="60" height="60">
                        <div class="inforn-name khoangc">
                            <h6>Easy On My</h6>
                            <p>Adele</p>
                        </div>
                        <p title="Lưu vào thư viện" class="khoangc"><i class="bi bi-suit-heart"></i></p>
                        <p class="khoangc"><i class=" bi bi-aspect-ratio"></i></p>
                    </div>
                </div>
                <div class="thanhnhac">
                    <div class="player">
                        <div class="control mauchu">
                            <div class="btn btn-repeat">
                                <i title="Bật trộn bài" class="bi bi-shuffle"></i>
                            </div>
                            <div class="btn btn-prev">
                                <i title="Trước" class="fas fa-step-backward"></i>
                            </div>
                            <div class="btn btn-toggle-play">
                                <i title="Dừng" class="fas fa-pause icon-pause"></i>
                                <i title="Phát" class="fas fa-play icon-play"></i>
                            </div>
                            <div class="btn btn-next">
                                <i title="Tiếp" class="fas fa-step-forward"></i>
                            </div>
                            <div class="btn btn-random">
                                <i title="Kích hoạt chế độ lặp lại" class="bi bi-arrow-repeat"></i>
                            </div>
                        </div>
                    </div>
                    <div class="space">
                        <span>0:00</span>&nbsp;&nbsp;
                        <span><input id="progresss" class="progresss" type="range" value="0" step="1" min="0"
                                max="100"></span>
                        <audio id="audio" src=""></audio>
                        &nbsp;&nbsp;<span>0:00</span>
                    </div>
                </div>
                <div class="infor-more space">
                    <div class="Lyrics khoangc">
                        <i title="Lyrics" class="i bi-mic"></i>
                    </div>
                    <div class="waiting-list khoangc">
                        <i title="Danh sách chờ" class="bi bi-music-note-list"></i>
                    </div>
                    <div class="connect-equi khoangc">
                        <i title="Kết nối với một thiết bị" class="bi bi-sliders"></i>
                    </div>
                    <div class="adjusted khoangc">
                        <i title="Tắt tiếng" class="bi bi-volume-up"><input id="volume" class="volume" type="range"
                                value="0" step="1" min="0" max="100"></i>
                        <i title="Bật tiếng" class=" bi bi-volume-mute"></i>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
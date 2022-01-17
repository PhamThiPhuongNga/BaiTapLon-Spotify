
    <?php
      // Bước 01: Kết nối Database Server
      $conn = mysqli_connect('localhost','root','','spotify');
      if(!$conn){
          die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
      }
      // Bước 02: Thực hiện truy vấn
      $sql = "SELECT * FROM baihat";
      $result = mysqli_query($conn,$sql);
      echo '<script>';
      echo 'var track_list =[] ;';
      echo '</script>';
      while($row = mysqli_fetch_assoc($result)){

      echo '<script>';
      echo 'var track = ' . json_encode($row) . ';';
    //   echo 'console.log(track);';
      echo 'track_list.push(track) ;';
      echo '</script>';
      }
  ?>
  <script>
      console.log(track_list);
  </script>
    <footer class="footer-main mauchu">
        <div class="form-footer space">
            <div class="infor-song">
                <div class="space " style="margin-right: 10px;padding:20px;">
                    <img src="../../../public/img/baihat/" alt="" width="60" height="60" class="track-art">
                    <div class="inforn-name khoangc">
                        <h6 class="track-name">Easy On My</h6>
                        <p class="track-artist">Adele</p>
                    </div>
                    <p title="Lưu vào thư viện" class="khoangc"><i class="bi bi-suit-heart"></i></p>
                    <p class="khoangc"><i class=" bi bi-aspect-ratio"></i></p>
                </div>
            </div>
            <div class="thanhnhac">
                <div class="player pt-1">
                    <div class="control mauchu">
                        <div class="btn btn-repeat">
                            <i title="Bật trộn bài"class="bi bi-shuffle"></i>
                        </div>
                        <div class="btn btn-prev prev-track" onclick="prevTrack()">
                            <i title="Trước" class="fas fa-step-backward"></i>
                        </div>
                        <div class="btn btn-toggle-play playpause-track" onclick="playpauseTrack()">
                            <!-- <i title="Dừng"  class="fas fa-pause icon-pause"></i> -->
                            <!-- <i title="Phát" class="fas fa-play icon-play"></i> -->
                            <i class="fa fa-play-circle fa-3x"></i>
                        </div>
                        <div class="btn btn-next next-track" onclick="nextTrack()">
                            <i title="Tiếp" class="fas fa-step-forward"></i>
                        </div>
                        <div class="btn btn-random">
                            <i title="Kích hoạt chế độ lặp lại" class="bi bi-arrow-repeat"></i>
                        </div>
                    </div>
                </div>
                <div class="space mt-1">
                    <div class="current-time">00:00</div>
                    &nbsp;&nbsp;
                    <span class="my-span-progress my-span-progress-search"><input id="progresss" class="progresss seek_slider" type="range" value="0"  min="1" max="100" onchange="seekTo()"></span>
                    <audio id="audio" src=""></audio>
                    &nbsp;&nbsp;
                    <div class="total-duration">00:00</div>
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
                    <i title="Tắt tiếng" class="bi bi-volume-up">
                        <input id="volume" class="volume volume_slider" type="range" value="99" min="1" max="100" onchange="setVolume()"></i>
                    <i title="Bật tiếng"class=" bi bi-volume-mute"></i>
                </div>
            </div>
        </div>
    </footer> 
    <script src="../../public/js/audio.js"></script>
</body>
</html>
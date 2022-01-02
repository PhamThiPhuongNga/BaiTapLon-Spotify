<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - Spotify</title>
    <link rel="icon" href="../../public/img/Logo/imageslogo.png" type="image/png">

    <link rel="stylesheet" href="../../public/css/styleN.css?v=8">
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>
<body style="font-family: spotify-circular, Helvetica, Arial, sans-serif;">
    <div class="">
        <div class="head ">
            <a data-testid="spotify-logo" class="spotify-logo" tabindex="-1" title="Spotify" ng-href="/vi-VN" href="/vi-VN"><img src="../../public/img/Logo/Logolg.PNG" width="200px"></a>
        </div>
    </div>
    <div class="container-fluid">
  <div class="content" >
   <div  class="ng-scope">
      <div class="row text-center mt-0">
        <h2 class="ng-binding">Để tiếp tục, hãy đăng nhập vào Spotify.</h2>
      </div>
      <div class="row cach">
        <div class="col-xs-12 ">
          <a class="btnn btn-block btn-facebook  " href=""><i class="bi bi-facebook"></i> &nbsp;&nbsp;Tiếp tục với Facebook</a>
        </div>
      </div>
      <div class="row cach">
        <div class="col-xs-12 ">
        <a  class="btnn btn-block btn-apple  " href=""><i class="bi bi-apple"></i> &nbsp;&nbsp;Tiếp tục với Apple</a>
        </div>
      </div>
      <div class="row cach">
        <div class="col-xs-12 ">
        <a  class="btnn btn-block btn-default " href=""><img
                src="https://img.icons8.com/color/30/000000/google-logo.png" width="20px"
              /> &nbsp;&nbsp;Tiếp tục bằng Google</a>
        </div>
      </div>
      <div class=" cach row " >
        <div class="col-xs-12">
        <a  class="btnn btn-block  btn-default " href="">Tiếp tục với số điện thoại</a>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="divider">
            <strong class="divider-title ">hoặc</strong>
          </div>
        </div>
      </div>
    </div>

    <form name="accounts" method="post"  class="" action="../controller/process-login.php">

      <div class="row" >
        <div class="col-xs-12">
          <label class="control-label">
            Địa chỉ email hoặc tên người dùng
          </label>
          <input  type="text" class="form-control" name="username" id="login-username" placeholder="Địa chỉ email hoặc tên người dùng" >
        
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <label class="control-label ">
            Mật khẩu
          </label>
          <input type="password" class="form-control " name ="password" id="login-password" placeholder="Mật khẩu" >
          
        </div>
      </div>
      <?php 
        if(isset($_GET['error'])){
          echo "<h6 style='color:red;'>{$_GET['error']}</h6>";
        }
      ?>
      <div class="row password-reset">
        <div class="col-xs-12 ">
          <p>
            <a id="reset-password-link" href="">Quên mật khẩu của bạn?</a>
          </p>
        </div>
      </div>

      <div class="row row-submit">
        <div class="col-xs-12 col-sm-6">
          <div class="checkbox">
            <label >
              <input  type="checkbox" name="remember"  id="login-remember" >
              Hãy nhớ tôi
              <span class="control-indicator"></span>
            </label>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <button class="btnn btn-block btn-green " type="submit" name="btnlogin" id="login-button" >Đăng nhập</button>
        </div>
      </div>
    </form>

    <div id="sign-up-section">
      <div class="row">
        <div class="col-xs-12">
          <div class="ng-isolate-scope">
            <div class="ng-scope">
              <div class="row">
                <div class="col-xs-12">
                    <div class="divider">
                    </div>
                </div>
              </div>
              <div class="row text-center mt-0">
                  <h2 class="ng-binding">Bạn chưa có tài khoản?</h2>
              </div>
              <div>
                <div class="row">
                    <div class="col-xs-12">
                        <a id="sign-up-link" href="register.php" class="btnn btn-block btn-default ">Đăng ký Spotify</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</body>
</html>
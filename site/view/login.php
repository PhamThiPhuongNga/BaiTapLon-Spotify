<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nghe đa chiều, sống đa sắc - Spotify</title>
    <link rel="icon" href="../../public/img/Logo/imageslogo.png" type="image/png">

    <link rel="stylesheet" href="../../public/css/styleN.css">
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>
<body style="font-family: spotify-circular, Helvetica, Arial, sans-serif;">
    <!-- <div class="nme-logo ">
        <div class="col-xs-12 cent d-flex"style="padding-left:600px;">
             <a class="nav-item-logo" href="#"><img src="../img/LogoSpotify.PNG" alt="Logo Spotify" width="170px"></a> 
            <i class="material-icon fab fa-spotify fs-1 maumau "></i>
            <p><span class=" fs-2 maumau "style="font-weight:700;"> Spotify</span></p>
        </div> 
    </div> -->
    <div class="">
        <div class="head ">
            <a data-testid="spotify-logo" class="spotify-logo" tabindex="-1" title="Spotify" ng-href="/vi-VN" href="/vi-VN"><img src="../../public/img/Logo/Logolg.PNG" width="200px"></a>
        </div>
    </div>
     <!--<div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="container-fluid">
                    <div class="conttent">
                        <div class="row">
                            <div class="ng-scope">
                                <div class="maumau " >
                                Để tiếp tục, hãy đăng nhập vào Spotify.
                                </div>
                                <div class="row">
                                    <div class="col-xs-12" >
                                    <div class="btnn btn-block btn-defaul">
                                        <a href=""class="btnn btn-block ">
                                            <div class="roww">
                                            <i class="bi bi-facebook inhoa"></i>
                                            Tiếp tục với Facebook
                                            </div>
                                        </a>
                                    </div>
                                    </div>
                                    <div class="col-xs-12 btnn btn-block btn-defaul">
                                        <a href="">
                                            <div class="roww">
                                            <i class="bi bi-apple inhoa"></i>
                                            Tiếp tục với Apple
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-12">
                                        <a href="">
                                            <div class="roww">
                                                <i class="bi bi-google"></i>
                                                Tiếp tục với Google
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-12">
                                        <a href="" class="inhoa ">
                                            Tiếp tục với Số điện thoại
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div> 
        
    </div>-->
    <div class="container-fluid">
  <div class="content" >
   <div  class="ng-scope">
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
        <a  class="btnn btn-block btn-default " href=""><i class="bi bi-google"></i> &nbsp;&nbsp;Tiếp tục bằng Google</a>
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
            <strong class="divider-title ng-binding">hoặc</strong>
          </div>
        </div>
      </div>
    </div>

    <form name="accounts" method="post"  class="ng-pristine ng-valid-sp-disallow-chars ng-invalid ng-invalid-required" abineguid="FB905980F4FD4FCD835A3B63A0BD19E9">

      <div class="row" >
        <div class="col-xs-12">
          <label for="login-username" class="control-label ng-binding">
            Địa chỉ email hoặc tên người dùng
          </label>
          <input ng-model="form.username" type="text" class="form-control input-with-feedback ng-pristine ng-valid-sp-disallow-chars ng-empty ng-invalid ng-invalid-required ng-touched" name="username" id="login-username" placeholder="Địa chỉ email hoặc tên người dùng" required="" sp-disallow-chars=":&amp;'`´&quot;" sp-disallow-chars-model="usernameDisallowedChars" autocapitalize="off" autocomplete="off" autocorrect="off" autofocus="autofocus" ng-trim="false" ng-change="onInputChange()">
          <!-- ngIf: accounts.username.$dirty && accounts.username.$invalid -->
        <div id="pwm-inline-icon-87520" class="pwm-field-icon" style="position: absolute !important; width: 18px !important; height: 18px !important; min-height: 0px !important; min-width: 0px !important; z-index: 2147483645 !important; box-shadow: none !important; box-sizing: content-box !important; background: none !important; border: none !important; padding: 0px !important; cursor: pointer !important; outline: none !important; margin-top: -29px; margin-left: 428px;"><svg style="display: inline-block !important; width: 16px !important; height: 16px !important; fill: rgb(230, 0, 23) !important; margin-top: 0.5px !important; position: absolute !important; top: 0px !important; left: 0px !important;" viewBox="0 0 64 64"><g><path d="m20,28.12a33.78,33.78 0 0 1 13.36,2.74a22.18,22.18 0 0 1 0.64,5.32c0,9.43 -5.66,17.81 -14,20.94c-8.34,-3.13 -14,-11.51 -14,-20.94a22.2,22.2 0 0 1 0.64,-5.32a33.78,33.78 0 0 1 13.36,-2.74m0,-28.12c-8.82,0 -14,7.36 -14,16.41l0,5.16c2,-1.2 2,-1.49 5,-2.08l0,-3.08c0,-6.21 2.9,-11.41 8.81,-11.41l0.19,0c6.6,0 9,4.77 9,11.41l0,3.08c3,0.58 3,0.88 5,2.08l0,-5.16c0,-9 -5.18,-16.41 -14,-16.41l0,0zm0,22c-6.39,0 -12.77,0.67 -18.47,4a31.6,31.6 0 0 0 -1.53,9.74c0,13.64 8.52,25 20,28.26c11.48,-3.27 20,-14.63 20,-28.26a31.66,31.66 0 0 0 -1.54,-9.77c-5.69,-3.3 -12.08,-4 -18.47,-4l0,0l0.01,0.03z"></path><path d="m21.23,39.5a2.81,2.81 0 0 0 1.77,-2.59a2.94,2.94 0 0 0 -3,-2.93a3,3 0 0 0 -3,3a2.66,2.66 0 0 0 1.77,2.48l-1.77,4.54l6,0l-1.77,-4.5z"></path></g></svg><span id="pwm-inline-icon-badge-87520" style="position: absolute !important; inset: auto auto 0px 7px !important; box-sizing: content-box !important; font-family: monospace !important; font-size: 9px !important; border-radius: 2px !important; color: white !important; background: rgb(112, 185, 52) !important; border: 0.5px solid white !important; width: auto !important; height: 10px !important; min-width: 10px !important; min-height: 0px !important; display: flex !important; align-items: center !important; justify-content: center !important; pointer-events: none !important;">0</span></div></div>
      </div>

      <div class="row" ng-class="{'has-error': (accounts.password.$dirty &amp;&amp; accounts.password.$invalid) || invalidCredentials}">
        <div class="col-xs-12">
          <label for="login-password" class="control-label ng-binding">
            Mật khẩu
          </label>
          <input ng-model="form.password" type="password" class="form-control input-with-feedback ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" name="password" id="login-password" placeholder="Mật khẩu" required="" autocomplete="off" ng-trim="false" ng-change="onInputChange()">
          <!-- ngIf: accounts.password.$dirty && accounts.password.$invalid -->
        <div id="pwm-inline-icon-45006" class="pwm-field-icon" style="position: absolute !important; width: 18px !important; height: 18px !important; min-height: 0px !important; min-width: 0px !important; z-index: 2147483645 !important; box-shadow: none !important; box-sizing: content-box !important; background: none !important; border: none !important; padding: 0px !important; cursor: pointer !important; outline: none !important; margin-top: -29px; margin-left: 428px;"><svg style="display: inline-block !important; width: 16px !important; height: 16px !important; fill: rgb(230, 0, 23) !important; margin-top: 0.5px !important; position: absolute !important; top: 0px !important; left: 0px !important;" viewBox="0 0 64 64"><g><path d="m20,28.12a33.78,33.78 0 0 1 13.36,2.74a22.18,22.18 0 0 1 0.64,5.32c0,9.43 -5.66,17.81 -14,20.94c-8.34,-3.13 -14,-11.51 -14,-20.94a22.2,22.2 0 0 1 0.64,-5.32a33.78,33.78 0 0 1 13.36,-2.74m0,-28.12c-8.82,0 -14,7.36 -14,16.41l0,5.16c2,-1.2 2,-1.49 5,-2.08l0,-3.08c0,-6.21 2.9,-11.41 8.81,-11.41l0.19,0c6.6,0 9,4.77 9,11.41l0,3.08c3,0.58 3,0.88 5,2.08l0,-5.16c0,-9 -5.18,-16.41 -14,-16.41l0,0zm0,22c-6.39,0 -12.77,0.67 -18.47,4a31.6,31.6 0 0 0 -1.53,9.74c0,13.64 8.52,25 20,28.26c11.48,-3.27 20,-14.63 20,-28.26a31.66,31.66 0 0 0 -1.54,-9.77c-5.69,-3.3 -12.08,-4 -18.47,-4l0,0l0.01,0.03z"></path><path d="m21.23,39.5a2.81,2.81 0 0 0 1.77,-2.59a2.94,2.94 0 0 0 -3,-2.93a3,3 0 0 0 -3,3a2.66,2.66 0 0 0 1.77,2.48l-1.77,4.54l6,0l-1.77,-4.5z"></path></g></svg><span id="pwm-inline-icon-badge-45006" style="position: absolute !important; inset: auto auto 0px 7px !important; box-sizing: content-box !important; font-family: monospace !important; font-size: 9px !important; border-radius: 2px !important; color: white !important; background: rgb(112, 185, 52) !important; border: 0.5px solid white !important; width: auto !important; height: 10px !important; min-width: 10px !important; min-height: 0px !important; display: flex !important; align-items: center !important; justify-content: center !important; pointer-events: none !important;">0</span></div></div>
      </div>

      <!-- ngIf: showAutomationKey -->

          <div class="row password-reset">
            <div class="col-xs-12">
              <p>
                <a id="reset-password-link" data-testid="reset-password-link" ng-href="https://www.spotify.com/password-reset/" analytics-on="click" analytics-category="Login View" analytics-event="Forgot Button" analytics-label="" class="ng-binding" href="https://www.spotify.com/password-reset/">Quên mật khẩu của bạn?</a>
              </p>
            </div>
          </div>

      <div class="row row-submit">
        <div class="col-xs-12 col-sm-6">
          <div class="checkbox">
            <label class="ng-binding">
              <input ng-model="form.remember" type="checkbox" name="remember" analytics-on="checked" analytics-category="Login View" id="login-remember" class="ng-pristine ng-untouched ng-valid ng-not-empty">
              Hãy nhớ tôi
              <span class="control-indicator"></span>
            </label>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <button class="btn btn-block btn-green ng-binding" id="login-button" ng-click="onLoginClick($event)">Đăng nhập</button>
        </div>
      </div>
    </form>

    <div id="sign-up-section">
      <div class="row">
        <div class="col-xs-12">
          <signup class="ng-isolate-scope"><!-- ngIf: showSignup --><div ng-if="showSignup" class="ng-scope">
    <!-- ngIf: showButton --><div ng-if="showButton" class="ng-scope">
        <div class="row">
            <div class="col-xs-12">
                <div class="divider">
                    <!-- ngIf: showOrLabel -->
                </div>
            </div>
        </div>
        <div class="row text-center mt-0">
            <h2 class="h4 ng-binding">Bạn chưa có tài khoản?</h2>
        </div>
        <div>
            <div class="row">
                <div class="col-xs-12">
                    <a id="sign-up-link" data-testid="signup-btn-link" ng-click="onSignupClick()" ng-href="/vi-VN/login/signup?continue=https%3A%2F%2Faccounts.spotify.com%2Fvi-VN%2Fstatus" class="btn btn-block btn-default ng-binding" role="button" href="/vi-VN/login/signup?continue=https%3A%2F%2Faccounts.spotify.com%2Fvi-VN%2Fstatus">Đăng ký Spotify</a>
                </div>
            </div>
        </div>
    </div><!-- end ngIf: showButton -->

    <!-- ngIf: showAppStoreBanner -->
</div><!-- end ngIf: showSignup -->
</signup>
        </div>
      </div>
    </div>

  </div><!-- .content -->
</div>
</body>
</html>
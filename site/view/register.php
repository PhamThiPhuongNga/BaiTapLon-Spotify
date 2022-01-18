
<?php
$err=[];
if(isset($_POST['btnRegister'])) //Kiểm tra Người dùng có nhấp vào nút SUBMIT chưa và đã nhập dữ liệu Email chưa
{
    $email  = $_POST['email'];
    $confemail  = $_POST['confirm-email'];
    $pass   = $_POST['password'];
    $name   = $_POST['displayname'];
    $ngay   = $_POST['day'];
    $thang   = $_POST['month'];
    $nam   = $_POST['year'];
    $gioitinh =$_POST['gender'];
    $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";  
    if(empty($email) || !preg_match($regex, $email)){
        $err['email'] = 'x Vui lòng kiểm tra lại email';
    }
    if($confemail != $email ){
        $err['confirm-email'] = ' x Email nhập lại chưa đúng';
    }
    if(empty($pass) || $pass < 6 ){
        $err['password'] = 'x Vui lòng kiểm tra lại mật khẩu';
    } 
    if(empty($name)){
        $err['displayname'] = ' x Vui lòng kiểm tra lại tên';
    }
    if(empty($ngay) ){
        $err['day'] = ' x Bạn chưa nhập ngày sinh';
    }
    if(empty($thang) ){
        $err['month'] = ' x Bạn chưa nhập tháng sinh';
    }
    if(empty($nam) ){
        $err['year'] = ' x Bạn chưa nhập năm sinh';
    }
    if($gioitinh == false ){
        $err['gender'] = ' x Bạn chưa chọn giơi tính';
    }
    if(empty($err)){
        require "../../connect_db.php";
        $result = mysqli_query($conn,"SELECT * FROM nguoidung WHERE email='$email'");
        
        if(mysqli_num_rows($result) >0 )
        {
            $err['emaill'] = 'x Email đã tồn tại';
        }
        else{
                $pass_hash   = password_hash($pass, PASSWORD_DEFAULT);
                $token = md5($_POST['email']).rand(10,9999); //Sử dụng giải thuật md5 để sinh ra chuỗi ngẫu nhiên được băm
                $sql  = "INSERT INTO nguoidung(ten_nguoidung,ngay,thang,nam, email,matkhau,gioitinh ,quoctich,email_verification_link ) VALUES('$name','$ngay','$thang','$nam', '$email','$pass_hash','$gioitinh','Việt Nam','$token')";
                // Ra lệnh lưu vào CSDL
                mysqli_query($conn, $sql);
                
                // Sau khi lưu xong, chúng ta sẽ cần gửi tới Email đăng kí 1 đường link tới Website của chúng ta
                // Yêu cầu người dùng nhấp để kích hoạt; Biến link (đường dẫn kích hoạt) sẽ gửi vào Email
                $link = "<a href='http://localhost/BaiTapLon-Spotify/site/model/mail/activation.php?key=".$email."&token=".$token."'>Nhấp vào đây để kích hoạt</a>";
                

                // Quá trình gửi Email
                include "../model/mail/send_email.php";
                if(sendEmailForAccountActive($email, $link)){
                    $err= "Vui lòng kiểm tra Hộp thư của Bạn để kích hoạt tài khoản";
                    header("location:../view/404.php?err=$err");
                }else{
                    $err= "Xin lỗi. Email chưa được gửi đi. Vui lòng kiểm tra lại thông tin Đăng kí tài khoản";
                    header("location:../view/404.php?err=$err");
                }
            }
            
    }
        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký - Spotify</title>
    <link rel="icon" href="../../public/img/Logo/imageslogo.png" type="image/png">

    <link rel="stylesheet" href="../../public/css/styleN.css">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>
<body style="font-family: spotify-circular, Helvetica, Arial, sans-serif;">
<main>
    <div class="encore-light-theme">
        <div class="form-regis">
            <div class="flex-column d-flex">
                <div class="head ">
                    <a data-testid="spotify-logo" class="spotify-logo" tabindex="-1" title="Spotify" ng-href="/vi-VN" href="/vi-VN"><img src="../../public/img/Logo/Logolg.PNG" width="200px"></a>
                </div>
                <h2 class="fw-bold fs-3 text-center ">Đăng ký miễn phí để bắt đầu nghe.</h2>
            </div>
            <div class="d-flex justify-content-around mb-3 mt-3 ">
                <a href="" class="fw-bold text-decoration-none fs-6">
                    <div class="signup ">Đăng ký bằng Facebook</div>
                </a>
            </div>
            <div class="divider">
                <strong class="divider-title ">hoặc</strong>
            </div>
            <form method="POST" id="form" name="accounts" >
            <!-- action="../model/process-register.php" -->
                <div class="pb-3">
                    <div class="error"> 
                        <?php  if(isset($_GET['err'])){echo "<h6 style='color:red;'>{$_GET['err']}</h6>";}?>
                    </div>
                </div>
                <div class="pb-3">
                    <div class="fw-bold fs-6 pb-2">
                        <label for="email" class="">Email của bạn là gì?</label>
                    </div>
                    <input type="email" id="email" name="email" placeholder="email@address.com" value="" class="hUAscM">
                     <!-- <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="far fa-check-circle success-icon"></i>  -->
                    <div class="error"> 
                        <?php if(isset($err['email'])){ echo(isset($err['email'])?$err['email']:'');}else{
                        if(isset($err['emaill'])){ echo(isset($err['emaill'])?$err['emaill']:'');}}?>
                    </div>
                </div>
                <div class="pb-3">
                    <div class=" fw-bold fs-6 pb-2">
                        <label for="confirm"class="">Xác nhận email của bạn</label>
                    </div>
                    <input type="email"  id="confirmemail" name="confirm-email"  placeholder="Nhập lại email của bạn." value="" class="hUAscM">
                    <!-- <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="far fa-check-circle success-icon"></i> -->
                    <div class="error">
                        <?php echo(isset($err['confirm-email'])?$err['confirm-email']:'')?>
                    </div>
                </div>
                <div class="pb-3">
                    <div class=" fw-bold fs-6 pb-2">
                        <label for="password" class="">Tạo mật khẩu</label>
                    </div>
                    <input type="password" id="password"  name="password" placeholder="Tạo mật khẩu."
                    title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number." value="" class="hUAscM">
                    <!-- <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="far fa-check-circle success-icon"></i> -->
                    <!-- <div class="error"> </div> -->
                    <div class="error">
                        <?php echo(isset($err['password'])?$err['password']:'')?>
                    </div>
                </div>
                <div class="pb-3">
                    <div class="fw-bold fs-6 pb-2">
                        <label  class="">Bạn tên là gì?</label>
                    </div>
                    <input type="text" id="displayname" name="displayname" placeholder="Nhập tên hồ sơ." value="" class="hUAscM" title="Tên không được chứa kí tự đặc biệt">
                    <!-- <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="far fa-check-circle success-icon"></i> -->
                    <div id="errorUser" class="error">
                        <?php echo(isset($err['displayname'])?$err['displayname']:'')?>
                    </div>
                    <div class="">Tên này sẽ xuất  hiện trên hồ sơ của bạn.
                    </div>
                </div>
                <div class="pb-3">
                    <div class=" fw-bold fs-6 pb-2">
                        <label class="">Bạn sinh ngày nào?</label>
                    </div>
                    <div class="space">
                        <div  class=" col-md-2">
                            <div class=" pb-3 ">
                                <div class=" fw-bold fs-6 pb-2">
                                    <label class=" ">Ngày</label>
                                </div>
                                <input type="text"  id="day"  maxlength="2" name="day"  placeholder="DD" value="" class="hUAscM">
                                <!-- <i class="fas fa-exclamation-circle failure-icon"></i>
                                <i class="far fa-check-circle success-icon"></i>
                                <div class="error"></div> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" pb-3 ">
                                <div class="fw-bold fs-6 pb-2">
                                    <label  class="">Tháng</label>
                                </div>
                                <div class="">
                                    <select id="month" name ="month" class = "hUAscM "style="appearance: none;">
                                        <option selected="" value=""></option
                                        ><option value="01">Tháng 1</option>
                                        <option value="02">Tháng 2</option>
                                        <option value="03">Tháng 3</option>
                                        <option value="04">Tháng 4</option>
                                        <option value="05">Tháng 5</option>
                                        <option value="06">Tháng 6</option>
                                        <option value="07">Tháng 7</option>
                                        <option value="08">Tháng 8</option>
                                        <option value="09">Tháng 9</option>
                                        <option value="10">Tháng 10</option>
                                        <option value="11">Tháng 11</option>
                                        <option value="12">Tháng 12</option>
                                    <select>
                                </div>
                                <!-- <i class="fas fa-exclamation-circle failure-icon"></i>
                                <i class="far fa-check-circle success-icon"></i> -->
                                <!-- <div class="error"></div> -->
                            </div>
                        </div>
                        <div  class=" col-md-3">
                            <div class="pb-3 ">
                                <div class=" fw-bold fs-6 pb-2">
                                    <label class="">Năm</label>
                                </div>
                                <input type="text" id="year" inputmode="numeric" maxlength="4" name="year" pattern="(19[0-9]{2})|(200)[0-8]" placeholder="YYYY"  value="<?php if(isset($nam)){echo $nam;}?>" class="hUAscM">
                                <!-- <i class="fas fa-exclamation-circle failure-icon"></i>
                                <i class="far fa-check-circle success-icon"></i> -->
                                <!-- <div class="error"></div> -->
                            </div>
                        </div>
                        
                    </div>
                    <div>
                        <div class="error"><?php echo(isset($err['day'])?$err['day']:'')?></div>
                        <div class="error"><?php echo(isset($err['month'])?$err['month']:'')?></div>
                        <div class="error"><?php echo(isset($err['year'])?$err['year']:'')?></div>
                    </div>
                </div>
                <fieldset role="radiogroup" class=" ">
                    <legend class=" fw-bold fs-6 pb-2">Giới tính của bạn là gì?</legend>
                    <div class="space">
                        <div class="">
                            <input type="radio" id="gender_option_male" checked name="gender" value="Nam" class=" " <?php if (isset($gender) && $gender=="Nam") echo "checked";?>>
                           
                            <label for="gender_option_male">
                                <span class="">Nam</span>
                            </label>
                            <!-- <i class="fas fa-exclamation-circle failure-icon"></i>
                            <i class="far fa-check-circle success-icon"></i>
                            <div class="error"></div> -->
                        </div>
                        <div class=" dYEnUC">
                            <input type="radio" id="gender_option_female" name="gender"value="Nữ"class=""<?php if (isset($gender) && $gender=="Nữ") echo "checked";?>>
                            
                            <label >
                                <span class="">Nữ</span>
                            </label>
                        </div>
                        <div class=" dYEnUC">
                            <input type="radio" id="gender_option_nonbinary" name="gender"  value="N/N" class=""<?php if (isset($gender) && $gender=="N/N") echo "checked";?>>
                            
                            <label >
                                <span class="kLhpUW"></span>
                                <span class="">Không phân biệt giới tính</span>
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="pb-3">
                    <div class=" ">
                        <input type="checkbox" name="marketing" class="">
                        <label >
                            <span class=" font-chu">Tôi không muốn nhận tin nhắn tiếp thị từ Spotify</span>
                        </label>
                    </div>
                </div>
                <div class=" pb-3">
                    <div class=" ">
                        <input type="checkbox" id="third-party-checkbox" name="thirdParty" class="" checked>
                        <label >
                            <span class=" font-chu">
                                <span class=" fPyYIP">Chia sẻ dữ liệu đăng ký của tôi với các nhà cung cấp nội dung của Spotify cho mục đích tiếp thị.</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class=" text-center">
                    <p class="pb-3 mb-0 "style="font-size: 12px;">
                        <span class=" fPyYIP">Bằng việc nhấp vào nút Đăng ký, bạn đồng ý với <a href="/vn-vi/legal/end-user-agreement/" target="_blank" rel="noopener noreferrer">Điều khoản và điều kiện sử dụng</a> của Spotify.</span></p>
                    <p class="pb-3 mb-0 "style="font-size: 12px;">
                        <span class=" fPyYIP">Để tìm hiểu thêm về cách thức Spotify thu thập, sử dụng, chia sẻ và bảo vệ dữ liệu cá nhân của bạn, vui lòng xem <a href="/vn-vi/legal/privacy-policy/" target="_blank" rel="noopener noreferrer">Chính sách quyền riêng tư của Spotify</a>.</span>
                    </p>
                    <div class="d-flex justify-content-around mb-3">
                        <button type="submit"  name="btnRegister" class="dmJlSg">
                            <div class=" flmFpd gzFCtx">Đăng ký</div>
                        </button>
                    </div>
                    <p class=" d-flex justify-content-around mb-3">
                        <span class="fPyYIP">Bạn có tài khoản? <a href="login.php">Đăng nhập</a>.</span>
                    </p>
                </div>
            </form>
        </div>
    </div>
</main>
</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
<!-- <script src="../../public/js/validateForm.js"></script> -->
</html>
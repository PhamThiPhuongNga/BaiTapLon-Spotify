
<?php
if(isset($_POST['btnRegister'])) //Kiểm tra Người dùng có nhấp vào nút SUBMIT chưa và đã nhập dữ liệu Email chưa
{
    // B1. Gọi lại cái đoạn kết nối DB Server
    // echo $token;
    // Lưu lại thông tin đăng kí vào CSDL (Dữ liệu lấy từ index.php [FORM] gửi sang)
    $email  = $_POST['email'];
    $confemail  = $_POST['confirm-email'];
    $pass   = password_hash($_POST['password'], PASSWORD_DEFAULT);
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
    // $regexname = "/^{5,20}$/i";
    // || !preg_match($regexname, $name) 
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
// B3. Xử lý kết quả
    // if(mysqli_num_rows($result) > 0) //Kiểm tra Email chưa được dùng
    // {
    //     $err['emaill'] = ' x Email đã tồn tại';
    // }
    require "../../connect_db.php";

        // B2. Thực hiện truy vấn
    $result = mysqli_query($conn,"SELECT * FROM nguoidung WHERE email='" . $_POST['email'] . "'");
    if(mysqli_num_rows($result) <= 0)
    {
        
    
        $token = md5($_POST['email']).rand(10,9999); //Sử dụng giải thuật md5 để sinh ra chuỗi ngẫu nhiên được băm
        $sql  = "INSERT INTO nguoidung(ten_nguoidung,ngay,thang,nam, email,matkhau,gioitinh ,quoctich,email_verification_link ) VALUES('$name','$ngay','$thang','$nam', '$email','$pass','$gioitinh','Việt Nam','$token')";
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
    else{
        $err['emaill'] = ' x Email đã tồn tại';
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

<div id="__next">
    <main>
    <div class="encore-light-theme">
        <div class=" cUBnIY">
            <!-- <div></div>
            <p class="eLLLKd">Rất tiếc, trình duyệt của bạn không được hỗ trợ. Vui lòng thử bằng trình duyệt mới hơn.</p> -->
            <div class="cLyTtM">
                <div class="head ">
                    <a data-testid="spotify-logo" class="spotify-logo" tabindex="-1" title="Spotify" ng-href="/vi-VN" href="/vi-VN"><img src="../../public/img/Logo/Logolg.PNG" width="200px"></a>
                </div>
                <a class="lXGct"></a>
                <h2 class=" loide  bkLUvq ">Đăng ký miễn phí để bắt đầu nghe.</h2>
            </div>
            <div class="iHYwIu">
                <a href="" class="etheig">
                    <div class=" kDOdzL ">Đăng ký bằng Facebook</div>
                </a>
            </div>
            <div class="divider">
                <strong class="divider-title ">hoặc</strong>
            </div>
            <form method="POST" id="form" name="accounts"  >
            <!-- action="../model/process-register.php" -->
                <div class="bXxIjv">
                    <div class="error"> 
                        <?php  if(isset($_GET['err'])){echo "<h6 style='color:red;'>{$_GET['err']}</h6>";}?>
                    </div>
                </div>
                <div class="bXxIjv">
                    <div class="biNheR">
                        <label for="email" class="hyIrKV">Email của bạn là gì?</label>
                    </div>
                    <input type="email" id="email" name="email" placeholder="email@address.com" value="<?php if(isset($email)){echo $email;}?>" class="hUAscM">
                     <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="far fa-check-circle success-icon"></i> 
                    <div class="error"> 
                        <?php if(isset($err['email'])){ echo(isset($err['email'])?$err['email']:'');}else{
                        if(isset($err['emaill'])){ echo(isset($err['emaill'])?$err['emaill']:'');}}?>
                    </div>
                    <a href="" class="jGldrj dwjdDB">Dùng số điện thoại.</a>
                </div>
                <div class="bXxIjv">
                    <div class=" biNheR">
                        <label for="confirm"class="hyIrKV">Xác nhận email của bạn</label>
                    </div>
                    <input type="email"  id="confirmemail" name="confirm-email"  placeholder="Nhập lại email của bạn." value="<?php if(isset($email)){echo $email;}?>" class="hUAscM">
                    <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="far fa-check-circle success-icon"></i>
                    <div class="error">
                        <?php echo(isset($err['confirm-email'])?$err['confirm-email']:'')?>
                    </div>
                </div>
                <div class="bXxIjv">
                    <div class=" biNheR">
                        <label for="password" class=" hyIrKV">Tạo mật khẩu</label>
                    </div>
                    <input type="password" id="password"  name="password" placeholder="Tạo mật khẩu."
                    title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number." value="" class="hUAscM">
                    <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="far fa-check-circle success-icon"></i>
                    <!-- <div class="error"> </div> -->
                    <div class="error">
                        <?php echo(isset($err['password'])?$err['password']:'')?>
                    </div>
                </div>
                <div class=" bXxIjv">
                    <div class="biNheR">
                        <label  class=" hyIrKV">Bạn tên là gì?</label>
                    </div>
                    <input type="text" id="displayname" name="displayname" placeholder="Nhập tên hồ sơ." value="<?php if(isset($name)){echo $name;}?>" class="hUAscM" title="Tên không được chứa kí tự đặc biệt">
                    <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="far fa-check-circle success-icon"></i>
                    <div id="errorUser" class="error">
                        <?php echo(isset($err['displayname'])?$err['displayname']:'')?>
                    </div>
                    <div class="jOtNmg iRPJBk">Tên này sẽ xuất  hiện trên hồ sơ của bạn.
                    </div>
                </div>
                <div class="bXxIjv">
                    <div class=" biNheR">
                        <label class="hyIrKV">Bạn sinh ngày nào?</label>
                    </div>
                    <div class="jAZzMT">
                        <div  class=" gKcNYV">
                            <div class=" bXxIjv ">
                                <div class=" biNheR">
                                    <label class=" hyIrKV">Ngày</label>
                                </div>
                                <input type="text"  id="day"  maxlength="2" name="day"  placeholder="DD" value="<?php if(isset($ngay)){echo $ngay;}?>" class="hUAscM">
                                <i class="fas fa-exclamation-circle failure-icon"></i>
                                <i class="far fa-check-circle success-icon"></i>
                                <div class="error"></div>
                            </div>
                        </div>
                        <div class=" uMRZZ">
                            <div class=" bXxIjv ">
                                <div class="biNheR">
                                    <label  class="hyIrKV">Tháng</label>
                                </div>
                                <div class="btkRyt">
                                    <select id="month" name ="month" class = "bxcbdF ">
                                        <option selected=""  value="<?php if(isset($thang)){echo $thang;}?>">Tháng</option
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
                                <i class="fas fa-exclamation-circle failure-icon"></i>
                                <i class="far fa-check-circle success-icon"></i>
                                <div class="error"></div>
                            </div>
                        </div>
                        <div  class=" hyfXpC">
                            <div class="bXxIjv fTGCIy">
                                <div class=" biNheR">
                                    <label class="hyIrKV">Năm</label>
                                </div>
                                <input type="text" id="year" inputmode="numeric" maxlength="4" name="year" pattern="(19[0-9]{2})|(200)[0-8]" placeholder="YYYY"  value="<?php if(isset($nam)){echo $nam;}?>" class="hUAscM">
                                <i class="fas fa-exclamation-circle failure-icon"></i>
                                <i class="far fa-check-circle success-icon"></i>
                                <div class="error"></div>
                            </div>
                        </div>
                        
                    </div>
                    <div>
                        <div class="error"><?php echo(isset($err['day'])?$err['day']:'')?></div>
                        <div class="error"><?php echo(isset($err['month'])?$err['month']:'')?></div>
                        <div class="error"><?php echo(isset($err['year'])?$err['year']:'')?></div>
                    </div>
                </div>
                <fieldset role="radiogroup" class=" iEDNAE">
                    <legend class=" biNheR">Giới tính của bạn là gì?</legend>
                    <div class="kgAGaJ jAZzMT">
                        <div class=" dYEnUC">
                            <input type="radio" id="gender_option_male" checked name="gender" value="Nam" class=" jjQdzI" <?php if (isset($gender) && $gender=="Nam") echo "checked";?>>
                           
                            <label for="gender_option_male">
                                <span class="jUctcY kDURAo">Nam</span>
                            </label>
                            <i class="fas fa-exclamation-circle failure-icon"></i>
                            <i class="far fa-check-circle success-icon"></i>
                            <div class="error"></div>
                        </div>
                        <div class=" dYEnUC">
                            <input type="radio" id="gender_option_female" name="gender"value="Nữ"class="jjQdzI"<?php if (isset($gender) && $gender=="Nữ") echo "checked";?>>
                            
                            <label >
                                <span class=" jUctcY kDURAo">Nữ</span>
                            </label>
                        </div>
                        <div class=" dYEnUC">
                            <input type="radio" id="gender_option_nonbinary" name="gender"  value="N/N" class="jjQdzI"<?php if (isset($gender) && $gender=="N/N") echo "checked";?>>
                            
                            <label >
                                <span class="kLhpUW"></span>
                                <span class=" jUctcY kDURAo">Không phân biệt giới tính</span>
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="bXxIjv">
                    <div class=" iuhOXU">
                        <input type="checkbox" id="marketing-opt-checkbox" name="marketing" class="jjQdzI">
                        <label >
                            <span class="hmDuGC"></span>
                            <span class=" ipROSy">Tôi không muốn nhận tin nhắn tiếp thị từ Spotify</span>
                        </label>
                    </div>
                </div>
                <div class=" bXxIjv">
                    <div class=" iuhOXU">
                        <input type="checkbox" id="third-party-checkbox" name="thirdParty" class="jjQdzI" checked>
                        <label >
                            <span class=" hmDuGC"></span>
                            <span class=" ipROSy">
                                <span class=" fPyYIP">Chia sẻ dữ liệu đăng ký của tôi với các nhà cung cấp nội dung của Spotify cho mục đích tiếp thị.</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="bXxIjv">
                    <div id="checkbox-container">
                        <div style="width: 304px; height: 78px;"><div>
                            <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/enterprise/anchor?ar=1&amp;k=6LeO36obAAAAALSBZrY6RYM1hcAY7RLvpDDcJLy3&amp;co=aHR0cHM6Ly93d3cuc3BvdGlmeS5jb206NDQz&amp;hl=vi&amp;v=VZKEDW9wslPbEc9RmzMqaOAP&amp;size=normal&amp;cb=we4ex9d2uqio" width="304" height="78" role="presentation" name="a-dc9fbehpa1kp" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox">

                            </iframe>
                        </div>
                        <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                    </div>
                    <iframe style="display: none;"></iframe>
                </div>
                <input type="text" hidden="" name="recaptchaCheckbox" required="" data-testid="recaptcha-input-test" value="03AGdBq25cVvKZ_1krS4DaFAlkeBMwYm0Sb1FTsDUJD09tDzsjVMjxHo8UkE5YoTumurQAWP1CsI28GASTWBhe5PZmzERr3vrx9w_lEOExhsF9s79Pqgo03JWvFum4gSEsUg1rj0eN2bxO6uJ5B-_CUHQLHXifhETQCZYcpF79S02uroye7-YO2c9C99oZX7c2I4VaxnBS_SsJrSooyl0AaAFV95lQAtK7sh3IhhmlMpBQjd9JnvsI3wXKy-QHRgSrIlthSgcfpMMhMEAPbyl4z71IQuONYw-HE2xIX_ARw4kqvXpM_Usux7xSa_Cwf2sttC6PEJxJvDPmXKWNXcYzzFFLjnoo0pvK-lrGHxhp8vi_b-azpdytfUwNGm_4u2_USHrliGR0Wxx739TPwLJoP6SV5njqinHyE0F8WlbzVmACNn8PyiPdbtATL-wEdQHZOO8TyxibzBhvmDadeB_Fpqj27I9Mr5h5VJQmVE7d8krlyy4wqCfw6YkVYBVSrUmXM0aTuMuZnDC93Gh1phZGpFMzHF_IgS6lBIXT8ZOuyh2Exi9deaJPyGiW72_Xe-mxS-uypBFxEIvp6-dD23wnoM22kc3hqILjMr4IaJP0L1XnfJESLwEm_lDqLjhaNWkzORoX4E-oq3kBDmqRTBIhrfJNtfk5xgQolqoh0GCeyo1sa6SNXiDRUqTIAvXLpWS6EgSkFDqvjG0FP0KwPH2CDP6MOuasHK4sqzUcEfuzLFEPmCNjamDoPJjBA47gTeU2dV8rTJ09q03sDAZidctT4j9QGsIx-oYqB9ymEIBvdr6r-qGF-FD62Fck1v-BvmGq0uleVSwxsZU9ENNznMKuCxBT4bjdj6aI_mf5xr3sy6q1_lVLgyzbPd_xZiDA7T4i6UCDpw-V5XD8I2MWita8bEihopm30In4SCXfhF-EQ8yKa-xfyOWCQiQczaas28NA2zM-bm92Fwc7f89MDE3eGkehDNpwXS3nPnSdz5-s2AX1ihfaXt3GH-VqrX19PehUU0BQvYLwoBbProQh7nssfzIPd5CzGamVu6VJvCEAaqV9rCv2PsAC6KsrpiBn4aHs_Dik9foCntgAzuqZMnVrBlcOTW5gpMtR-0sekrn8bjVIXBOinD-K7nXNfAW0jkc6mJ6pALyae7ftyICmoaBgk4_MxIA0LzYV2vPwIiOOPKsBraIhfpN60VblMyQJyWhGeZKcW3ZLWjR8">
                </div>
                <div class=" eaexVT">
                    <p class=" kRNEFg">
                        <span class=" fPyYIP">Bằng việc nhấp vào nút Đăng ký, bạn đồng ý với <a href="/vn-vi/legal/end-user-agreement/" target="_blank" rel="noopener noreferrer">Điều khoản và điều kiện sử dụng</a> của Spotify.</span></p>
                    <p class=" kRNEFg">
                        <span class=" fPyYIP">Để tìm hiểu thêm về cách thức Spotify thu thập, sử dụng, chia sẻ và bảo vệ dữ liệu cá nhân của bạn, vui lòng xem <a href="/vn-vi/legal/privacy-policy/" target="_blank" rel="noopener noreferrer">Chính sách quyền riêng tư của Spotify</a>.</span>
                    </p>
                    <div class="gvwzIR">
                        <button type="submit" id="submit" name="btnRegister" class="dmJlSg">
                            <div class=" flmFpd gzFCtx">Đăng ký</div>
                        </button>
                    </div>
                    <p class=" fvxMUg">
                        <span class="fPyYIP">Bạn có tài khoản? <a href="login.php">Đăng nhập</a>.</span>
                    </p>
                </div>
            </form>
        </div>
    </div>
</main>
</div>
</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
<!-- <script src="../../public/js/validateForm.js"></script> -->
</html>
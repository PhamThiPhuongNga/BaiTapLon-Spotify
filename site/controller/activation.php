<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Account Activation by Email Verification using PHP</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
        if($_GET['key'] && $_GET['token']) //Kiểm tra có giá trị trên URL
        {
            // B1. Kết nối DB Server
            require "db.php";
            // B2. Thực hiện truy vấn
            $email = $_GET['key']; //Nó bắt giá trị trên URL
            $token = $_GET['token'];
            $sql   = "SELECT * FROM `users` WHERE `email_verification_link`='".$token."' and `email`='".$email."'";
            $query = mysqli_query($conn,$sql);
            $d = date('Y-m-d H:i:s'); // Tạo ra 1 biến lưu thời gian
            if (mysqli_num_rows($query) > 0) { //Có bản ghi nào trong CSDL khớp với thông tin này ko
                $row= mysqli_fetch_array($query); //Lấy ra thông tin bản ghi này
                if($row['email_verified_at'] == NULL){ //Kiểm tra lại ANH chưa kích hoạt
                    $sql2 = "UPDATE users set email_verified_at ='$d', status = 1 WHERE email='$email'";
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
    <div class="container mt-3">
        <div class="card">
            <div class="card-header text-center">
                User Account Activation by Email Verification using PHP
            </div>
            <div class="card-body">
                <p>
                    <?php echo $msg; ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
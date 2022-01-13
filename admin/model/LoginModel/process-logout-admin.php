<?php
    session_start();

    if(isset($_SESSION['isLoginadmin'])){
        unset($_SESSION['isLoginadmin']);
        header("location:../../../admin/view/login/login-admin.php");
    }

?>
<?php

    $id = $_GET['id'];
    // echo $id;

    // b1:connect db
    require_once "../../connect_db.php";
    // b2: truy van
    $sql = "DELETE FROM categories WHERE 	id_category = '$id'";
    $result = mysqli_query($conn, $sql);
    
    if($result > 0){
        header("location: index.php");
    }else{
        echo "loi mat goy! Hay chechk lai, co the co quan he rang buoc khoa ngoai.";
    }

?>
<?php 
    session_start();
    include('../../connect_db.php');
    $id = $_GET['id'];
    // session_destroy();
    // die();
    $action=(isset($_GET['action']))? $_GET['action'] :'add';
    // var_dump( $action);exit();
    $query=mysqli_query($conn,"SELECT bh.ma_bh,bh.ten_bh,bh.anh_bh,bh.ngaythem,bh.quocgia,bh.link_bh,ct.ten,ct.anh,ct.anh,ns.ten_nghesi,ns.anh_nghesi,ab.ten_ab 
    FROM baihat as bh, categories as ct ,nghesi as ns,album as ab 
    where bh.id_category=ct.id_category and bh.id_nghesi=ns.id_nghesi and bh.ma_ab=ab.ma_ab and  bh.ma_bh='$id'");
    if($query){
        $love=mysqli_fetch_assoc($query);
    }
    
    $item=[
        'id'=>$love['ma_bh'],
        'tenbh'=>$love['ten_bh'],
        'anhbh'=>$love['anh_bh'],
        'tenns'=>$love['ten_nghesi'],
        'tenab'=>$love['ten_ab'],
    ];
    if(!isset($_SESSION['yeuthich'][$id])){
        $_SESSION['yeuthich'][$id] = $item;
    }
    else{
        echo"đã thêm vào danh sách yêu thích r";
    }
    if($action =='delete'){
        unset($_SESSION['yeuthich'][$id]);
    }
    header('location:../../site/view/yeuthich.php');
    
    // echo "<pre>";
    // print_r($_SESSION['yeuthich']);
?>
<?php

header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
include ("conn.php");
session_start();
if(isset($_POST)){
    $getshop=$_POST['getshop'];
    $payway=$_POST['payway'];
    $ordernum=date("YmjHis");
    $createtime=date('Y-m-d H:i:s');
    $uid=$_SESSION['id'];
    $carid = $_POST['carid'];
    var_dump($carid);
    $_SESSION['carid'] = $carid;
    var_dump($_SESSION['carid']);

    if ($getshop!=''&&$payway!=''){



    $sql1 = mysqli_query($link, "insert into tb_buy (ship_data,payway,btime,uid,caid) VALUES ('$getshop','$payway','$createtime','$uid','$carid')");
//
    if($sql1) {
        echo "<script language='JavaScript'>alert('提交订单成功！');window.location.href='index.php';</script>";
    } else {
        echo "<script language='JavaScript'>alert('提交订单失败！');window.location.href='buy.php';</script>";
    }
    }else{
        echo "<script language='JavaScript'>alert('亲！还没选择送货方式和付款！');window.location.href='cart.php';</script>";
    }
}
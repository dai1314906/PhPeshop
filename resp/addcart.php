<?php
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
session_start();
include ("conn.php");
$time=date("Y-m-d H:i:s");
$uid=$_SESSION["id"];
$cid=$_GET['id'];
    $sql1=mysqli_query($link,"insert into tb_cart (cid,catime,uid) values ('$cid','$time','$uid')");
    if($sql1){
        echo "<script language='JavaScript'>alert('添加到购物车!');history.go(-1);</script>";
    }else{
        echo "<script language='JavaScript'>alert('添加失败!');history.go(-1);</script>";
    }



<?php
session_start();
include ("conn.php");
header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
if (isset($_POST['Submit'])){
    $add_consult = $_POST['mytext'];
    $uid = $_SESSION["id"];
    $cid =  $_SESSION['cid2'];
    $time = date('Y-m-d H:i:s');
    if ($add_consult==''){
        echo "<script language='JavaScript'>alert('内容不能为空！');history.go(-1);</script>";
    }else{
        $sql = mysqli_query($link,"insert into tb_consult (concontent,uid,cid,contime) values ('$add_consult','$uid','$cid','$time')");
        var_dump($sql);
        if ($sql){
            echo "<script language='JavaScript'>alert('咨询成功！请等待回复!');history.go(-1);</script>";
        }else{
            echo "<script language='JavaScript'>alert('发表失败');history.go(-1);</script>";
        }
    }
//    unset($_SESSION['cid2']);
}
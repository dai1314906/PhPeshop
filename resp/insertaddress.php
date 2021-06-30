<?php
include ("conn.php");
session_start();
header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
if(isset($_POST['Submit'])){
    $consigner = $_POST['add_consigner'];
    $tel = $_POST['add_tel'];
    $content = $_POST['add_content'];
    $uid=$_SESSION["id"];
    if ($consigner==''&&$tel==''&&$content==''){
        echo '<script language="JavaScript">alert("地址没有填写完全!");window.location.href="address.php";</script>';
    }else{
    $sql = mysqli_query($link, "insert into tb_address (consigner,tel,ad_content,uid) VALUES ('$consigner','$tel','$content','$uid') ");

    if ($sql) {
        echo "<script language='JavaScript'>alert('用户地址添加成功！');window.location.href='display_address.php';</script>";


    } else {
        echo "<script language='JavaScript'>alert('用户地址添加失败！');window.location.href='address.php';</script>";
    }
    }
}

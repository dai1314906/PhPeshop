<?php

header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
include ("conn.php");
if (isset($_POST['Submit'])){
    $u_shop=$_POST['up_shop'];
    $u_intro=$_POST['up_intro'];
    $u_type=$_POST['up_type'];
    $u_brand=$_POST['up_brand'];
    $u_num=$_POST['up_num'];
    $u_price=$_POST['up_price'];
    $u_time=$_POST['up_time'];
    $u_file=$_POST['up_file'];
    $up_time=date('Y-m-d H:i:s');
    $sql=mysqli_query("select * from tb_eshop where sid='".$_GET["id"]."'");
    $info=mysqli_fetch_array($sql);


    $sql1=mysqli_query($link,"update tb_eshop set shop_name='$u_shop',intro='$u_intro',typeshop='$u_type',num='$u_num',price='$u_price',brand='$u_brand',timeshop='$u_time',pic='$u_file',updatetime='$up_time'where sid='".$_GET["id"]."'");

    if($sql1){
        echo "<script language='JavaScript'>alert('更新成功');window.location.href='update.php';</script>";
    }else{
        echo "<script language='JavaScript'>alert('更新失败');history.back();</script>";
    }
}

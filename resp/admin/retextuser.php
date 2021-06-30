<?php
include ("conn.php");

header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
if (isset($_POST['Submit'])){
    $id = $_POST['conid'];

    $retextuser = $_POST['retextuser'];

    $time = date('Y-m-d H:i:s');
    $sql1 = mysqli_query($link,"select * from tb_consult where conid = '$id'");
    $row1=mysqli_fetch_array($sql1);
    if ($row1['reptext'] ==''){

    $sql = mysqli_query($link,"update tb_consult set reptext = '$retextuser',reptime = '$time'  where conid = '$id'");

    if ($sql){
        echo "<script type='text/javascript'>alert('回复成功！');history.go(-1)</script>";
    }else{
        echo "<script type='text/javascript'>alert('回复失败！');history.go(-1)</script>";
    }
}else{
        echo "<script type='text/javascript'>alert('已经回复了');history.go(-1);</script>";
    }
}
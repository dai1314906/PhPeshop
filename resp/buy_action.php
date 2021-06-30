<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
include ("conn.php");
$cid = $_GET['id'];
$caid = 0;
//var_dump($cid);
$uid = $_SESSION['id'];
//var_dump($uid);
$times=date("Y-m-d H:i:s");
$_SESSION["ccid"]=$cid;
//var_dump($_SESSION['ccid']);
//$sql3 = mysqli_query($link,"insert into tb_buy(uid),tb_order_details(cid) (select tb_buy.uid,tb_order_details.cid from tb_buy tb_order_details where tb_order_details.bid = tb_buy.bid) values ('$uid','$cid')");
$sql1 = mysqli_query($link,"insert into tb_buy(uid,btime,caid) values ('$uid','$times','$caid')");
//$row = mysqli_fetch_array($sql1);
//var_dump($row['bid']);
$sql3=mysqli_query($link,"select * from tb_buy where uid='$uid' and btime='$times'");
//var_dump($sql3);
$row3=mysqli_fetch_array($sql3);
$bid = $row3['bid'];
//var_dump($bid);
$_SESSION['bid1'] = $bid;
$sql2 = mysqli_query($link,"insert into tb_order_details(cid,bid) values ('$cid','$bid')");
//var_dump($sql2);
if ($sql2)
        echo "<script>window.location.href='buy2.php';</script>";
    else
        echo "<script>alert('失败');history.go(-1);</script>";
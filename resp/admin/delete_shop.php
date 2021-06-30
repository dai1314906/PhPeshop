<?php
header("Content-Type:text/html;charset=utf-8");
include ("conn.php");
$id=$_GET['id'];
$sql=mysqli_query($link,"delete from tb_commodity where cid=$id");
if($sql){
    echo "<script language='JavaScript'>alert('商品下架成功！');window.location.href='delete.php?id=$id';</script>";
}else{
    echo "<script language='JavaScript'>alert('商品下架失败！');window.location.href='delete.php?id=$id';</script>";
}
<?php
header("Content-Type:text/html;charset=utf-8");
include ("conn.php");
$id=$_GET['id'];
$sql=mysqli_query($link,"delete from tb_cart where caid=$id");
if($sql){
    echo "<script language='JavaScript'>alert('购物车订单删除成功！');window.location.href='cart.php?id=$id';</script>";
}else{
    echo "<script language='JavaScript'>alert('购物车订单删除失败！');window.location.href='cart.php?id=$id';</script>";
}
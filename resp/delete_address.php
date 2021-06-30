<?php
header("Content-Type:text/html;charset=utf-8");
include ("conn.php");
$id=$_GET['id'];
$sql=mysqli_query($link,"delete from tb_address where adid=$id");
if($sql){
    echo "<script language='JavaScript'>alert('地址删除成功！');window.location.href='display_address.php?id=$id';</script>";
}else{
    echo "<script language='JavaScript'>alert('地址删除失败！');window.location.href='display_address.php?id=$id';</script>";
}
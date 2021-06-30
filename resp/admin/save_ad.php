<?php
header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
include ("conn.php");
if (isset($_POST['Submit'])) {
	# code...
$adname = $_POST['add_adname'];
$adpic = $_POST['add_adpic'];
$adurl = $_POST['add_adurl'];
$adprice = $_POST['add_adprice'];
$adoprice = $_POST['add_adoprice'];

$createtime=date('Y-m-d H:i:s');

$sql = mysqli_query($link,"insert into tb_advertising(aname,apic,alink,aprice,aoprice) values ('$adname','$adpic','$adurl','$adprice','$adoprice')");
if ($sql) {
	# code...
	echo "<script language='JavaScript'>alert('广告添加成功！');window.location.href='advertising.php';</script>";
}else {
	echo "<script language='JavaScript'>alert('广告添加失败！');window.location.href='advertising.php';</script>";
}
}

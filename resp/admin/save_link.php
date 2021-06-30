<?php
header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
include ("conn.php");
if (isset($_POST['Submit'])) {
	# code...
	$link_name = $_POST['add_link_name'];
	$link_url = $_POST['add_link_url'];
	$createtime=date('Y-m-d H:i:s');

	$sql = mysqli_query($link,"insert into tb_link(liname,liurl,createtime) values ('$link_name','$link_url','$createtime')");
	if ($sql) {
	# code...
	echo "<script language='JavaScript'>alert('链接添加成功！');window.location.href='link.php';</script>";
	}else {
	echo "<script language='JavaScript'>alert('链接添加失败！');window.location.href='link.php';</script>";
	}
}

<?php
header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
include ("conn.php");
if (isset($_POST['Submit'])) {
	# code...
	$title = $_POST['add_title'];
	$content = $_POST['add_content'];

	$add_name = $_POST['add_name'];
 	$createtime=date('Y-m-d H:i:s');

	$sql = mysqli_query($link,"insert into tb_essay(econtent,eheadline,etime,tecname) values ('$content','$title','$createtime','$add_name')");
	if ($sql) {
	# code...
	echo "<script language='JavaScript'>alert('文章添加成功！');window.location.href='essay.php';</script>";
	}else {
	echo "<script language='JavaScript'>alert('文章添加失败！');window.location.href='essay.php';</script>";
	}
}

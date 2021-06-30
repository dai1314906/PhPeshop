<?php
header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
include ("conn.php");
if (isset($_POST['Submit'])) {
    # code...
    $add_title = $_POST['add_title'];
    $createtime=date('Y-m-d H:i:s');
    $sql = mysqli_query($link,"insert into tb_leaveword (lcontent,ltime) values ('$add_title','$createtime')");
    if ($sql) {
        # code...
        echo "<script language='JavaScript'>alert('留言发布成功！');window.location.href='leaveword.php';</script>";
    }else {
        echo "<script language='JavaScript'>alert('留言发布失败！');window.location.href='leaveword.php';</script>";
    }
}

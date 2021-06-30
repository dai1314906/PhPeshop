<?php
header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
include ("conn.php");
if (isset($_POST['Submit'])) {
    # code...
    $add_tecname = $_POST['add_tecname'];
    $sql = mysqli_query($link,"insert into tb_essay_category (tec_name) values ('$add_tecname')");
    if ($sql) {
        # code...
        echo "<script language='JavaScript'>alert('文章类别添加成功！');window.location.href='essay.php';</script>";
    }else {
        echo "<script language='JavaScript'>alert('文章类别添加失败！');window.location.href='essay.php';</script>";
    }
}

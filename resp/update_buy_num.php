<?php
header("Content-Type:text/html;charset=utf-8");
include("conn.php");
if (isset($_POST['Submit'])) {
    $num = $_POST['counts'];
    $id = $_POST["caid"];
    //$time=date("Y-m-d H:i:s");
    $sql = mysqli_query($link, "update tb_cart set canum='$num'where caid='$id'");
    if ($sql) {
        echo "<script language='JavaScript'>alert('更改成功!');history.go(-1);</script>";
    } else {
        echo "<script language='JavaScript'>alert('更改失败!');history.go(-1);</script>";

    }
}
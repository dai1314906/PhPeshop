<?php
header("Content-Type:text/html;charset=utf-8");
include("conn.php");
session_start();
if (isset($_POST['Submit'])) {
    $num = $_POST['counts'];
    $bid = $_POST["bid"];
//    $bid = $_SESSION['bid1'];
    //$time=date("Y-m-d H:i:s");
    $sql = mysqli_query($link, "update tb_order_details set num='$num'where bid='$bid'");
    if ($sql) {
        echo "<script language='JavaScript'>alert('更改成功!');history.go(-1);</script>";
    } else {
        echo "<script language='JavaScript'>alert('更改失败!');history.go(-1);</script>";

    }
}
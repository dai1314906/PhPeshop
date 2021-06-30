<?php
header("Content-Type:text/html;charset=utf-8");
include("conn.php");
session_start();
if (isset($_POST['Submit'])){
    $orderid = $_POST['orderid'];
    $grade = $_POST['grade'];
    var_dump($orderid);
    var_dump($grade);
    $sql = mysqli_query($link,"select * from tb_order_details where od_id = '$orderid'");

    $info = mysqli_fetch_array($sql);
    if($info['rateing'] == ''){
        $sql1 = mysqli_query($link,"update tb_order_details set rateing = '$grade' where od_id = '$orderid'");
        if ($sql1){
            echo "<script type='text/javascript'>alert('评分成功!');history.go(-1)</script>";
        }else{
            echo "<script type='text/javascript'>alert('评分失败!');history.go(-1)</script>";
        }
    }else{
        echo "<script type='text/javascript'>alert('已评价!');history.go(-1)</script>";
    }
}

<?php
header("Content-Type:text/html;charset=utf-8");
include ("conn.php");
session_start();
if (isset($_POST['Submit'])){
    $up_name=$_POST['update_name'];
    $up_pwd=$_POST['update_password'];
    $up_truename=$_POST['update_truename'];
    $up_tel=$_POST['update_tel'];
    $up_sex=$_POST['update_sex'];
    $up_email=$_POST['update_email'];

//    if ($up_name==''&&$up_pwd==''&&$up_truename==''&&$up_tel==''&&$up_sex==''&&$up_email==''){
//        echo "<script language='JavaScript'>alert('信息不能为空！');window.location.href='usercenter.php';</script>";
//    } else{
    $uid = $_SESSION["id"];

    $sql1 = mysqli_query($link,"select * from tb_user where uid = '$uid'");

    $row = mysqli_fetch_array($sql1);

    $time = $row['createtime'];

    $sql= mysqli_query($link,"update tb_user set username='$up_name',pwd='$up_pwd',truename='$up_truename',usertel='$up_tel',sex='$up_sex',email='$up_email' where createtime = '$time'");

    var_dump($sql);

    if ($sql){

        echo "<script language='JavaScript'>alert('修改成功！');window.location.href='usercenter.php';</script>";

    }else{

        echo "<script language='JavaScript'>alert('修改失败！');window.location.href='usercenter.php';</script>";

    }
//    header("location:usercenter.php");
//    }
}

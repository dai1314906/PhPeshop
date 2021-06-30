<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
include ("conn.php");
if(isset($_POST['Submit'])){
    $ad_name=$_POST['admin_name'];
    $ad_pwd=$_POST['admin_password'];
    if($ad_name==""||$ad_pwd==""){
        echo "<script language='JavaScript'>alert('管理员名，密码不能为空！');window.location.href='index.php';</script>";
    }else{
        $sql="select admin_name,admin_pwd from tb_admin where admin_name='$ad_name' and admin_pwd='$ad_pwd'";
        $result=mysqli_query($link,$sql);
        $row=mysqli_fetch_array($result);
        if($ad_name==$row['admin_name']&&$ad_pwd==$row['admin_pwd']){
            echo "<script language='JavaScript'>alert('登录成功！');window.location.href='admin_center.php';</script>";
            session_start();
            $_SESSION['name']=$ad_name;
            $_SESSION['pwd']=$ad_pwd;
        }else{
            echo "<script language='JavaScript'>alert('登录失败！');window.location.href='index.php';</script>";
        }
    }
}
<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
include ("conn.php");
if(isset($_POST['Submit'])){
    $name=$_POST['add_name'];
    $pwd=$_POST['add_password'];
    if($name==""||$pwd==""){
        echo "<script language='JavaScript'>alert('用户名密码不能为空！');window.location.href='login.html';</script>";
    }else{
        $sql="select * from tb_user where username='$name' and pwd='$pwd'";
        $result=mysqli_query($link,$sql);
        $row=mysqli_fetch_array($result);
        if($name==$row['username']&&$pwd==$row['pwd']){
            $_SESSION['name']=$row['username'];
            $_SESSION['pwd']=$pwd;
            $_SESSION["id"]=$row["uid"];
//            var_dump($_SESSION['name']);
            echo "<script language='JavaScript'>alert('登录成功！');window.location.href='index.php';</script>";



        }else{
            echo "<script language='JavaScript'>alert('登录失败！');window.location.href='login.html';</script>";
        }
    }
}
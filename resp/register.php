<?php
header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
include ("conn.php");
if(isset($_POST['Submit'])){
    $name=$_POST['add_name'];
    $pwd=$_POST['add_password'];
    $sex=$_POST['add_sex'];
    $tel=$_POST['add_tel'];
    $email=$_POST['add_email'];
    $truename=$_POST['add_truename'];
    $createtime=date('Y-m-d H:i:s');
    if($name==""&&$pwd==""){
        echo "<script language='JavaScript'>alert('请填写完全！');</script>";
    }else if($name!=""&&$pwd!="") {
        $sql = mysqli_query($link, "insert into tb_user (username,pwd,truename,sex,usertel,email) VALUES ('$name','$pwd','$truename','$sex','$tel','$email')");
        if ($sql) {
            echo "<script language='JavaScript'>alert('用户信息添加成功！');window.location.href='login.html';</script>";
            session_start();
            $_SESSION['name']=$name;
            $_SESSION['pwd']=$pwd;
        } else {
            echo "<script language='JavaScript'>alert('用户信息添加失败！');window.location.href='register.html';</script>";
        }
    }
    mysqli_close($link);
}

<?php

header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
include ("conn.php");
if(isset($_POST['Submit'])){
    $name=$_POST['add_name'];
    $pwd=$_POST['add_password'];
    $createtime=date('Y-m-d H:i:s');
    $sql=mysql_query("select admin_name from tb_admin where name='".$name."'",$link);
    $info=mysql_fetch_array($sql);
    if($info==true)
    {
        echo "<script>alert('该昵称已经存在!');window.location.href='admininfo.php';</script>";
        exit();
    }elseif($name==""&&$pwd==""){
        echo "<script language='JavaScript'>alert('请填写完全！');</script>";
    }else if($name!=""&&$pwd!="") {
        $sql = mysqli_query($link, "insert into tb_admin (admin_name,admin_pwd,createtime) VALUES ('$name','$pwd','$createtime')");
        if ($sql) {
            echo "<script language='JavaScript'>alert('用户信息添加成功！');window.location.href='index.php';</script>";
            session_start();
            $_SESSION['name']=$name;
            $_SESSION['pwd']=$pwd;

        } else {
            echo "<script language='JavaScript'>alert('用户信息添加失败！');window.location.href='register.html';</script>";
        }
    }
    mysqli_close($link);
}
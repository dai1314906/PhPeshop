<?php
include ("conn.php");
if(isset($_POST['Submit'])){
    $add_payway = $_POST['add_payway'];
    $sql = mysqli_query($link,"insert into tb_pay_method (pname) values ('$add_payway')");
    if ($sql){
        echo "<script language='JavaScript'>alert('添加成功！');window.location.href='payway.php';</script>";
    }else{
        echo "<script language='JavaScript'>alert('添加失败！');window.location.href='payway.php';</script>";
    }
}
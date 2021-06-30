<?php

header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
include ("conn.php");
session_start();
if(isset($_POST)){
    $getshop=$_POST['getshop'];
    $payway=$_POST['payway'];
    $ordernum=date("YmjHis");
    $createtime=date('Y-m-d H:i:s');
    $uid=$_SESSION['id'];
    $bid1 = $_SESSION['bid1'];

    $sql4= mysqli_query($link,"select * from tb_order_details where bid = '$bid1'");
    $row4=mysqli_fetch_array($sql4);
    $num=$row4['num'];
    if($num!=''&&$getshop!=''&&$payway!=''){

    $sql2 = mysqli_query($link,"select * from tb_commodity join tb_cart on tb_cart.cid=tb_commodity.cid");
    $row = mysqli_fetch_array($sql2);
    $commoney = $row["canum"]*$row["cprice"];

    $sql3 = mysqli_query($link,"select * from tb_buy join tb_order_details on tb_order_details.bid = tb_buy.bid ");
    $row3 = mysqli_fetch_array($sql3);
    $bid = $_SESSION['bid1'];

//    var_dump($bid);
//    $sql1 = mysqli_query($link, "insert into tb_buy (commoney,ship_data,payway,btime,uid) VALUES ('$commoney','$getshop','$payway','$createtime','$uid') where tb_buy.bid = '$bid'");

    $sql1 = mysqli_query($link,"update tb_buy set ship_data='$getshop',payway='$payway',btime='$createtime',uid='$uid' where bid='$bid'");

//    var_dump($sql1);
    unset($_SESSION['bid1']);

//    $sql1=mysqli_query($link,"update tb_eshop set shop_name='$u_shop',intro='$u_intro',typeshop='$u_type',num='$u_num',price='$u_price',brand='$u_brand',timeshop='$u_time',pic='$u_file',updatetime='$up_time'where sid='".$_GET["id"]."'");


    if($sql1) {
        echo "<script language='JavaScript'>alert('提交订单成功！');window.location.href='index.php';</script>";
    } else {
        echo "<script language='JavaScript'>alert('提交订单失败！');window.location.href='buy.php';</script>";
    }
    }
    else{
        echo "<script language='JavaScript'>alert('亲！还没选择物流，购买数量和付款!');history.go(-1);</script>";
    }
}

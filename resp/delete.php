<?php
session_start();
ob_start();
$shop_id=$_GET["id"];
$arr=$_SESSION["mycart"];
foreach($arr as$key=>$proId)
{
    if($key==$shop_id)
    {
        unset($arr[$key]);
    }
}
$_SESSION["mycart"]=$arr;
ob_clean();
header("location:cart.php");

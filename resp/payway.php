<?php
header("Content-Type:text/html;charset=utf-8");
include ("conn.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>支付方式</title>
</head>
<body>
<div>
    <br>
    <form action="buy_shop.php" method="post">
    <td align="center"><label>选择付款方式:&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <select name="pay_way" id="pay_way">
            <option selected value="银行付款">银行付款</option>
            <option value="支付宝">支付宝</option>
            <option value="微信支付">微信支付</option>
        </select></td>
    </form>
</div>
<div>
    <a href="order.php">查看我的订单</a>
</div>
</body>
</html>

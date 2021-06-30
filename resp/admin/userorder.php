<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="keywords" content="电商，用户中心"/>
    <meta name="author" content="戴林" />
    <meta name="discription" content="这是一个电商网站用户中心" />
    <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
    <title>订单管理</title>
    <style>
        body, html{
            margin: 0px;
            padding: 0px;
            text-align: center;/*文本居中*/
            background: white;/*背景颜色为白色*/
        }
        #container{
            position: relative; /*位置相对*/
            margin: 0 auto;/*版面居中*/
            padding: 0px;
            width: 1000px;/*宽度1000个像素*/
            text-align: left; /*左对齐*/
        }
        #banner{
            width: 1000px;/*宽度为1000px*/
            height: 50px;/*高度像素500px*/
            margin-top: 0px;/*外边距，顶部距离缩小29px*/
            padding: 0px;
            background-color: #F5F5F5;
        }
        .left{
            float: left;
        }
        .right {
            float: right;
            margin-right: 20px;
        }

        .menu a{
            color: brown;
            border-right: 1px #dddddd solid;
            padding:0 10px;
        }
        a{text-decoration: none;}/*无文本装饰*/
        .width{
            width: 1000px;
            margin: 0 auto;
        }
        .top_tel{
            font-size: 16px; margin-top: -36px;
        }
        .nav ul{
            width: 1000px;
            margin: 0 auto;
        }
        .nav li{
            float: left;
            display: inline;
        }
        .nav li a{
            display: block;
            line-height: 40px;
            padding: 0 100px;
        }
        nav li a:hover{
            text-decoration: none;
            color: black;
        }
        #content1{
            float: left;/*左浮动*/
            width: 1000px;/*宽度1000px*/
            height: 40px;/*高度600px*/
            background-color: cornflowerblue;/*背景颜色*/
            margin-top: -4px;/*外边距，顶部距离5px*/
            font-size: 20px;
            font-weight: bold;
        }
        #content2{
            float: left;/*向左浮动*/
            width: 1000px;/*宽度1000px*/

            margin-top: 0px;/*距离顶部60px*/
            background-color: white;
        }
        #content3{
            float: left;/*向左浮动*/
            width: 1000px;/*宽度1000px*/
            height: 20px;
            margin-top: 0px;/*距离顶部60px*/
            background-color: white;
        }
        #footer{
            float:left;/*左浮动*/
            text-align: justify;
            width: 1000px;/*宽度1000px*/
            height: 60px;/*高度为350px*/
            padding: 0px;
            margin-top: 0px;/*外边距，距离顶部20px*/
            background-color: #F5F5F5;/*背景颜色*/
            border-radius: 10px; /*圆角效果*/
        }
    </style>
</head>
<body>
<div id="container">

    <div id="banner" class="width">
        <div>
            <div class="left">
                <a href="" title="logo"><img src="images/1.jpg" alt=""> </a>
            </div>

            <a style="font-size: 20px;color: cornflowerblue; font-weight: bold; float: right; margin-top: 10px; margin-right: 470px;">管理员中心</a>
        </div>
    </div>

    <div id="content1">
        <div class="nav left">
            <ul>
                <li><a href="admin_center.php">商品管理</a> </li>
                <li><a href="admininfo.php">管理员信息管理</a> </li>
                <li><a href="userorder.php">订单管理</a> </li>

            </ul>
        </div>
    </div>
    <div id="content2">
        <br><br><br>
        <?php
        include ("conn.php");
        $username=$_SESSION["name"];
        //                $sql=mysqli_query($link,"select * from tb_user where username='$username'");
        //                $row =mysqli_fetch_object($sql);
        $sql = mysqli_query($link,"SELECT * from tb_address JOIN tb_user on tb_user.uid = tb_address.uid join tb_cart on tb_cart.uid = tb_user.uid join tb_commodity on tb_commodity.cid = tb_cart.cid join tb_order_details on tb_order_details.cid = tb_commodity.cid join tb_buy on tb_buy.bid = tb_order_details.bid ");
        $row = mysqli_fetch_array($sql);
        do {
            if($row['payway']!=''&&$row['ship_data']!=''&&$row['canum']!=''){
            ?>
            <table width="800" bgcolor="white" height="40" border="0" align="center" cellpadding="1" cellspacing="0">
                <td align="center" style="font-size: 20px; color: blue; font-weight: bold;">用户订单</td>
            </table>
            <br><br><br>

            <table width="1000" align="center" cellpadding="0" cellspacing="0">

                <table width="1000" bgcolor="#f5f5f5" height=" " border="0" align="center" cellpadding="1"
                       cellspacing="0">
                    <tr>
                        <td height="30" align="center" style="font-size: 16px;color: #FF6100;">收货人</td>
                        <td align="center" style="font-size: 16px;color: #FF6100;">联系电话</td>
                        <td align="center" style="font-size: 16px;color: #FF6100;">联系人操作</td>

                    </tr>


                    <tr>
                        <td height="10" align="center" valign="top"><?php echo $row['truename']; ?></td>
                        <td height="10" align=center valign="top"><?php echo $row['usertel']; ?></td>
                        <td height="10" align="center" valign="top"><a href="usercenter.php">更改</a></td>
                    </tr>

                </table>
            </table>
            <br><br>
            <table width="1000" bgcolor="#f5f5f5" height=" " border="0" align="center" cellpadding="1" cellspacing="0">
                <tr>

                    <td align="center" style="font-size: 16px;color: #FF6100;">详细地址</td>

                </tr>

                <tr>
                    <td height="10" align="center" valign="top"><?php echo $row['ad_content']; ?></td>
                </tr>

            </table>
            <br><br>
            <table width="1000" bgcolor="#f5f5f5" height=" " border="0" align="center" cellpadding="1" cellspacing="0">
                <tr>
                    <td height="30" align="center" style="font-size: 16px;color: #FF6100;">商品名称</td>
                    <td align="center" style="font-size: 16px;color: #FF6100;">商品详情</td>
                    <td align="center" style="font-size: 16px;color: #FF6100;">商品价格</td>
                    <td align="center" style="font-size: 16px;color: #FF6100;">购买数量</td>
                    <td align="center" style="font-size: 16px;color: #FF6100;">商品总计</td>


                </tr>
                <tr>

                    <td height="10" align="center" valign="top">
                        <div align="center"><?php echo $row["cname"]; ?></div>
                    </td>

                    <td height="10" align="center" valign="top">
                        <div align="center"><?php echo $row["cdetail"]; ?></div>
                    </td>

                    <td height="10" align="center" valign="top">
                        <div align="center"><?php echo $row["cprice"]; ?>元</div>
                    </td>
                    <td height="10" align="center" valign="top">
                        <div align="center"><?php echo $row["canum"]; ?></div>
                    </td>
                    <td height="10" align="center" valign="top">
                        <div align="center"><?php echo $row["canum"] * $row["cprice"]; ?>元</div>
                    </td>


                </tr>

            </table>
            <br><br>
            <table width="1000" bgcolor="#f5f5f5" height=" " border="0" align="center" cellpadding="1" cellspacing="0">


                <tr>
                    <td height="10" valign="top">支付方式:&nbsp;<?php echo $row['payway']; ?></td>
                </tr>
                <br>
                <tr>
                    <td valign="top" height="10">邮寄方式:&nbsp;<?php echo $row['ship_data']; ?></td>
                </tr>

            </table>
            <?php
            }
        }while($row = mysqli_fetch_array($sql));
        ?>
    </div>

    <div id="content2">
        <br><br><br>
        <?php
        include ("conn.php");
        $username=$_SESSION["name"];
        $uid = $_SESSION['id'];
        //                $sql=mysqli_query($link,"select * from tb_user where username='$username'");
        //                $row =mysqli_fetch_object($sql);
        $sql2 = mysqli_query($link,"SELECT * from tb_address join tb_user on tb_user.uid = tb_address.uid join tb_buy on tb_buy.uid = tb_user.uid join tb_order_details on tb_order_details.bid = tb_buy.bid join tb_commodity on tb_order_details.cid = tb_commodity.cid");
        $row1 = mysqli_fetch_array($sql2);
        do {
        if($row1['payway']!=''&&$row1['ship_data']!=''&&$row1['num']!=''){
            ?>
            <table width="800" bgcolor="white" height="40" border="0" align="center" cellpadding="1" cellspacing="0">
                <td align="center" style="font-size: 20px; color: #FF6100; font-weight: bold;">用户订单</td>
            </table>
            <br><br><br>
            <table width="1000" align="center" cellpadding="0" cellspacing="0">
                <table width="1000" bgcolor="#f5f5f5" height=" " border="0" align="center" cellpadding="1"
                       cellspacing="0">
                    <tr>
                        <td height="30" align="center" style="font-size: 16px;color: #FF6100;">收货人</td>
                        <td align="center" style="font-size: 16px;color: #FF6100;">联系电话</td>
                        <td align="center" style="font-size: 16px;color: #FF6100;">联系人操作</td>
                    </tr>
                    <tr>
                        <td height="10" align="center" valign="top"><?php echo $row1['truename']; ?></td>
                        <td height="10" align=center valign="top"><?php echo $row1['usertel']; ?></td>
                        <td height="10" align="center" valign="top"><a href="usercenter.php">更改</a></td>
                    </tr>
                </table>
            </table>
            <br><br>
            <table width="1000" bgcolor="#f5f5f5" height=" " border="0" align="center" cellpadding="1" cellspacing="0">
                <tr>
                    <td align="center" style="font-size: 16px;color: #FF6100;">详细地址</td>
                </tr>
                <tr>
                    <td height="10" align="center" valign="top"><?php echo $row1['ad_content']; ?></td>
                </tr>
            </table>
            <br><br>
            <table width="1000" bgcolor="#f5f5f5" height=" " border="0" align="center" cellpadding="1" cellspacing="0">
                <tr>
                    <td height="30" align="center" style="font-size: 16px;color: #FF6100;">商品名称</td>
                    <td align="center" style="font-size: 16px;color: #FF6100;">商品详情</td>
                    <td align="center" style="font-size: 16px;color: #FF6100;">商品价格</td>
                    <td align="center" style="font-size: 16px;color: #FF6100;">购买数量</td>
                    <td align="center" style="font-size: 16px;color: #FF6100;">商品总计</td>
                </tr>
                <tr>
                    <td height="10" align="center" valign="top">
                        <div align="center"><?php echo $row1["cname"]; ?></div>
                    </td>

                    <td height="10" align="center" valign="top">
                        <div align="center"><?php echo $row1["cdetail"]; ?></div>
                    </td>

                    <td height="10" align="center" valign="top">
                        <div align="center"><?php echo $row1["cprice"]; ?>元</div>
                    </td>
                    <td height="10" align="center" valign="top">
                        <div align="center"><?php echo $row1["num"]; ?></div>
                    </td>
                    <td height="10" align="center" valign="top">
                        <div align="center"><?php echo $row1["num"] * $row1["cprice"]; ?>元</div>
                    </td>
                </tr>
            </table>
            <br><br>
            <table width="1000" bgcolor="#f5f5f5" height=" " border="0" align="center" cellpadding="1" cellspacing="0">
                <tr>
                    <td height="10" valign="top">支付方式:&nbsp;<?php echo $row1['payway']; ?></td>
                </tr>
                <br>
                <tr>
                    <td valign="top" height="10">邮寄方式:&nbsp;<?php echo $row1['ship_data']; ?></td>
                </tr>
                <br>
                <tr>
                    <td valign="top" height="10">购买时间:&nbsp;<?php echo $row1['btime']; ?></td>
                </tr>
            </table>
            <?php
            }
        }while($row1 = mysqli_fetch_array($sql2));
        ?>
    </div>
    <div id="content3">

    </div>
    <div id="footer">
        重庆师范大学计算机与信息科学学院 计算机科学与技术专业 学号:20180501603017 姓名:戴林 电话:15310563225 QQ:2722420231 3462596881 微信:wxid_0jdp70nt33t422 商业做网页或者网站，有意者请联系!
    </div>
</div>
</body>
</html>

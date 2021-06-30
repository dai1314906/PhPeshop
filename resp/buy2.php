<?php
header ("Content-Type:text/html;charset=utf-8");
session_start();
if($_SESSION["name"]=="") {
    echo "<script>alert('您还没有登录,请先登录!');history.back();</script>";
    exit;
}
?>
<?php
include ("conn.php");
//$cid = $_GET['id'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="keywords" content="电商，用户中心"/>
    <meta name="author" content="戴林" />
    <meta name="discription" content="这是一个电商网站用户中心" />
    <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
    <title>商品购买</title>
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
            padding: 0 70px;
        }
        nav li a:hover{
            text-decoration: none;
            color: #FF6100;
        }

        #content2{
            float: left;/*向左浮动*/
            width: 1000px;/*宽度1000px*/

            margin-top: 0px;/*距离顶部60px*/
            background-color: #ffffff;
        }
        #content3{
            float: left;/*向左浮动*/
            width: 1000px;/*宽度1000px*/
            height: 20px;
            margin-top: 0px;/*距离顶部60px*/
            background-color: #ffffff;
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
        .box1{
            box-shadow: -2px 0 3px #C0C0C0,0 -2px 3px #C0C0C0,0 2px 3px #C0C0C0,2px 0 3px #C0C0C0;/*文本框阴影*/
        }
    </style>
</head>
<body>
<div id="container">

    <div id="banner" class="width">
        <tb style="font-size: 26px; margin-left: 20px; text-align: center; color: #FF6100; font-weight: bold;">提交订单</tb>
        <a style="float: right;font-size: 20px; margin-right: 30px; text-decoration: underline;" href="index.php">返回淘宝大学首页</a>
    </div>
    <div id="content2">
        <br><br>
        <table width="800" bgcolor="white" height="40" border="0" align="center" cellpadding="1" cellspacing="0" >
            <td align="center" style="font-size: 20px; color: #FF6100; font-weight: bold;">确认无误？请提交订单！</td>
        </table>
        <br><br><br>
        收货地址
        <br><br>
        <table width="1000" bgcolor="#f5f5f5" height=" " border="0" align="center" cellpadding="1" cellspacing="0" >
            <tr>

                <td align="center" style="font-size: 16px;color: #FF6100;">收货人</td>
                <td align="center" style="font-size: 16px;color: #FF6100;">收货人电话</td>
                <td align="center" style="font-size: 16px;color: #FF6100;">详细地址</td>
                <td align="center" style="font-size: 16px;color: #FF6100;">更改地址</td>
            </tr>
            <?php
            include ("conn.php");
            $uid=$_SESSION['id'];
            // $sql=mysqli_query($link,"select * from tb_euser us  join tb_address ad on ad.uid=us.uid where us.username='$username'");
            $sql = mysqli_query($link,"select * from tb_address where uid = '$uid'");
            $row =mysqli_fetch_object($sql);
            do{
                ?>
                <tr>
                    <td height="10" align="center" valign="top"><?php echo $row->consigner;?></td>
                    <td height="10" align="center" valign="top"><?php echo $row->tel;?></td>
                    <td height="10" align="center" valign="top"><?php echo $row->ad_content;?></td>
                    <td height="10" align="center" valign="top">更改</td>
                </tr>
                <?php
            }while($row=mysqli_fetch_object($sql))
            ?>
        </table>
        <br><br>
        <table width="1000" bgcolor="#f5f5f5" height=" " border="0" align="center" cellpadding="1" cellspacing="0" >
            确认订单信息
            <!--            --><?php
            //            //	session_register("total");
            //            $_SESSION["total1"]="total1";
            //            if(isset($_GET["qk"])){
            //                if($_GET["qk"]=="yes"){
            //                    $_SESSION["producelist"]="";
            //                    $_SESSION["quatity"]="";
            //                }}
            //            $arraygwc=explode("@",$_SESSION["producelist"]);
            //            $s=0;
            //            for($i=0;$i<count($arraygwc);$i++){
            //                $s+=intval($arraygwc[$i]);
            //            }
            //            if($s==0 ){
            //                echo "<tr>";
            //                echo" <td height='25' colspan='6' bgcolor='#FFFFFF' align='center'>您的购物车为空!</td>";
            //                echo"</tr>";
            //            }
            //            else{
            //                ?>

            <tr>
                <td height="30" align="center" style="font-size: 16px;color: #FF6100;">商品图片</td>
                <td align="center" style="font-size: 16px;color: #FF6100;">商品详情</td>
                <td align="center" style="font-size: 16px;color: #FF6100;">商品单价</td>
                <td align="center" style="font-size: 16px;color: #FF6100;">购买数量</td>
                <td align="center" style="font-size: 16px;color: #FF6100;">商品总计</td>


            </tr>

            <?php
            //$username = $_SESSION['name'];

            $cid=$_SESSION["ccid"];

            echo $cid;
            $bid = $_SESSION['bid1'];
            $sql = mysqli_query($link, "select * from tb_buy JOIN tb_order_details on tb_order_details.bid = tb_buy.bid join tb_commodity on tb_commodity.cid = tb_order_details.cid where tb_commodity.cid = '$cid'and tb_order_details.bid='$bid'");
            $info = mysqli_fetch_array($sql);
            //
//            $sql3 = mysqli_query($link,"select * from tb_order_details");
//            $info2 = mysqli_fetch_array($sql3);
            ?>
            <tr>

                <td height="10" align="center" valign="top">
                    <div align="center"><?php echo $info["cpic"]; ?></div>
                </td>

                <td height="10" align="center" valign="top">
                    <div align="center"><?php echo $info["cdetail"]; ?>元</div>
                </td>
                <td height="10" align="center" valign="top">
                    <div align="center"><?php echo $info["cprice"]; ?>元</div>
                </td>
                <td height="10" align="center" valign="top">
                    <div align="center">
                        <div align="center">
                            <form action="update_details_num.php" method="post">
                                <input type="text" name="counts" id="counts" size="2" value="<?php echo $info["num"];?>">
                                <input type="hidden" name="bid" id="bid" value="<?php echo $info["bid"];?>">
                                <input type="submit" name="Submit" value="更改">
                            </form>
                        </div>
                </td>

                <td height="10" align="center" valign="top">
                    <div align="center"><?php echo $info["num"] * $info["cprice"]; ?>元</div>
                </td>
            </tr>

            <?php

            ?>

        </table>
        <br><br>
        <form method="post" action="buy_shop2.php">
            <table width="1000" bgcolor="#F5F5F5" height="40" border="0" align="center" cellpadding="1" cellspacing="0" >

                <td align="center"><label>选择送货方式:&nbsp;&nbsp;&nbsp;&nbsp;</label>

                    <input type="checkbox" name="getshop" id="getshop" value="顺丰快递"><label>顺丰快递</label>
                    <input type="checkbox" name="getshop" id="getshop" value="邮政快递"><label>邮政快递</label>
                    <input type="checkbox" name="getshop" id="getshop" value="圆通快递"><label>圆通快递</label>
                    <input type="checkbox" name="getshop" id="getshop" value="天天快递"><label>天天快递</label>
                </td>

                <td align="center"><label>选择付款方式:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <?php
                        $sql3 = mysqli_query($link,"select * from tb_pay_method");
                        $row3 = mysqli_fetch_array($sql3);
                        do{
                    ?>
                    <input type="checkbox" name="payway" id="payway" value="<?php echo $row3['pname'];?>"><label><?php echo $row3['pname'];?></label>
                    <?php
                        }while($row3= mysqli_fetch_array($sql3));
                    ?>
                </td>
            </table>
            <br><br>
            <table width="800" bgcolor="#F5F5F5" height="40" border="0" align="center" cellpadding="1" cellspacing="0" >
                <td align="center"><a style="font-size: 20px; color: #FF6100;" target=""><input type="submit" value="结算"></a></td>
            </table>
        </form>
    </div>
<!--    <div id="content3">-->
<!--        --><?php //$sql2 = mysqli_query($link,"select * from tb_commodity join tb_cart on tb_cart.cid=tb_commodity.cid");
//        $row = mysqli_fetch_array($sql2);
//        $commoney = $row["canum"]*$row["cprice"];
//        var_dump($commoney);?>
<!--    </div>-->
    <div id="footer">
        重庆师范大学计算机与信息科学学院 计算机科学与技术专业 学号:20180501603017 姓名:戴林 电话:15310563225 QQ:2722420231 3462596881 微信:wxid_0jdp70nt33t422 商业做网页或者网站，有意者请联系!
    </div>
    <?php

    ?>
</div>
</body>
</html>

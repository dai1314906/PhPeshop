<?php
header("Content-Type:text/html;charset=utf-8");
include ("conn.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="keywords" content="电商，用户中心"/>
    <meta name="author" content="戴林" />
    <meta name="discription" content="这是一个电商网站用户中心" />
    <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
    <title>商品更新</title>
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
            padding: 0 100px;
        }
        nav li a:hover{
            text-decoration: none;
            color: black;
        }

        #content2{
            text-align: center;
            float: left;/*向左浮动*/
            width: 1000px;/*宽度1000px*/

            margin-top: -3px;/*距离顶部60px*/
            background-color: white;
        }
        #content3{
            text-align: center;
            float: left;/*向左浮动*/
            width: 1000px;/*宽度1000px*/
            height: 20px;
            margin-top: -3px;/*距离顶部60px*/
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

            <a style="font-size: 20px;color: cornflowerblue; font-weight: bold; float: right; margin-top: 10px; margin-right: 440px;">管理员更改商品</a>

        </div>
    </div>

    <div id="content2">
        <br><br><br>
        <table width="800" bgcolor="white" height="40" border="0" align="center" cellpadding="1" cellspacing="0" >
            <td align="center" style="font-size: 20px; color: cornflowerblue; font-weight: bold;">选择更改商品</td>
        </table>
        <br><br><br>
        <table width="1000" bgcolor="#f5f5f5" height=" " border="0" align="center" cellpadding="1" cellspacing="0" >
            <tr>
                <td height="30" align="center" style="font-size: 16px;color: #FF6100;">商品名称</td>
                <td align="center" style="font-size: 16px;color: #FF6100;">商品详情</td>
                <td align="center" style="font-size: 16px;color: #FF6100;">商品销量</td>
                <td align="center" style="font-size: 16px;color: #FF6100;">商品库存</td>
                <td align="center" style="font-size: 16px;color: #FF6100;">商品价格</td>
                <td align="center" style="font-size: 16px;color: #FF6100;">商品图片</td>

            </tr>


            <?php
            $sql=mysqli_query($link,"select count(*) as total from tb_eshop ");
            $info=mysqli_fetch_array($sql);
            $total=$info["total"];
            if($total==0){
                echo "本站暂无商品!";
            }
            else {
                ?>


                <?php
                include("conn.php");
                $sql1 = mysqli_query($link, "select * from tb_commodity");
                while ($row = mysqli_fetch_array($sql1)) {
                    ?>
                    <tr>
                        <td height="10" align="center" valign="top"><?php echo $row['cname']; ?></td>
                        <td height="10" align="center" valign="top"><?php echo $row['cdetail']; ?></td>
                        <td height="10" align="center" valign="top"><?php echo $row['csale']; ?></td>
                        <td height="10" align="center" valign="top"><?php echo $row['cnum']; ?></td>
                        <td height="10" align="center" valign="top"><?php echo $row['cprice']; ?></td>
                        <td height="10" align="center" valign="top"><?php echo $row['cpic']; ?></td>

                        <td height="10" align="center" valign="top"><a
                                href="update_shop_1.php?id=<?php echo $row['sid']; ?>">更改</a></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>

        <br><br><br>
        <table width="1000" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
        <a style="font-size: 20px;color: cornflowerblue; font-weight: bold; text-decoration: underline;" href="delete.php">下架商品</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a style="font-size: 20px;color: cornflowerblue; font-weight: bold; text-decoration: underline;" href="admin_center.php">返回管理员中心</a>
        </table>
    </div>
    <div id="content3">

    </div>
    <div id="footer">

        重庆师范大学计算机与信息科学学院 计算机科学与技术专业 学号:20180501603017 姓名:戴林 电话:15310563225 QQ:2722420231 3462596881 微信:wxid_0jdp70nt33t422 商业做网页或者网站，有意者请联系!
    </div>
</div>
</body>
</html>

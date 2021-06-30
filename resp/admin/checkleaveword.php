<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="keywords" content="电商，用户中心"/>
    <meta name="author" content="戴林" />
    <meta name="discription" content="这是一个电商网站用户中心" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
    <title>商品管理</title>
    <style>

        @media screen and (min-width: 1200px) {
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
                padding: 0 10px;
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
                text-align: center;
                float: left;/*向左浮动*/
                width: 1000px;/*宽度1000px*/
                height: 600px;/*高度680px*/
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
                <li><a href="advertising.php">添加广告</a></li>
                <li><a href="link.php">添加友情链接</a></li>
                <li><a href="essay.php">添加文章</a></li>
                <li><a href="payway.php">添加支付方式</a></li>
                <li><a href="category_com.php">添加商品分类</a></li>
            </ul>
        </div>
    </div>
    <div id="content2">
        <br><br><br>
        <table width="800" bgcolor="white" height="40" border="0" align="center" cellpadding="1" cellspacing="0" >
            <td align="center" style="font-size: 20px; color: cornflowerblue; font-weight: bold;">用户留言！</td>
        </table>
        <br>

            <?php
            include ("conn.php");

            $sql = mysqli_query($link,"select * from tb_leaveword");
            $row = mysqli_fetch_array($sql);
            do{
            ?>
                <div id="littlecontent-1">
                    <li><?php echo $row['lcontent'];?></li><br>
                </div>
        <?php
        }while($row= mysqli_fetch_array($sql));
        ?>

    </div>
    <div id="footer">
        重庆师范大学计算机与信息科学学院 计算机科学与技术专业 学号:20180501603017 姓名:戴林 电话:15310563225 QQ:2722420231 3462596881 微信:wxid_0jdp70nt33t422 商业做网页或者网站，有意者请联系!
    </div>
</div>
</body>
</html>
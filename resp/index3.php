<?php
session_start();
$_SESSION['name'];
//var_dump($_SESSION['name']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap3.3.7/css/bootstrap-theme.css">
    <link href="css/style1.css" rel="stylesheet">
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="bootstrap3.3.7/js/bootstrap.js"></script>
    <title>手机</title>
    <style type="text/css">
        /* body {
            padding: 10px;
            background-color: #000;
            color: #fff;
        } */
        #container{
            background-color: white;
            text-align: center;
            width:100%;
            height: 100%;
            margin: 0px auto;
        }
        #container1{
            width: 100%;
            height: 500px;
            /* background-image: linear-gradient(to bottom left,rgb(55, 71, 94),rgb(217, 161, 79) ); */
            /* background: url('4.jpg') no-repeat center; */
            background-color: rgb(248, 248, 248);
        }
        /* #container2{
            width: 100%;
            height: 700px;*/
        /* background-image: linear-gradient(to bottom left,rgb(55, 71, 94),rgb(217, 161, 79) ); */
        /* background: url('4.jpg') no-repeat center; */
        /* background-color:red; */
        /* }  */
        #banner{
            background-color: white;
            width: 100%;
            height: 53px;
            margin: 0px auto;
        }
        .banner-left{
            margin-left: 50px;
        }
        #banner1{
            background-color: white;
            width: 100%;
            height: 53px;
            margin: 0px auto;
        }
        #content{
            width: 100%;
            height: 100%;
        }
        #block{
            height: 350px;
            width: 300px;
            float: right;
            margin-right: 50px;
            /* background-color: rgb(248, 248, 248); */
            background-color: yellow;
            margin-top: 75px;
        }
        .banner1-right{
            padding-right: 100px;
        }
        .menu1{
            float: right;
        }
        .menu2{

            text-align: center;
        }
        .menu1 a{
            color: brown;
            border-right: 1px #dddddd solid;
            padding:0 10px;
        }
        .banner-paiban{
            font-size: 20px;
            text-align: center;
        }
        #footer{
            width: 100%;
            height: 100%;
            margin: 0px auto;
            background-color: white;
            /*background-color: #FF6100;*/
        }

        .footer-paiban{
            font-size: 16px;
        }
        /* .box{
            margin-left: -20px;
        } */

        #blank{
            width: 100%;
            height: 30px;
            background-color:white;
        }
        .left{
            opacity: 0.0;
            visibility:hidden;
        }
        .right{
            opacity: 0.0;
            visibility:hidden;
        }
        @media screen {

        }
    </style>
</head>
<body>
<div id="container">
    <div  class="navbar navbar-default" role="navigation">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="sr-only">导航展开</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="banner-left">
                <img class="img-responsive" src="images/6.png" alt="logo">
            </div>
        </div>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav menu1  banner-paiban">
                <li><a href="login.html">用户登录</a> </li>
                <li><a href="register.html">用户注册</a> </li>
                <li><a href="usercenter.php">用户中心</a> </li>
                <li><a href="cart.php">购物车</a> </li>
                <li><a href="order.php">订单查询</a> </li>
                <li><a href="#">网站导航</a> </li>
                <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">下拉菜单<b class="caret"></b> </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">下拉菜单1</a> </li>
                        <li class="divider"></li>
                        <li><a href="#">下拉菜 d单2</a> </li>
                        <li class="divider"></li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>
    <div class="navbar navbar-default ">
        <form class="navbar-form  center-block " role="search">
            <div class="form-group">
                <input type="text" class="form-control " placeholder="关键字">
            </div>
            <button type="submit" class="btn btn-default">提交</button>
        </form>
    </div>
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menux">
                <span class="sr-only">导航展开</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="menux">
            <ul class="nav navbar-nav menu2  banner-paiban">
                <li style="margin-left: 100px;"><a href="index.php">首页</a></li>
                <li style="margin-left: 100px;"><a href="index2.php">电脑</a></li>
                <li style="margin-left: 100px;"><a href="index3.php">手机</a></li>
                <li style="margin-left: 100px;"><a href="index4.php">键盘</a></li>
                <li style="margin-left: 100px;"><a href="notice.php" target="_blank">公告</a></li>
                <li style="margin-left: 100px;"><a href="usercenter.php">当前用户》<?php echo $_SESSION['name']?></a></li>
                <li style="margin-left: 100px;"><a href="destroy.php">注销离开</a></li>
                <li style="margin-left: 100px;"><a href="consult.php">回复消息</a></li>
            </ul>
        </div>
    </nav>
    <div id="container1" class="col-sm-12">
        <div class="container1">
            <!-- Example row of columns -->
            <div class="row">
                <div class="span4">
                    <div id="myCarousel" class="carousel slide">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item"><img src="images/s1.png" alt=""  /></div>
                            <div class="item"><img src="images/s2.png" alt=""  /></div>
                            <div class="item"><img src="images/s3.png" alt=""  /></div>
                            <div class="item"><img src="images/g3.png" alt="" /></div>
                        </div>
                        <!-- Carousel nav -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
                    </div>
                    <script type="text/javascript" src="js/script.js"></script>
                    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
                    <script type="text/javascript" src="bootstrap3.3.7/js/bootstrap.js"></script>
                    <script type="text/javascript">
                        $('.carousel').carousel({
                            interval: 2000
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div id="blank" class="col-lg-12"></div>
    <div id="content">
        <div class="row">
            <?php
            include ("conn.php");
            $sql=mysqli_query($link,"select * from tb_commodity join tb_commodity_category on tb_commodity_category.category_name = tb_commodity.category_name where tb_commodity.category_name = '手机'");
            $row=mysqli_fetch_array($sql);
            if($row==false) {
                echo "无商品！！";
            }else{
                do{
                    ?>
                    <div class="text-center col-lg-3">
                        <div class="box">
                            <a href="shop.php?id=<?php echo $row["cid"];?>"><img class="img-responsive" src="<?php echo $row['cpic'];?>"></a>
                            <li style="font-size: 16px;">商品名称:<a href="shop.php?id=<?php echo $row['cid'];?>"><?php echo $row['cname'];?></a></li>
                            <li style="font-size: 16px;">商品价格:<?php echo $row['cprice'];?></li>
                        </div>
                    </div>
                    <?php
                }while($row=mysqli_fetch_array($sql));
            }
            ?>
        </div>
    </div>
    <div id="blank" class="col-lg-12"></div>
    <div id="footer"class="col-sm-12">

        <p class="footer-paiban">
            <a href="" style="color: black;">关于本站</a>&nbsp;&nbsp;
            <a href="" style="color: black;">帮助中心</a>&nbsp;&nbsp;
            <a href="" style="color: black;">开放平台</a>&nbsp;&nbsp;
            <a href="" style="color: black;">诚聘英才</a>&nbsp;&nbsp;
            <a href="" style="color: black;">联系我们</a>&nbsp;&nbsp;
            <a href="" style="color: black;">网站合作</a>&nbsp;&nbsp;
            <a href="" style="color: black;">法律声明</a>&nbsp;&nbsp;
            <a href="" style="color: black;">隐私权政策</a>&nbsp;&nbsp;
            <a href="" style="color: black;">知识产权</a>&nbsp;&nbsp;
            <a href="" style="color: black;">廉政举报</a>&nbsp;&nbsp;
        </p>
        <p class="footer-paiban">
            <a href="" style="color: black;">阿里巴巴集团</a>&nbsp;
            <a href="" style="color: black;">淘宝网</a>&nbsp;
            <a href="" style="color: black;">天猫</a>&nbsp;
            <a href="" style="color: black;">聚划算</a>&nbsp;
            <a href="" style="color: black;">飞猪</a>&nbsp;
            <a href="" style="color: black;">阿里云</a>&nbsp;
            <a href="" style="color: black;">高德</a>&nbsp;
            <a href="" style="color: black;">咸鱼</a>&nbsp;
            <a href="" style="color: black;">钉钉</a>&nbsp;
            <a href="" style="color: black;">蚂蚁金服</a>&nbsp;
            <a href="" style="color: black;">阿里通信</a>&nbsp;
            <a href="" style="color: black;">UC</a>&nbsp;
            <a href="" style="color: black;">虾米</a>&nbsp;
            <a href="" style="color: black;">网易</a>&nbsp;
            <a href="" style="color: black;">支付宝</a>&nbsp;
            <a href="" style="color: black;">阿里安全</a>&nbsp;
            <a href="" style="color: black;">美团</a>&nbsp;
            <a href="" style="color: black;">苏宁</a>&nbsp;
        </p>
        <p>
            <a href="" style="color: black;">增值电信业务经营许可证： 浙B2-20110446</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" style="color: black;">市场名称登记证：工商网市字3301004119号</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" style="color: black;">出版物网络交易平台服务经营备案证： 新出发浙备字第001号</a>
        </p>
        <p>
            <a href="" style="color: black;">互联网违法和不良信息举报电话：0571-81683755 blxxjb@alibaba-inc.com</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" style="color: black;">互联网药品信息服务资质证书编号：浙-（经营性）-2017-0005</a>
        </p>
        <p>
            <a href="" style="color: black;">医疗器械网络交易服务第三方平台备案：（浙）网械平台备字[2018]第00002号</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" style="color: black;">互联网药品交易服务资格证书：国A20150001</a>
        </p>
        <p>
            <a href="" style="color: black;">浙江省网络食品销售第三方平台提供者备案：浙网食A33010002z</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" style="color: black;">© 2003-2020 TBDX.COM 版权所有</a>
        </p>
        <p>
            重庆师范大学计算机与信息科学学院 计算机科学与技术专业 学号:20180501603017 姓名:戴林 电话:15310563225
        </p>
        <p>
            QQ:2722420231 3462596881 微信:wxid_0jdp70nt33t422 商业做网页或者网站，有意者请联系!
        </p>

    </div>
</div>
</body>
</html>


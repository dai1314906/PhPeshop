<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
if($_SESSION["name"]=="") {
    echo "<script>alert('您还没有登录,请先登录!');history.back();</script>";
    exit;
}
?>
<?php
include ("conn.php");
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
    <title>电脑</title>
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
            height: 600px;
            /* background-image: linear-gradient(to bottom left,rgb(55, 71, 94),rgb(217, 161, 79) ); */
            /* background: url('4.jpg') no-repeat center; */
            background-color: rgb(248, 248, 248);
            /* background-color: ; */
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
            height: 500px;
            width: 600px;
            background-color: white;
            margin: 0px auto;
        }

        .menu1{
            float: right;
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
        }
        .footer-paiban{
            font-size: 16px;
        }
        #blank{
            width: 100%;
            height: 30px;
            background-color:white;
        }
        .font{
            color: #FF6100;
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
                <li><a href="index.php">返回首页</a> </li>
            </ul>
        </div>
    </div>

    <div>
        <h3>用户信息</h3>
    </div>
    <br>
    <div id="container1">
        <br>
        <div id="block">
            <h3 class="font">当前用户信息</h3>
            <br>
            <?php
            // $sql=mysqli_query($link,"select * from tb_euser where username='".$_SESSION["name"]."'");
            $username = $_SESSION['name'];
            $sql = mysqli_query($link,"select * from tb_user where username = '$username'");
            $info=mysqli_fetch_array($sql);
            ?>
            <form method="post" action="changeuser.php">
                <div class="form-group">
                    <span class="glyphicon glyphicon-user"></span>
                    <input type="text" name="update_name" id="update_name" value="<?php echo $info["username"];?>">
                </div>
                <div class="form-group">
                    <span class="glyphicon glyphicon-user"></span>
                    <input type="text" name="update_truename" id="update_truename" value="<?php echo $info["truename"];?>">
                </div>
                <div class="form-group">
                    <span class="glyphicon glyphicon-user"></span>
                    <input type="text" name="update_sex" id="update_sex" value="<?php echo $info["sex"];?>">
                </div>
                <div class="form-group">
                    <span class="glyphicon glyphicon-lock"></span>
                    <input type="password" name="update_password" id="update_password" value="<?php echo $info["pwd"];?>">
                </div>

                <div class="form-group">
                    <span class="glyphicon glyphicon-phone-alt"></span>
                    <input type="text" name="update_tel" id="update_tel" value="<?php echo $info["usertel"];?>">
                </div>
                <div class="form-group">
                    <span class="glyphicon glyphicon-envelope"></span>
                    <input type="text" name="update_email" id="update_email" value="<?php echo $info["email"];?>">
                </div>
                <br>
                <div>
                    <p  style="text-align: center; font-size: 18px;">若信息不对请修改！</p>
                </div>
                <div class="form-group">
                    <button type="submit" name="Submit" class="btn btn_lg fontcolor">更改</button>
                    <button type="reset" name="Reset" class="btn btn_lg fontcolor">重置</button>
                </div>
                <div>
                    <a href="address.php"><h3 class="font">前往添加地址!</h3></a>

                </div>
            </form>
        </div>
    </div>

    <div id="blank" class="col-lg-12"></div>

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

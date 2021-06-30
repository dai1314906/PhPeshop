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
    <title>系统更新</title>
    <style type="text/css">
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
            /*background: url('4.jpg') no-repeat center;*/
            background-color: rgb(248, 248, 248);
            text-align: left;
            margin: 0px auto;

        }

        #footer{
            width: 100%;
            height: 300px;
            margin: 0px auto;
            background-color: white;
        }
        .menu a{
            color: black;
            border-right: 2px #dddddd solid;
            padding:0 10px;
        }
        .footer-paiban{
            font-size: 16px;
        }
        #blank{
            width: 100%;
            height: 10px;
            background-color:white;
        }
        .menu1{
            float: right;
            font-size: 18px;
        }
        .menu1 a{
            color: brown;
            border-right: 1px #dddddd solid;
            padding:0 10px;
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
                <li><a href="notice.php">公司简介</a> </li>
                <li><a href="index5.php">系统升级</a> </li>
                <li><a href="index6.php">服务信息</a> </li>
                <li><a href="leaveword.php">联系我们</a> </li>
            </ul>
        </div>
    </div>
    <div id="container1">
        <div>
            <?php
            include ("conn.php");
            $sql1 = mysqli_query($link,"select * from tb_essay join tb_essay_category on tb_essay_category.tec_name = tb_essay.tec_name where tb_essay.tec_name = '系统升级'");
            $row1 = mysqli_fetch_array($sql1);
            ?>
            <div id="littlecontent-1">
            <h3><p class="" style="text-align: center;" ><?php echo $row1['eheadline'];?></p></h3>
            </div>
            <div id="content3">
                <div id="content4">

                </div>
                <h3><p style="text-align: center;" > <?php echo $row1['econtent']?></p></h3>
            </div>
        </div>
    </div>
    <div id="blank"></div>
    <div id="footer">

        <div class="menu">
            <p class="footer-paiban">
                <a href="" target="">关于我们</a>
                <a href="" target="">联系我们</a>
                <a href="" target="">人才招聘</a>
                <a href="" target="">商家入驻</a>
                <a href="" target="">广告服务</a>
                <a href="" target="">手机淘宝</a>
                <a href="" target="">友情链接</a>
                <a href="" target="">销售联盟</a>
                <a href="" target="">淘宝社区</a>
                <a href="" target="">阿里公益</a>
                <a href="" target="">技术支持</a>
            </p>
        </div>
        <p class="footer-paiban">
            © 2003-2020 TBDX.COM 版权所有
        </p>
        <p class="footer-paiban">
            重庆师范大学计算机与信息科学学院 计算机科学与技术专业 学号:20180501603017 姓名:戴林
        </p>
        <p>
            电话:15310563225 QQ:2722420231 3462596881 微信:wxid_0jdp70nt33t422 商业做网页或者网站，有意者请联系!
        </p>
    </div>
</div>
</body>
</html>
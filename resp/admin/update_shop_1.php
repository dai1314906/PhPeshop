<?php
header("Content-Type:text/html;charset=utf-8");
include ("conn.php");
?>
<?php
include("conn.php");
$id=$_GET["id"];
$sql=mysqli_query($link,"select * from tb_eshop where sid=$id");
$info=mysqli_fetch_array($sql);
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

            <a style="font-size: 20px;color: cornflowerblue; font-weight: bold; float: right; margin-top: 10px; margin-right: 460px;">管理员中心</a>

        </div>
    </div>

    <div id="content2">
        <br><br>
        <table width="800" bgcolor="white" height="40" border="0" align="center" cellpadding="1" cellspacing="0" >
            <td align="center" style="font-size: 20px; color: #FF6100; font-weight: bold;">更新商品！</td>
        </table>
        <br><br>
        <form method="post" action="update_shop.php?id=<?php echo $_GET["id"];?>" onsubmit="return checkForm()" >


            <label style="color: cornflowerblue;">商品名称:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="up_shop" id="up_shop" value="<?php echo $info["shop_name"];?>">
            <span id="admin_shop" class="error">*</span><br><br>

            <label style="color: cornflowerblue;">商品简介:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="up_intro" id="up_intro" value="<?php echo $info["intro"];?>">
            <span id="admin_intro" class="error">*</span><br><br>

            <label style="color: cornflowerblue;">商品型号:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="up_type" id="up_type" value="<?php echo $info["typeshop"];?>">
            <span id="admin_type" class="error">*</span><br><br>

            <label style="color: cornflowerblue;">商品品牌:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="up_brand" id="up_brand" value="<?php echo $info["brand"];?>">
            <span id="admin_brand" class="error">*</span><br><br>

            <label style="color: cornflowerblue;">商品数量:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="up_num" id="up_num" value="<?php echo $info["num"];?>">
            <span id="admin_num" class="error">*</span><br><br>

            <label style="color: cornflowerblue;">商品价格:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="up_price" id="up_price" value="<?php echo $info["price"];?>">
            <span id="admin_price" class="error">*</span><br><br>

            <label style="color: cornflowerblue;">上市时间:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="up_time" id="up_time" value="<?php echo $info["timeshop"];?>">
            <span id="admin_time" class="error">*</span><br><br>

            <label style="color: cornflowerblue;">商品图片:</label>
            <input type="file" name="up_file" id="up_file" value="<?php echo $info["pic"];?>">
            <span id="admin_file" class="error">*</span><br><br>

            <input class="btn" type="submit" name="Submit" value="更新">&nbsp;&nbsp;<input class="btn" type="reset" name="Reset" value="重置">
        </form>

        <br><br>
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

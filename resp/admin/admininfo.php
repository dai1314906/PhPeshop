<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="keywords" content="电商，用户中心"/>
    <meta name="author" content="戴林" />
    <meta name="discription" content="这是一个电商网站用户中心" />
    <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
    <title>用户信息管理</title>
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
            padding: 0 50px;
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
        .wrapper{
            background-color: #F5F5F5;
            text-align: center;
            width:600px;
            margin:80px auto;
        }
        h2{
            background-color: cornflowerblue;
            margin:0px;
            text-align:center;
        }
        .add{
            margin:20px auto;
        }
        .add labal{
            text-align: center;
            background-color: 	cornflowerblue;
            color: #fff;

        }
        .btn {
            background-color: cornflowerblue;
            border-radius:8px;
            color: white;
            width: 100px;
            height: 35px;
            font-size: 16px;
        }
        .error {
            color: #FF0000;
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
                <li><a href="checkcom.php">查看商品留言</a></li>
                <li><a href="checkleaveword.php">查看留言</li>
            </ul>
        </div>
    </div>

    <div  class="wrapper">
        <h2>管理员注册系统</h2>

        <div class="add">
        <form method="post" action="regadmin.php" onsubmit="return checkForm()" >
            <label>用户名:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="add_name" id="add_name" placeholder="请设置用户名">
            <span id="user_name" class="error">*</span><br><br>

            <label>密&nbsp;&nbsp;&nbsp;码:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="password" name="add_password" id="add_password" placeholder="请设置密码">
            <span id="user_password" class="error">*</span><br><br>

            <label>确认密码:</label>
            <input type="password" name="upassword" id="upassword" placeholder="请再次输入密码">
            <span id="uupassword" class="error">*</span><br><br>

            <input class="btn" type="submit" name="Submit" value="注册">&nbsp;&nbsp;<input class="btn" type="reset" name="Reset" value="重置">
        </form>
        </div>
        <br><br>
        <table width="600" bgcolor="#f5f5f5" height="40" border="0" align="center" cellpadding="1" cellspacing="0" >
            <td align="center"><a href="index.php" style="font-size: 20px; color: cornflowerblue;">已注册？请返回登录！</a></td>
        </table>
    </div>
    <div id="footer">
        重庆师范大学计算机与信息科学学院 计算机科学与技术专业 学号:20180501603017 姓名:戴林 电话:15310563225 QQ:2722420231 3462596881 微信:wxid_0jdp70nt33t422 商业做网页或者网站，有意者请联系!
    </div>
</div>
</body>
</html>

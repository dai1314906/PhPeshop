<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>后台管理登录界面</title>
    <script src="js/login.js"></script>
    <style type="text/css">
        .wrapper{
            background-color: #F5F5F5;
            text-align: center;
            width:600px;
            margin:80px auto;
        }
        #content3{
            background-color: #F5F5F5;
            text-align: center;
            width:600px;
            height: 30px;
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
            margin:20px auto;
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
<div class="wrapper">
    <h2>后台管理系统</h2>
    <div class="add">
        <labal>登录系统</labal>
    </div>
    <div class="add">
        <form method="post" action="admin_login.php" onsubmit="return checkForm()">
            <labal>管理员:</labal><input type="text" name="admin_name" id="admin_name" placeholder="请输入管理员名">
            <span id="user_adminname" class="error">*</span><br><br>

            <labal>密码:</labal>&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="admin_password" id="admin_password" placeholder="请输入密码">
            <span id="user_adminpassword" class="error">*</span><br><br>

            <input class="btn" type="submit" name="Submit" value="登录">&nbsp;&nbsp;<input class="btn" type="reset" name="Reset" value="重置">
            <br>
        </form>

    </div>
    <div id="content3">
        管理员名: dai
        密码： 123
    </div>
</div>
</body>
</html>

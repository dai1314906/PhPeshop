/**
 * Created by dl on 2019/12/28.
 */
function checkName(){
    var name = document.getElementById("add_name").value;
    var spanNode = document.getElementById("user_name");
    if (name != "") {
        spanNode.innerHTML = "已填".fontcolor("green");
        return true;
    }else{
        spanNode.innerHTML = "不能为空".fontcolor("red");
        return false;
    }
}
//检查密码是否填写
function checkPassword(){
    var password = document.getElementById("add_password").value;
    var spanNode = document.getElementById("user_password");
    if (password != "") {
        spanNode.innerHTML = "已填".fontcolor("green");
        return true;
    }else{
        spanNode.innerHTML = "请输入密码".fontcolor("red");
        return false;
    }
}
//点击登录时进行检查
function checkForm(){
    var name = checkName();
    var password = checkPassword();
    if (name && password) {
        return true;
    }else{
        return false;
    }
}
/**
 * Created by dl on 2019/12/28.
 */
function checkName(){
    var inputNode = document.getElementById("add_name");
    var spanNode = document.getElementById("user_name");
    var nameLength = document.getElementById("add_name").value.length;
    //获取输入框的内容
    var content = inputNode.value;
    // 检测名字是否只包含字母跟空格
    var reg = /^[a-zA-Z ]*$/;
    if(content==""){
        spanNode.innerHTML = "不能为空".fontcolor("red");
        return false;
    }
    if (nameLength > 15) {
        spanNode.innerHTML = "姓名长度过长".fontcolor("red");
        return false;
    }
    if (reg.test(content)){
        spanNode.innerHTML = "正确".fontcolor("green");
        return true;
    }else{
        spanNode.innerHTML = "只允许字母跟空格".fontcolor("red");
        return false;
    }
}
//检查密码
function checkPassword(){
    var password = document.getElementById("add_password");
    var passwordLength = document.getElementById("add_password").value.length;
    var content = password.value;
    var spanNode = document.getElementById("user_password");
    if (passwordLength > 30) {
        spanNode.innerHTML = "密码过长".fontcolor("red");
        return false;
    }
    if (content != "") {
        spanNode.innerHTML = "已填".fontcolor("green");
        return true;
    }else{
        spanNode.innerHTML = "密码不能为空".fontcolor("red");
        return false;
    }
}
//检查再次输入的密码
function checkUpassword(){
    var password = document.getElementById("add_password").value;
    var upassword = document.getElementById("upassword").value;
    var spanNode = document.getElementById("uupassword");
    if (upassword != password) {
        spanNode.innerHTML = "密码不一致".fontcolor("red");
        return false;
    }
    if (upassword != "") {
        spanNode.innerHTML = "已填".fontcolor("green");
        return true;
    }else{
        spanNode.innerHTML = "请再次输入密码".fontcolor("red");
        return false;
    }

}
//检查性别
function checkSex(){
    // var inputNode = document.getElementById("add_sex");
    var spanNode = document.getElementById("user_sex");
    // var content = inputNode.value;
    //检查不能为空
    if (!document.getElementById("man").checked && !document.getElementById("women").checked) {
        spanNode.innerHTML = "必填".fontcolor("red");
        return false;
    }else{
        spanNode.innerHTML = "已填".fontcolor("green");
        return true;
    }
}
//检查年龄
function checkAge(){
    var age = document.getElementById("add_age").value;
    var spanNode = document.getElementById("user_age");
    //检查年龄是否在1-120内
    var reg = /^(?:[1-9][0-9]?|1[01][0-9]|120)$/;
    if (reg.test(age)) {
        spanNode.innerHTML = "已填".fontcolor("green");
        return true;
    }else{
        spanNode.innerHTML = "年龄不合法".fontcolor("red");
        return false;
    }
}
function  checkTel(){
    var tel=document.getElementById("add_tel").value;
    var spanNode=document.getElementById("user_tel");

}
//检查邮箱
function checkEmail(){
    var email = document.getElementById("add_email").value;
    var spanNode = document.getElementById("user_email");
    //验证邮箱的正则
    var reg = /^[a-z0-9]\w+@[a-z0-9]+(\.[a-z]{2,3}){1,2}$/i;
    if(email==""){
        spanNode.innerHTML = "不能为空".fontcolor("red");
        return false;
    }
    if (reg.test(email)){
        spanNode.innerHTML = "正确".fontcolor("green");
        return true;
    }else{
        spanNode.innerHTML = "邮箱格式不正确".fontcolor("red");
        return false;
    }
}
//提交form表单时进行检查
function checkForm(){
    var add_name = checkName();
    var add_sex = checkSex();
    var add_age = checkAge();
    var add_email = checkEmail();
    var add_password = checkPassword();
    var upassword = checkUpassword();
    if (add_name && add_sex && add_age && add_email && add_password && upassword){
        return true;
    }else{
        return false;
    }
}
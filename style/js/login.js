function genRandomNum(){
    var randomNum = Math.random()*100;
    return randomNum;
}
function changeCode(){
    var o = document.getElementById("imgcode");
    o.src = "images/randomcode?ran="+genRandomNum();
}
function checkLogin(){
    var vv_number = document.getElementById("vv_number").value;
    var login_pwd = document.getElementById("login_pwd").value;
    var random = document.getElementById("random").value;
    if (vv_number.length==0 || vv_number == null){
        alert("请输入登录帐号!");
        document.getElementById("vv_number").focus();
        return false;
    }
    if (fnIsIntNum(vv_number)==false){
        alert("登录VV帐号必须为整数!");
        document.getElementById("vv_number").focus();
        return false;
    }
    if (login_pwd.length==0 || login_pwd == null){
        alert("请输入登录密码!");
        document.getElementById("login_pwd").focus();
        return false;
    }
    if (random.length==0 || random == null){
        alert("请输入登录验证码!");
        document.getElementById("random").focus();
        return false;
    }
    document.getElementById("login").submit();
}


function checkNewLogin(){
    var operId = document.getElementById("operId").value;
    var operPwd = document.getElementById("operPwd").value;
    var random = document.getElementById("random").value;
    if (operId.length==0 || operId == null){
        alert("请输入登录帐号!");
        document.getElementById("operId").focus();
        return false;
    }
    if (fnIsIntNum(operId)==false){
        alert("登录VV帐号必须为整数!");
        document.getElementById("operId").focus();
        return false;
    }
    if (operPwd.length==0 || operPwd == null){
        alert("请输入登录密码!");
        document.getElementById("operPwd").focus();
        return false;
    }
    if (random.length==0 || random == null){
        alert("请输入登录验证码!");
        document.getElementById("random").focus();
        return false;
    }
    document.getElementById("login").submit();
}
// **********************************************************************************************************
// 判断一个数是否为正整数
// 参数：strNum ---- 需要判断的字符串
// 返回值：true ---- 整数 false ---- 非整数
function fnIsIntNum(strNum)
{
    var strCheckNum = strNum + "";
    if(strCheckNum.length < 1)         // 空字符串
        return false;
    else if(isNaN(strCheckNum))         // 不是数值
        return false;
    else if(parseInt(strCheckNum) < 1)       // 不是正数
        return false;
    else if(parseFloat(strCheckNum) > parseInt(strCheckNum)) // 不是整数
        return false;
    return true;
}

//跳转页面
function getPageno(pageNo){
    document.getElementById("page").value = pageNo;
    document.getElementById("queryForm").submit();
}
//跳转页面
function getPagenum(pageNum){
    document.getElementById("pageNum").value = pageNum;
    document.getElementById("queryForm").submit();

}
//去空格
function trimStr(str){
    if(str.length>0){
        str = str.replace(/^\s+|\s+$/g,"");
    }
    return str;
}

function doRemind(msg){
    if (confirm(msg) == true){
        return true;
    }else{
        return false;
    }
}
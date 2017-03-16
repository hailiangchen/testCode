<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>登录</title>
    <link href="<?php echo base_url();?>style/css/login.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url();?>style/js/function.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>style/js/login.js"></script>
</head>
<body>
<div class="gong">
</div>
<div class="tupian">
    <img src="<?php echo base_url();?>style/images/dfsd.jpg" />
</div>
<div class="dengmo">
    <form action="<?php echo base_url();?>operator/login.htm" method="post" name="login" id="login">
        <input type="hidden" id="method" name="method" value="login" />
        <p>
            V&nbsp;V&nbsp;号
            <input type="text" id="vv_number" name="vv_number" class="text" />
        </p>
        <p>
            密&nbsp;&nbsp;码
            <input type="password" id="login_pwd" name="login_pwd" class="text" maxlength="16" />
        </p>
        <p>
            验证码
            <input type="text" id="random" name="random" class="tex" />
            <img id="imgcode" name="imgcode" src="http://room.51vv.com/op/images/randomcode" align="absmiddle" />
            <a href="#" onclick="changeCode();">换一张</a>
        </p>
        <p class="ludeng" style="margin-top: 30px; margin-left: 40px;">
            <a href="#" onclick="checkLogin();"><img src="<?php echo base_url();?>style/images/denglusa_df.jpg" /> </a>
        </p>
    </form>
</div>
</body>
</html>

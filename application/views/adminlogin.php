<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>管理员登录</title>
    <meta name="description" content="slick Login">
    <meta name="author" content="Webdesigntuts+">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/style.css" />
    <script type="text/javascript" src="<?php echo base_url();?>lib/jquery/1.9.1/jquery.min.js"></script>
    <script>
        function sub() {
            $.ajax({
                url:"<?php echo base_url();?>admin/loginForm",
                type:"POST",
                dataType:'json',
                data:$("#slick-login").serialize(),
                success:function (data) {
                    if(data.code=="ok")
                    {
                        window.location.href=data.url;
                    }
                }
            });
        }

    </script>
</head>
<body>
<form id="slick-login">
    <label for="username">用户名</label><input type="text" name="username" class="placeholder" placeholder="用户名">
    <label for="password">密  码</label><input type="password" name="password" class="placeholder" placeholder="密码">
    <button type="button" id="submit" onclick="sub()">登录</button>
</form>


</body>
</html>
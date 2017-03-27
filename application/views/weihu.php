<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理中心</title>

    <link href="<?php echo base_url();?>style/css/layui.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>style/css/login.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="<?php echo base_url();?>style/js/function.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>style/js/login.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>style/js/layui.js"></script>

</head>
<body>
<div class="top">
    <div class="logo_img">
        <img src="<?php echo base_url();?>style/images/logo.png" alt="">
    </div>
</div>

<div class="gong">

</div>
<div class="tupian">
    <p style="font-size: 18px;">您好，请先进行实名制认证才可登入管理中心</p>
    <p style="font-size: 18px;margin-top: 40px;">
        <a href="<?php echo base_url();?>operator/cert.htm" class="layui-btn layui-btn-big layui-btn-primary layui-btn-radius">立即进行V认证</a>
    </p>

</div>
<?php $this->load->view("footer")?>


</body>
</html>

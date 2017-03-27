<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>手机验证</title>

    <link href="<?php echo base_url();?>style/layui/css/layui.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>style/css/login.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="<?php echo base_url();?>style/js/function.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>style/js/login.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>style/layui/layui.js"></script>

</head>
<body>
<div class="top">
    <div class="logo_img">
        <img src="<?php echo base_url();?>style/images/logo.png" alt="">
    </div>
</div>

<div class="jiange50">

</div>
<div class="width1200">
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>3、手机验证</legend>
    </fieldset>
    <div class="jiange50">

    </div>
    <form class="layui-form" action="<?php echo base_url();?>operator/certform.htm" method="post">
        <div class="layui-frm-item">
            <label class="layui-form-label"></label>
            <div class="layui-word-aux">短信验证码已经发送</div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label fontblod">手机验证码</label>
            <div class="layui-input-inline">
                <input type="text" name="valid" required lay-verify="required" placeholder="请输入验证码" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-word-aux">
                <input type="button"  class="layui-btn layui-btn-primary" value="发送验证码" id="sendmesg" onclick="sendmessage(this);" />
            </div>
        </div>



        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="demo1">完成</button>

            </div>
        </div>

    </form>
</div>

<script>
    var countdown=60;
    function sendmessage(val) {
        if (countdown == 0) {
            val.removeAttribute("disabled");
            val.value="免费获取验证码";
            countdown = 60;
        } else {
            val.setAttribute("disabled", true);
            val.value="重新发送(" + countdown + ")";
            countdown--;
        }
        setTimeout(function() {
            sendmessage(val)
        },1000)
    }
    window.onload=function () {

        sendmessage(document.getElementById("sendmesg"));
    };

    
    layui.use(['form', 'layedit', 'laydate'],function(){
        var form = layui.form()
            ,layer = layui.layer
            ,layedit = layui.layedit
            ,laydate = layui.laydate;



       
        //监听提交
        form.on('submit(demo1)', function(data){
            $("form").submit();

            return false;
        });


    });
</script>

<?php $this->load->view("footer")?>


</body>
</html>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>实名认证</title>

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
        <legend>1、填写个人信息</legend>
    </fieldset>
    <div class="jiange50">

    </div>
    <form class="layui-form" action="<?php echo base_url();?>operator/certform.htm" method="post">

        <div class="layui-form-item">
            <label class="layui-form-label fontblod">真实姓名</label>
            <div class="layui-input-block">
                <input type="text" name="username" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label fontblod">身份证号</label>
            <div class="layui-input-block">
                <input type="text" name="identity" lay-verify="identity" placeholder="" autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="demo1">下一步</button>

            </div>
        </div>

    </form>
</div>

<script>
    layui.use(['form', 'layedit', 'laydate'],function(){
        var form = layui.form()
            ,layer = layui.layer
            ,layedit = layui.layedit
            ,laydate = layui.laydate;


        //自定义验证规则
        form.verify({
            title: function(value){
                if(value.length < 5){
                    return '标题至少得5个字符啊';
                }
            }
            ,pass: [/(.+){6,12}$/, '密码必须6到12位']
            ,content: function(value){
                layedit.sync(editIndex);
            }
        });

        //监听指定开关
        form.on('switch(switchTest)', function(data){
            layer.msg('开关checked：'+ (this.checked ? 'true' : 'false'), {
                offset: '6px'
            });
            layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
        });

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

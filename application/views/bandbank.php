<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>银行卡认证</title>

    <link href="<?php echo base_url();?>style/layui/css/layui.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>style/css/login.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url();?>style/js/jquery.min.js"></script>
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
        <legend>2、银行卡认证</legend>
    </fieldset>
    <div class="jiange50">

    </div>
    <form class="layui-form" action="<?php echo base_url();?>operator/bankForm.htm" method="post">

        <div class="layui-form-item">
            <label class="layui-form-label fontblod">银行卡号</label>
            <div class="layui-input-block">
                <input type="text" onblur="getName();"  name="cardnum" id="cardnum" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
                <input type="hidden" name="id" value="<?php if(isset($re)){echo $re;}else{ redirect(base_url()."operator/cert.htm"); };?>">
            </div>

        </div>
        <div class="layui-form-item">
            <label class="layui-form-label fontblod" ></label>
            <input type="hidden" name="bankname" id="bankname" value="">
            <div class="layui-word-aux" id="banknameshow"></div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label fontblod">姓名</label>
            <div class="layui-input-block">
                <input type="text" name="username" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label fontblod">证件类型</label>
            <div class="layui-input-block">
                <input type="text" name="cardtype" lay-verify="required" placeholder="" value="身份证"  autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label fontblod">证件号</label>
            <div class="layui-input-block">
                <input type="text" name="cardno" lay-verify="identity" placeholder="" autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label fontblod">手机号</label>
            <div class="layui-input-block">
                <input type="text" name="usermobile" lay-verify="phone" placeholder="" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item" pane="">
            <label class="layui-form-label"></label>
            <div class="layui-input-block">
                <input type="checkbox" name="like1[write]" lay-skin="primary" title="" id="switchTest"  lay-verify="switchTest"  checked="">

                <div style="display:inline-block;position: relative;top:6px;">
                    <a  href="">已阅读《VV实名认证相关协议》</a>
                </div>

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

    function getName() {
        $.ajax({
            url:"<?php echo base_url();?>operator/GetBankName.htm",
            type:"post",
            data:{"num":$("#cardnum").val()},
            success:function (data) {
                $("#bankname").val(data);
                $("#banknameshow").html(data);
            }
        });
    }



    layui.use(['form', 'layedit', 'laydate'],function(){
        var form = layui.form()
            ,layer = layui.layer
            ,layedit = layui.layedit
            ,laydate = layui.laydate;


        //自定义验证规则
        form.verify({
            switchTest: function(){
                if (!$("#switchTest").is(":checked"))
                {
                    return '请阅读认证协议';
                }
            }

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

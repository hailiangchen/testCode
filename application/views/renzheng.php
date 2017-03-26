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

<div class="fixed-bar">
    <div class="wide-bar">
        <div class="consult-box">
            <div class="consult-header clearfix">
                <a style="color:#fff;font-size: 16px;" href="tencent://message/?uin=&Site=&Menu=yes"> <h3 class="consult-title">联系客服</h3></a>
            </div>

        </div>

    </div>
</div>

<div class="w">
    <div id="footer_link_info">
        <p>
            <a href="/about/aboutus.shtml" target="_blank">关于VV社区</a>
            <span>|</span>
            <a href="/" target="_blank">聊天室</a>
            <span>|</span>
            <a href="/about/cooperation.shtml" target="_blank">合作推广</a>
            <span>|</span>
            <a href="/about/joinus.shtml" target="_blank">诚聘英才</a>
            <span>|</span>
            <a href="/about/contactus.shtml" target="_blank">联系我们</a>
            <span>|</span>
            <a href="/about/statement.shtml" target="_blank">版权声明</a>
            <span>|</span>
            <a href="/about/friendlinks.shtml" target="_blank">友情链接</a>
            <span>|</span>
            <a href="/about/convention.shtml" target="_blank">联盟公约</a>
            <span>|</span>
            <a href="/about/shengming2014.shtml" target="_blank">2014净网行动</a>
            <span>|</span>
            <a href="/zhuanti/fraud/fraudlist.shtml" target="_blank">防网络诈骗</a>
        </p>
        <p>Copyright © 2011-2017 优贝在线 All Rights Reserved. 北京优贝在线网络科技有限公司</p>
        <p><a title="网络文化经营许可证 京网文[2015]0620-250号" rel="nofollow" target="_blank" href="//www.51vv.com/about/licence.shtml">网络文化经营许可证 京网文[2015]0620-250号</a> | 广播电视节目制作经营许可证 (京)字第02194号</p>
        <p>电信与信息服务业务经营许可证 京ICP证 110356号 | <a title="京ICP备09019824号-1" rel="nofollow" target="_blank" href="//www.miibeian.gov.cn/">京ICP备09019824号-3</a> | <a target="_blank" href="//www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020154" style="display: inline-block; height: 20px; line-height: 20px;"><img src="//www.beian.gov.cn/file/ghs.png" style="float:left;">京公网安备 11010802020154号</a></p>
        <p>
            <a target="_blank" href="//www.bnia.cn/">
                <img width="115" height="48" alt="北京网络行业协会" src="<?php echo base_url();?>style/images/vvhome_bnia.gif">
            </a>
            <a target="_blank" style="margin-left:15px;" key="589d7fb0efbfb01901cd485d" logo_size="124x47" logo_type="realname" href="http://v.pinpaibao.com.cn/authenticate/cert/?site=www.51vv.com&amp;at=realname">
                <script src="//static.anquan.org/static/outer/js/aq_auth.js"></script>
                <b id="aqLogoTPWTV" style="display: none;"></b>

            </a>
        </p>
    </div>
</div>


</body>
</html>

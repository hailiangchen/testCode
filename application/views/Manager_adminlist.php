<title></title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i>   <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">

    <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l">

           </span> <span class="r">共有数据：<strong><?php echo $result?count($result):'0';?></strong> 条</span> </div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-hover table-sort">
            <thead>
            <tr class="text-c">

                <th width="80">ID</th>
                <th>用户名</th>
                <th>手机号</th>
                <th>备注</th>
                <th width="120">添加时间</th>
                <th>状态</th>
                <th>操作</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($result?$result:array() as $item){?>
                <tr class="text-c">

                    <td><?php echo $item->id;?></td>
                    <td><?php echo $item->username;?></td>
                    <td><?php echo $item->telephone;?></td>
                    <td><?php echo $item->beizhu;?></td>
                    <td><?php echo $item->addtime;?></td>
                    <td><?php echo $item->status;?></td>
                    <td><button class="btn radius btn-primary size-" onClick="modaldemo(<?php echo $item->id;?>)">修改密码</button></td>

                </tr>
            <?php }?>

            </tbody>
        </table>
    </div>
</div>

<div id="modal-demo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content radius">
            <div class="modal-header">
                <h3 class="modal-title">对话框标题</h3>
                <a class="close" data-dismiss="modal" aria-hidden="true" href="javascript:void();">×</a>
            </div>
            <div class="modal-body">
                <p>对话框内容…</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary">确定</button>
                <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url();?>lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>lib/layer/2.1/layer.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>lib/layer/2.1/extend/layer.ext.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript">
    $('.table-sort').dataTable({
        "aaSorting": [[ 1, "desc" ]],//默认第几个排序
        "bStateSave": true,//状态保存
        "aoColumnDefs": [
            //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
            {"orderable":false,"aTargets":[0]}// 不参与排序的列
        ]
    });
    function modaldemo(id){
        layer.prompt({title: '输入新密码', formType: 1}, function(pass, index){
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url();?>manager/chanagepass',
                dataType: 'json',
                data:{"id":id,"pass":pass},
                success: function(data){
                    if(data.code>0)
                    {
                        layer.msg('已修改!',{icon:1,time:1000});
                    }

                },
                error:function(data) {

                },
            });

        });
    }

</script>
</body>
</html>
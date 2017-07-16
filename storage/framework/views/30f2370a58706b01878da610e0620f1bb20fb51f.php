<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
    <section class="content-header">
          <h1>
            信息输出表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">管理信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 角色信息管理</h3>
                  <button class="btn btn-primary" onclick="window.location='<?php echo e(URL('admin/role/create')); ?>'">发布信息</button
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:60px">id号</th>
                      <th>角色名称</th>
                      <th>图片名称</th>
                      <th>内容</th>
                      <th>添加时间</th>
                      <th style="width: 170px">操作</th>
                    </tr>
                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($vo->id); ?></td>
                            <td><?php echo e($vo->title); ?></td>
                            <td><?php echo e($vo->picname); ?></td>
                            <td><?php echo e($vo->content); ?></td>
                            <td><?php echo e(date("Y-m-d",$vo->updated_at)); ?></td>
                            <td><button class="btn btn-xs btn-danger" onclick="doDel(<?php echo e($vo->id); ?>)">删除</button> 
                               <button class="btn btn-xs btn-primary" onclick="window.location='<?php echo e(URL('/admin/role')); ?>/<?php echo e($vo->id); ?>/edit'">编辑</button> 
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                  </table>
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->

            </div><!-- /.col --> 
          </div><!-- /.row -->
        </section><!-- /.content -->
        
    <?php $__env->stopSection(); ?>
    
    <?php $__env->startSection('myscript'); ?>
    <form action="/role/" method="post" name="myform" style="display:none;">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
            <input type="hidden" name="_method" value="delete"/>
           
    </form>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">New message</h4>
          </div>
          <div class="modal-body">
           <!-- 此处填充 -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="button" onclick="saveNode()" class="btn btn-primary">保存</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
        function doDel(id){
            Modal.confirm({msg: "是否删除信息？"}).on(function(e){
                if(e){
                   var form = document.myform;
                    form.action = "<?php echo e(URL('/admin/role')); ?>/"+id;
                    form.submit(); 
                }
              });
        }
        
        function loadNode(rid,name){
            $("#exampleModalLabel").html(name+"的操作节点管理");
            $("#exampleModal").modal("show");
            $.ajax({
                url:"<?php echo e(URL('admin/role/loadNode')); ?>/"+rid,
                type:"get",
                dataType:"html",
                async:true,
                success:function(data){
                  $("#exampleModal .modal-body").html(data);   
                },
             });
        }
        
        //保存节点信息
        function saveNode(){
            $.ajax({
                url:"<?php echo e(URL('admin/role/saveNode')); ?>",
                type:"post",
                dataType:"html",
                data:$("#nodelistform").serialize() ,
                async:true,
                success:function(data){
                    $('#exampleModal').modal('hide');
                    Modal.alert({msg:data,title: ' 信息提示',btnok: '确定',btncl:'取消'});
                },
             });
             
        }
        
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
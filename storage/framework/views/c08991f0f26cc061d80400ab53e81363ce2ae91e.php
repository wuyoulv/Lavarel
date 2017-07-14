<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
    <section class="content-header">
          <h1>
            广告后台详情表
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
                  <h3 class="box-title"><i class="fa fa-th"></i> 广告信息管理</h3>&nbsp;&nbsp;&nbsp;&nbsp;
                  <a class="btn btn-primary" href="<?php echo e(URL('admin/admin/ad')); ?>/create">发布广告</a>
                  <div class="box-tools">
                    <form action="" method="get">
                     <input type="hidden" name="_method" value="delete">
                      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="title" class="form-control input-sm pull-right" placeholder="角色名称"/>
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:60px">id号</th>
                      <th>角色名称</th>
                      <th>图片名称</th>
                      <th>添加时间</th>
                      <th>到期时间</th>
                      <th>状态</th>
                      <th style="width: 170px">操作</th>
                    </tr>

                    </tr>
                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($vo->id); ?></td>
                      <td><?php echo e($vo->title); ?></td>
                      <td><img src="<?php echo e(asset('uploads')); ?>/<?php echo e($vo->picname); ?>" width="50" height="50" /></td> 
                      <td><?php echo e($vo->addtime); ?></td>
                      <td><?php echo e($vo->deadline); ?></td>
                      <td><?php echo e($vo->status); ?></td>
                      <td><a class="btn btn-xs btn-danger"  href="javascript:doDel(<?php echo e($vo->id); ?>)">删除</a> 
                          <a class="btn btn-xs btn-primary" href="<?php echo e(URL('admin/admin/ad')); ?>/<?php echo e($vo->id); ?>/edit">编辑</a> 
                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </table>
                  <?php echo e($list->appends($params)->links()); ?>

                </div><!-- /.box-body -->
                
              </div><!-- /.box -->

            </div><!-- /.col --> 
          </div><!-- /.row -->
        </section><!-- /.content -->
        
    <?php $__env->stopSection(); ?>
    
    <?php $__env->startSection('myscript'); ?>
    <!--  form表单是用来删除的  -->
        <form style="display:none;" action="" name="myform" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
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
                     document.myform.action = "<?php echo e(URL('/admin/admin/ad')); ?>/"+id;
                     document.myform.submit();
                    //var form = document.myform;
                    //form.action = "<?php echo e(URL('/admin/admin/destroy')); ?>/"+id;
                    //form.submit(); 
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
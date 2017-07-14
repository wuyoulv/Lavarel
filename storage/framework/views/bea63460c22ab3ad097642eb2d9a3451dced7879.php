    <?php $__env->startSection('content'); ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            七牛云视频信息
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">视频信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>

        <script>
            function doDel(id){
                document.myform.action = "/admin/qiniu_info/"+id;
                document.myform.submit();
            }
        </script>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 七牛云视频管理</h3>
                  <div class="box-tools">
                    <form action="/admin/qiniu_info" method="get">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="name" class="form-control input-sm pull-right" placeholder="文件名姓名"/>
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
                    <th>ID</th>
                    <th>文件地址</th>
                    <th>创建时间</th>
                    <th>描述</th>
                    <th>操作</th>
                   
                </tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($v->id); ?></td>
                    <td><?php echo e($v->fname); ?></td>
                    <td><?php echo e($v->createtime); ?></td>
                    <td><?php echo e($v->description); ?></td>
                    <td> <a href="/admin/qiniu_info/<?php echo e($v->id); ?>/edit">编辑</a> 
                         <a href="javascript:doDel(<?php echo e($v->id); ?>)">删除</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                  
               

                  </table>
                  <?php echo e($data->appends($where)->links()); ?>

                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                </div>
              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->
        <form action="" style="display:none;" name="myform" id="mydeleteform" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="_method" value="DELETE">
        </form>
    <?php $__env->stopSection(); ?>
    
    

<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
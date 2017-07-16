<?php $__env->startSection('content'); ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            影评信息表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">影评预览</a></li>
           
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 影评浏览</h3>
                  <div class="box-tools">
                    <form action="<?php echo e(url('admin/cmt')); ?>" method="get">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="title" class="form-control input-sm pull-right" placeholder="视频名称"/>
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
                      <th>评论ID</th>
                      <th>用户</th>
                      <th>片名</th>
                      <th>评论时间</th>
                      <th>评论内容</th>
                      <th style="width: 100px">操作</th>
                    </tr>
                    <?php $__currentLoopData = $cmt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($stu->id); ?></td>
                            <td><?php echo e($stu->userid); ?></td>
                            <td><?php echo e($stu->filmid); ?></td>
                            <td><?php echo e($stu->time); ?></td>
                            <td><?php echo e($stu->text); ?></td>
                            <td> <a href="<?php echo e(url('admin/cmt/del')); ?>/<?php echo e($stu->id); ?>">删除</a> | <a href="<?php echo e(url('admin/cmt/edit')); ?>/<?php echo e($stu->id); ?>">编辑</a></td>
                            
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                <?php echo e($cmt->appends($where)->links()); ?>

                </div>
              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->
        <form action="" style="display:none;" id="mydeleteform" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="_method" value="DELETE">
        </form>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
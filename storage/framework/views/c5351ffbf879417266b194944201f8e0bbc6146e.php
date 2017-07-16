    <?php $__env->startSection('content'); ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
      编辑影片评论
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">视频评论管理</a></li>
            <li class="active">编辑影片评论</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-plus"></i> 编辑评论信息</h3>
                </div><!-- /.box-header -->
                <!-- form start --> 
                <?php $__currentLoopData = $cmt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <form action="<?php echo e(url('admin/cmt/update/')); ?>" method="post" class="form-horizontal">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <div class="box-body">
                  
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">分类ID：</label>
                      <div class="col-sm-4">
                        <input type="text" disabled="disabled"   class="form-control" id="inputEmail3" placeholder="<?php echo e($v->id); ?>">
                        <input type="hidden" name="id" value="<?php echo e($v->id); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">用户ID：</label>
                      <div class="col-sm-4">
                        <input type="text" name="user" class="form-control" id="inputEmail3" value="<?php echo e($v->user); ?>" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">视频名：</label>
                      <div class="col-sm-4">
                        <input type="text" name="title" class="form-control" id="inputEmail3" value="<?php echo e($v->title); ?>" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">评论时间：</label>
                      <div class="col-sm-4">
                        <input type="text" disabled="disabled"   class="form-control" id="inputEmail3" placeholder="<?php echo e($v->time); ?>">
                      </div>
                    </div> 
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">评论内容：</label>
                      <div class="col-sm-4">
                        <input type="textarea" name="text" class="form-control" id="inputEmail3" value="<?php echo e($v->text); ?>" placeholder="">
                      </div>
                    </div>
   
                  </div><!-- /.box-body -->
                  <div class="box-footer">
            <div class="col-sm-offset-2 col-sm-1">
            <button type="submit" class="btn btn-primary">保存</button>
                    </div>
          <div class="col-sm-1">
            <button type="submit" class="btn btn-primary">重置</button>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div><!-- /.box-footer -->
                </form>
        <div class="row"><div class="col-sm-12">&nbsp;</div></div>
              </div><!-- /.box -->
       
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
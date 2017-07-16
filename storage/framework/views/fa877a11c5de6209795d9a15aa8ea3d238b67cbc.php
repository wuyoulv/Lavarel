<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
			广告添加
          </h1>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-plus"></i> 添加角色信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="<?php echo e(url('admin/admin/ad')); ?>" method="post" enctype= multipart/form-data>
                  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                  <div class="box-body">
                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">UID</label>
                      <div class="col-sm-4">
                        <input type="text" name="userid" class="form-control" placeholder="uid">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">角色名称</label>
                      <div class="col-sm-4">
                        <input type="text" name="title" class="form-control" placeholder="角色名称">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">图片</label>
                      <div class="col-sm-4">
                        <input type="file" name="picname"  />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">添加时间</label>
                      <div class="col-sm-4">
                        <input type="datetime-local" name="addtime" class="form-control">
                      </div>
                    </div>
                      <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">到期时间</label>
                      <div class="col-sm-4">
                        <input type="datetime-local" name="deadline" class="form-control" >
                      </div>
                    </div>
                  
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">当前状态</label>
                      <div class="col-sm-4">
                        <label class="radio-inline">
                          <input type="radio" name="status" id="inlineRadio1" value="0"> 启用
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="status" id="inlineRadio2" value="1"> 禁用
                        </label>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
				    <div class="col-sm-offset-2 col-sm-1">
						<button type="submit" class="btn btn-primary">添加</button>
                    </div>
					<div class="col-sm-1">
						<button type="submit" class="btn btn-primary">重置</button>
					</div>
                  </div><!-- /.box-footer -->
                </form>
                <?php if(session('status')): ?>
                <span style="color:red;">
                     <?php echo e(session('status')); ?>

                </span>
        <?php endif; ?>
				<div class="row"><div class="col-sm-12">&nbsp;</div></div>
				<div class="row"><div class="col-sm-12">
                <br/>
                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                </div></div>
              </div><!-- /.box -->
       
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
        
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
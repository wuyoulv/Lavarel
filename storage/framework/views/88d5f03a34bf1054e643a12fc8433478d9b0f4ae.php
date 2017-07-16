    <?php $__env->startSection('content'); ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
			视频管理
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">视频管理</a></li>
            <li class="active">添加视频信息</li>
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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 添加视频信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo e(url('admin/film_info')); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <div class="box-body">

					          <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">影片名：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="影片名" name="title">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">图片：</label>
                      <div class="col-sm-4">
                        <input type="file" class="form-control" id="inputPassword3"  name="picname">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">类型：</label>
                      <div class="col-sm-4">
                        <select class="form-control" name="type_id">
                          <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($v->id); ?>"><?php echo e($v->type); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">导演：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="导演" name="director">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">演员：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="演员" name="actor">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">首映时间：</label>
                      <div class="col-sm-4">
                        <input type="datetime-local" class="form-control" id="inputPassword3" placeholder="首映时间" name="firsttime">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">时长：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="时长" name="duration">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">地区：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="地区" name="region">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">语言：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="语言" name="language">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">简介：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="简介" name="introduction">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">权限：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="权限" name="limit">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">评分：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="评分" name="score">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">状态：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="状态" name="status">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">点击量：</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="点击量" name="click">
                      </div>
                    </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
				    <div class="col-sm-offset-2 col-sm-1">
						<button type="submit" class="btn btn-primary">添加</button>
                    </div>
					<div class="col-sm-1">
						<button type="submit" class="btn btn-primary">重置</button>
					</div>
                  </div><!-- /.box-footer -->
                </form>
				<div class="row"><div class="col-sm-12">&nbsp;</div></div>
              </div><!-- /.box -->
       
              <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

       
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
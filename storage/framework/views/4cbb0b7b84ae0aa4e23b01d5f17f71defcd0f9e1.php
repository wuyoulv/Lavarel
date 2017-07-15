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
                       <button type="button" id='film_type' class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">分类名 <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                          <?php $__currentLoopData = $type_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(url('admin/cmt')); ?>/<?php echo e($type->id); ?>"><?php echo e($type->type); ?></a></li>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ul>
                          <!-- 引入jquery -->
                        <script src="<?php echo e(asset('./js/jquery-1.8.3.min.js')); ?>">
                        </script>        
                         <!-- 设置分类下拉框 -->
                        <script>
                        $('.dropdown-menu li a').click(function(){
                            var url = $(this).attr('href');
                            //切割字符串为数组
                            // var arr = url.split('/');
                            //弹出最后的id参数
                            var data = arr.pop();

                           console.log(data);
                                $.ajax({
                                    url:url,
                                    // data:data,
                                    type:'get',
                                    async: false,
                                    success:function(mes){
                                         // mes
                                      }
                                  });                               
                                return false;
                        });
                          
                        </script>
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
                      <th>影片名</th>
                      <th>评论内容</th>
                      <th>评论时间</th>
                      <th style="width: 100px">操作</th>
                    </tr>
                    <?php for($i=0;$i<count($cmt);$i++): ?>                    
                    <?php $__currentLoopData = $cmt[$i]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                        <tr>
                            <td><?php echo e($stu->id); ?></td>
                            <td><?php echo e($stu->name); ?></td>
                            <td><?php echo e($stu->title); ?></td>
                            
                            <td><?php echo e($stu->text); ?></td>
                            <td><?php echo e($stu->time); ?></td>
                            <td> <a class="btn btn-xs btn-danger" href="<?php echo e(url('admin/cmt/del')); ?>/<?php echo e($stu->id); ?>">删除</a> | <a class="btn btn-xs btn-primary" href="<?php echo e(url('admin/cmt/edit')); ?>/<?php echo e($stu->id); ?>">编辑</a></td>                        
                        </tr>                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endfor; ?>
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                <?php for($i=0;$i<count($cmt);$i++): ?>                    

                <?php echo e($cmt[$i]->appends($where)->links()); ?>

                <?php endfor; ?>
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
    <?php $__env->startSection('content'); ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            视频信息表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页 </a></li>
            <li><a href="#">视频信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>

        <script type="text/javascript">
            function doDel(id){
                document.myform.action="/admin/film_info/"+id;
                document.myform.submit();
            }
        </script>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 视频信息管理</h3>
                  <div class="box-tools">
                    <form action="/admin/film_info" method="get">
                        <div class="input-group" style="width: 150px;">
                          <input type="text" name="title" class="form-control input-sm pull-right" placeholder="电影名"/>
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
                        <th>电影名</th>
                        <th>图片地址</th>
                        <th>类型</th>
                        <th>导演</th>
                        <th>演员</th>
                        <th>首映时间</th>
                        <th>时长</th>
                        <th>地区</th>
                        <th>语言</th>
                        <th>简介</th>
                        <th>权限</th>
                        <th>评分</th>
                        <th>状态</th>
                        <th>点击量</th>
                        <th>添加时间</th>
                        <th>修改时间</th>
                        <th>操作</th>
                    </tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($v->id); ?></td>
                    <td><?php echo e($v->title); ?></td>
                    <td><?php echo e(substr($v->pic_address,33,18)); ?></td>
                    <td><?php echo e($v->type_id); ?></td>
                    <td><?php echo e($v->director); ?></td>
                    <td><?php echo e($v->actor); ?></td>
                    <td><?php echo e($v->firsttime); ?></td>
                    <td><?php echo e($v->duration); ?></td>
                    <td><?php echo e($v->region); ?></td>
                    <td><?php echo e($v->language); ?></td>
                    <td><?php echo e(mb_substr($v->introduction,0,12,'utf8')); ?></td>
                    <td><?php echo e($v->limit); ?></td>
                    <td><?php echo e($v->score); ?></td>
                    <td><?php echo e($v->status); ?></td>
                    <td><?php echo e($v->click); ?></td>
                    <td><?php echo e($v->addtime); ?></td>
                    <td><?php echo e($v->edittime); ?></td>
                    <td><a href="/admin/film_info/<?php echo e($v->id); ?>/edit">编辑</a>   
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
    <?php $__env->startSection('content'); ?>
	<div class="box-body">
  <br/>
            <form action="<?php echo e(URL('admin/user')); ?>" method="get" class="form-inline">
              <div class="form-group">
                <label for="exampleInputName2">关键字:</label>
                <input type="text" name="name" class="form-control" id="exampleInputName2" placeholder="账号">
              </div>
              <div class="form-group">
                <label for="exampleInputName2">性别:</label>
                <input type="text" name="sex" class="form-control" size="4" id="exampleInputName2" placeholder="1/2">
              </div>
              <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <br/>
      <table class="table table-bordered">
        <tr>
          <th>会员号</th>
          <th>账号</th>
          <th>头像</th>
          <th>密码</th>
          <th>真实姓名</th>
          <th>生日</th>
          <th>性别</th>
          <th>电话</th>
          <th>邮箱</th>
          <th>地址</th>
          <th>月数</th>
          <th>金额</th>
          <th>角色</th>
          <th>购买时间</th>
          <th>到期时间</th>
          <th>登录时间</th>
          <th>上次登录时间</th>
          <th style="width: 100px">操作</th>
        </tr>
        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($v->id); ?></td>
          <td><?php echo e($v->account); ?></td>
          <td><?php echo e($v->picname); ?></td>
          <td><?php echo e($v->password); ?></td>
          <td><?php echo e($v->name); ?></td>
          <td><?php echo e($v->birthday); ?></td>
          <td><?php if($v->sex == 1): ?> 男 <?php else: ?> 女 <?php endif; ?></td>
          <td><?php echo e($v->tel); ?></td>
          <td><?php echo e($v->email); ?></td>
          <td><?php echo e($v->address); ?></td>
          <td><?php echo e($v->months); ?></td>
          <td><?php echo e($v->money); ?></td>
          <td><?php if($v->role == 1): ?> 会员 <?php else: ?> Vip会员 <?php endif; ?></td>
          <td><?php echo e($v->buy_time); ?></td>
          <td><?php echo e($v->dead_line); ?></td>
          <td><?php echo e($v->login_time); ?></td>
          <td><?php echo e($v->last_time); ?></td>
          <td><button onclick="doDel(<?php echo e($v->id); ?>)" class="btn btn-xs btn-danger">删除</button> 
          <button onclick="window.location='<?php echo e(URL('admin/user')); ?>/<?php echo e($v->id); ?>/edit'" class="btn btn-xs btn-primary" >编辑</button> </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
                </div><!-- /.box-body -->
                <?php echo e($list->appends($where)->links()); ?>


                
              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->
        <form action="" style="display:none;" id="mydeleteform" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="_method" value="DELETE">
        </form>
    <?php $__env->stopSection(); ?>
    
    
    <?php $__env->startSection("myscript"); ?>
      <script type="text/javascript">
            function doDel(id){
                Modal.confirm({msg:'确定要删除吗？'}).on(function(e){
                   if(e){
                    $("#mydeleteform").attr("action","<?php echo e(url('admin/user')); ?>/"+id).submit();
                    }                    
                });
            }
      </script>
    <?php $__env->stopSection(); ?>
       
      
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
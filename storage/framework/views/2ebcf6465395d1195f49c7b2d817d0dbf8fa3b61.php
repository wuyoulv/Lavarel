    <?php $__env->startSection('content'); ?>
	<div class="box-body">
      <table class="table table-bordered">
        <tr>
          <th style="width:60px">编号</th>
          <th>账号</th>
          <th>姓名</th>
          <th>登录时间</th>
          <th style="width: 100px">操作</th>
        </tr>
        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($v->id); ?></td>
          <td><?php echo e($v->account); ?></td>
          <td><?php echo e($v->name); ?></td>
          <td><?php echo e($v->log_time); ?></td>
          <td><button onclick="doDel(<?php echo e($v->id); ?>)" class="btn btn-xs btn-danger">删除</button> 
          <button class="btn btn-xs btn-primary">编辑</button> </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div><!-- /.box-body -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
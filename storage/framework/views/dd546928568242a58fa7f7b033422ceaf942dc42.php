<?php $__env->startSection('content'); ?>
    <h1>Edit Task</h1>
    <hr>
     <form action="<?php echo e(url('tasks', [$task->id])); ?>" method="POST">
     <input type="hidden" name="_method" value="PUT">
     <?php echo e(csrf_field()); ?>

      <div class="form-group">
        <label for="title">Task Title</label>
        <input type="text" value="<?php echo e($task->title); ?>" class="form-control" id="taskTitle"  name="title" >
      </div>
      <div class="form-group">
        <label for="description">Task Description</label>
        <input type="text" value="<?php echo e($task->description); ?>" class="form-control" id="taskDescription" name="description" >
      </div>
      <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
      <?php endif; ?>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test\resources\views/tasks/edit.blade.php ENDPATH**/ ?>
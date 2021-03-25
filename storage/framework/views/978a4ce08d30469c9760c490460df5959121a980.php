<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo e($subject); ?></title>
</head>
<body>
<p>
    Hello <?php echo e($user->name); ?>,
</p>

<p>
    Task "<?php echo e($task->name); ?>" have been updated to status "<?php echo e($task->getStatus->name); ?>" you can view it here <a href="<?php echo e(url('admin/tasks/' . $task->id)); ?>"> <?php echo e(url('admin/tasks/' . $task->id)); ?> </a>
</p>
</body>
</html><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/emails/update_task_status.blade.php ENDPATH**/ ?>
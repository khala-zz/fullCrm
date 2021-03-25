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
    You have been assigned a task, go and check them here <a href="<?php echo e(url('admin/tasks/' . $task->id)); ?>"> <?php echo e(url('admin/tasks/' . $task->id)); ?> </a>
</p>
</body>
</html><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/emails/assign_task.blade.php ENDPATH**/ ?>
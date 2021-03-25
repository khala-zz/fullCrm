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

<?php if($user->is_active == 1): ?>
    <p>
        Your account have been activated to access the mini CRM system <a href="<?php echo e(url('admin')); ?>"> <?php echo e(url('admin')); ?> </a>
    </p>
<?php else: ?>
    <p>
        Your account have been deactivated to access the mini CRM system <a href="<?php echo e(url('admin')); ?>"> <?php echo e(url('admin')); ?> </a>
    </p>
<?php endif; ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/emails/activate_banned.blade.php ENDPATH**/ ?>
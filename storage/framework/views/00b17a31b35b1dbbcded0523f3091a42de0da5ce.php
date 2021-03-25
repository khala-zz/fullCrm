<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo e($mailbox->subject); ?></title>
</head>
<body>
<p>
    Hello <?php echo e($user->name); ?>,
</p>

<p>
    <?php echo $mailbox->body; ?>

</p>
</body>
</html><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/emails/mailbox_send.blade.php ENDPATH**/ ?>
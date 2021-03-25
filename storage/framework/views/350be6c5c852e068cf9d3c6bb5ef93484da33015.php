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
    You have been assigned a contact, go and check them here <a href="<?php echo e(url('admin/contacts/' . $contact->id)); ?>"> <?php echo e(url('admin/contacts/' . $contact->id)); ?> </a>
</p>
</body>
</html><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/emails/assign_contact.blade.php ENDPATH**/ ?>
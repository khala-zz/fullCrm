<ul class="mailbox-attachments clearfix">

    <?php if($mailbox->attachments->count()): ?>
        <?php $__currentLoopData = $mailbox->attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <span class="mailbox-attachment-icon"><i class="fa <?php echo e(in_array(pathinfo(public_path('uploads/mailbox/' . $attachment->attachment), PATHINFO_EXTENSION), ["jpg", "jpeg", "png", "gif"])?'fa-image':'fa-file'); ?>"></i></span>

                <div class="mailbox-attachment-info">
                    <a href="<?php echo e(url('uploads/mailbox/' . $attachment->attachment)); ?>" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> <?php echo e($attachment->attachment); ?></a>
                    <span class="mailbox-attachment-size">
                                                <?php echo e(filesize(public_path('uploads/mailbox/' . $attachment->attachment))/1024); ?> KB
                                                <a href="<?php echo e(url('uploads/mailbox/' . $attachment->attachment)); ?>" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</ul><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/pages/mailbox/includes/attachments.blade.php ENDPATH**/ ?>
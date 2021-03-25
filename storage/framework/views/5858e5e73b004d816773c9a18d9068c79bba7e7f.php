<?php if($paginator->hasPages()): ?>

    <?php if($paginator->onFirstPage()): ?>
        <a class="btn btn-default btn-sm pagination-previous" disabled><i class="fa fa-chevron-left"></i></a>
    <?php else: ?>
        <a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" class="btn btn-default btn-sm pagination-previous"><i class="fa fa-chevron-left"></i></a>
    <?php endif; ?>

    <?php if($paginator->hasMorePages()): ?>
        <a class="btn btn-default btn-sm pagination-next" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"><i class="fa fa-chevron-right"></i></a>
    <?php else: ?>
        <a class="btn btn-default btn-sm pagination-next" disabled><i class="fa fa-chevron-right"></i></a>
    <?php endif; ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/vendor/pagination/mailbox.blade.php ENDPATH**/ ?>
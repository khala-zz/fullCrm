<div class="mailbox-controls">

    <!-- Check all button -->
    <?php if(Request::segment(3) != 'Trash'): ?>
        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
        </button>
    <?php endif; ?>
    <div class="btn-group">

        <?php if(Request::segment(3)==''||Request::segment(3)=='Inbox'): ?>
            <?php if(user_can("toggle_important_email")): ?>
                <button type="button" class="btn btn-default btn-sm mailbox-star-all" title="toggle important state" style="display: <?php echo e(user_can("toggle_important_email")?'inline':'none'); ?>"><i class="fa fa-star"></i></button>
            <?php endif; ?>

            <?php if(user_can("trash_email")): ?>
                <button type="button" class="btn btn-default btn-sm mailbox-trash-all" title="add to trash" style="display: <?php echo e(user_can("trash_email")?'inline':'none'); ?>"><i class="fa fa-trash-o"></i></button>
            <?php endif; ?>

            <?php if(user_can("reply_email")): ?>
                    <button type="button" class="btn btn-default btn-sm mailbox-reply" title="reply" style="display: <?php echo e(user_can("reply_email")?'inline':'none'); ?>"><i class="fa fa-reply"></i></button>
            <?php endif; ?>

            <?php if(user_can("forward_email")): ?>
                    <button type="button" class="btn btn-default btn-sm mailbox-forward" title="forward" style="display: <?php echo e(user_can("forward_email")?'inline':'none'); ?>"><i class="fa fa-mail-forward"></i></button>
            <?php endif; ?>

        <?php elseif(Request::segment(3) == 'Sent'): ?>
            <?php if(user_can("toggle_important_email")): ?>
                <button type="button" class="btn btn-default btn-sm mailbox-star-all" title="toggle important state" style="display: <?php echo e(user_can("toggle_important_email")?'inline':'none'); ?>"><i class="fa fa-star"></i></button>
            <?php endif; ?>

            <?php if(user_can("trash_email")): ?>
                <button type="button" class="btn btn-default btn-sm mailbox-trash-all" title="add to trash" style="display: <?php echo e(user_can("trash_email")?'inline':'none'); ?>"><i class="fa fa-trash-o"></i></button>
            <?php endif; ?>

            <?php if(user_can("forward_email")): ?>
                <button type="button" class="btn btn-default btn-sm mailbox-forward" title="forward" style="display: <?php echo e(user_can("forward_email")?'inline':'none'); ?>"><i class="fa fa-mail-forward"></i></button>
            <?php endif; ?>
        <?php elseif(Request::segment(3) == 'Drafts'): ?>
            <?php if(user_can("toggle_important_email")): ?>
                <button type="button" class="btn btn-default btn-sm mailbox-star-all" title="toggle important state" style="display: <?php echo e(user_can("toggle_important_email")?'inline':'none'); ?>"><i class="fa fa-star"></i></button>
            <?php endif; ?>

            <?php if(user_can("trash_email")): ?>
                <button type="button" class="btn btn-default btn-sm mailbox-trash-all" title="add to trash" style="display: <?php echo e(user_can("trash_email")?'inline':'none'); ?>"><i class="fa fa-trash-o"></i></button>
            <?php endif; ?>

            <?php if(user_can("send_email")): ?>
                <button type="button" class="btn btn-default btn-sm mailbox-send" title="send" style="display: <?php echo e(user_can("send_email")?'inline':'none'); ?>"><i class="fa fa-mail-forward"></i></button>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class="pull-right">

        <?php echo e($messages->currentPage()); ?>-<?php echo e($messages->perPage()); ?>/<?php echo e($messages->total()); ?>


        <div class="btn-group">
            <?php echo $messages->appends(['search' => Request::get('search')])->render('vendor.pagination.mailbox'); ?>

        </div>

        <!-- /.btn-group -->
    </div>
    <!-- /.pull-right -->
</div><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/pages/mailbox/includes/mailbox_controls.blade.php ENDPATH**/ ?>
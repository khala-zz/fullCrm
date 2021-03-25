

<?php $__env->startSection('title', ' | Mailbox | Show Mail'); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>
            Show Mail
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/admin')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo e(url('/admin/mailbox')); ?>"> Mailbox</a></li>
            <li class="active">Show Mail</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <a href="<?php echo e(url('admin/mailbox')); ?>" class="btn btn-primary btn-block margin-bottom">Back to inbox</a>

                <?php echo $__env->make('pages.mailbox.includes.folders_panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Read Mail</h3>
                    </div>

                    <?php echo $__env->make('includes.flash_message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="mailbox-read-info">
                            <h3><?php echo e($mailbox->subject); ?></h3>
                            <h5>From: <?php echo e($mailbox->sender->email); ?>

                                <span class="mailbox-read-time pull-right"><?php echo e(!empty($mailbox->time_sent)?date("d M. Y h:i A", strtotime($mailbox->time_sent)):"not sent yet"); ?></span></h5>
                        </div>

                        <!-- /.mailbox-controls -->
                        <div class="mailbox-read-message">
                            <?php echo $mailbox->body; ?>

                        </div>
                        <!-- /.mailbox-read-message -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">

                        <?php echo $__env->make('pages.mailbox.includes.attachments', ['mailbox' => $mailbox], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </div>
                </div>
                <!-- /. box -->

                <?php if($mailbox->replies->count() > 0): ?>
                    <h3>Replies</h3>
                    <?php $__currentLoopData = $mailbox->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title"><strong>From: </strong><?php echo e($reply->sender->name); ?></h3>
                            </div>
                            <div class="box-body no-padding">
                                <div class="mailbox-read-info">
                                    <h3><?php echo e($reply->subject); ?></h3>
                                    <h5>From: <?php echo e($reply->sender->email); ?>

                                        <span class="mailbox-read-time pull-right"><?php echo e(!empty($reply->time_sent)?date("d M. Y h:i A", strtotime($reply->time_sent)):"not sent yet"); ?></span></h5>
                                </div>
                                <div class="mailbox-read-message">
                                    <?php echo $reply->body; ?>

                                </div>
                            </div>
                            <div class="box-footer">
                                <?php echo $__env->make('pages.mailbox.includes.attachments', ['mailbox' => $reply], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/pages/mailbox/show.blade.php ENDPATH**/ ?>
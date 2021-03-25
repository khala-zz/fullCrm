

<?php $__env->startSection('title', ' | Show document'); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>
            document #<?php echo e($document->id); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/admin/')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo e(url('/admin/documents')); ?>">Documents</a></li>
            <li class="active">Show</li>
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <a href="<?php echo e(url('/admin/documents')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                        <?php if(user_can('edit_document')): ?>
                            <a href="<?php echo e(url('/admin/documents/' . $document->id . '/edit')); ?>" title="Edit document"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <?php endif; ?>

                        <?php if(user_can('delete_document')): ?>
                            <form method="POST" action="<?php echo e(url('admin/documents' . '/' . $document->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <button type="submit" class="btn btn-danger btn-sm" title="Delete document" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        <?php endif; ?>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <?php if(\Auth::user()->is_admin == 1): ?>
                                        <tr>
                                            <th>ID</th><td><?php echo e($document->id); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                    <tr><th> Name </th><td> <?php echo e($document->name); ?> </td></tr>
                                    <tr><th> File </th><td> <?php if(!empty($document->file)): ?> <a href="<?php echo e(url('uploads/documents/' . $document->file)); ?>"> <i class="fa fa-download"></i> <?php echo e($document->file); ?></a> <?php endif; ?> </td></tr>
                                    <tr><th> Status </th><td> <?php echo $document->status == 1?"<i class='label label-success'>Active</i>":"<i class='label label-danger'>Not active</i>"; ?> </td></tr>
                                    <tr><th> Type </th><td><?php echo e($document->getType->name); ?></td></tr>
                                    <tr><th> Publish date </th><td><?php echo e($document->publish_date); ?></td></tr>
                                    <tr><th> Expiration date </th><td><?php echo e($document->expiration_date); ?></td></tr>
                                    <?php if(\Auth::user()->is_admin == 1): ?>
                                        <tr><th> Created by </th><td><?php echo e($document->createdBy->name); ?></td></tr>
                                        <tr><th> Modified by </th><td><?php echo e(isset($document->modifiedBy->name)?$document->modifiedBy->name:""); ?></td></tr>
                                    <?php endif; ?>

                                    <tr><th> Assigned to </th><td><?php echo e($document->assignedTo != null ?$document->assignedTo->name : "not set"); ?></td></tr>
                                    <tr><th> Created at </th><td><?php echo e($document->created_at); ?></td></tr>
                                    <tr><th> Modified at </th><td><?php echo e($document->updated_at); ?></td></tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/pages/documents/show.blade.php ENDPATH**/ ?>
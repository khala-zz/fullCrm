

<?php $__env->startSection('title', ' | Show task'); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>
            task #<?php echo e($task->id); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/admin/')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo e(url('/admin/tasks')); ?>">Tasks</a></li>
            <li class="active">Show</li>
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <a href="<?php echo e(url('/admin/tasks')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                        <?php if(user_can('edit_task')): ?>
                            <a href="<?php echo e(url('/admin/tasks/' . $task->id . '/edit')); ?>" title="Edit task"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <?php endif; ?>

                        <?php if(user_can('delete_task')): ?>
                            <form method="POST" action="<?php echo e(url('admin/tasks' . '/' . $task->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <button type="submit" class="btn btn-danger btn-sm" title="Delete task" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        <?php endif; ?>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <?php if(\Auth::user()->is_admin == 1): ?>
                                        <tr>
                                            <th>ID</th><td><?php echo e($task->id); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                    <tr><th> Name </th><td> <?php echo e($task->name); ?> </td></tr>
                                    <tr><th> Priority </th><td> <?php echo e($task->priority); ?> </td></tr>
                                    <tr><th> Status </th><td> <?php echo e($task->getStatus->name); ?> </td></tr>
                                    <tr>
                                        <th>Type</th><td> <?php echo e($task->type->name); ?></td>
                                    </tr>
                                    <tr><th>Start date</th> <td><?php echo e($task->start_date); ?></td></tr>
                                    <tr><th>End date</th> <td><?php echo e($task->end_date); ?></td></tr>
                                    <tr><th>Complete date</th> <td><?php echo e($task->complete_date); ?></td></tr>
                                    <tr><th>Contact</th> <td> <?php echo !empty($task->contact_type)&&!empty($task->contact_id)?'<a href="' . url('/admin/contacts/' . $task->contact_id) . '">'.$task->contact->getName() . " (<i class=\"btn bg-maroon\">".$task->contact_type."</i>)".'</a>':""; ?></td></tr>
                                    <tr>
                                        <th>Description</th> <td><?php echo $task->description; ?></td>
                                    </tr>
                                    <?php if(\Auth::user()->is_admin == 1): ?>
                                        <tr><th> Created by </th><td><?php echo e($task->createdBy->name); ?></td></tr>
                                        <tr><th> Modified by </th><td><?php echo e(isset($task->modifiedBy->name)?$task->modifiedBy->name:""); ?></td></tr>
                                    <?php endif; ?>

                                    <tr><th> Assigned to </th><td><?php echo e($task->assignedTo != null ?$task->assignedTo->name : "not set"); ?></td></tr>
                                    <tr><th> Created at </th><td><?php echo e($task->created_at); ?></td></tr>
                                    <tr><th> Modified at </th><td><?php echo e($task->updated_at); ?></td></tr>
                                    <?php if($task->documents->count() > 0): ?>
                                        <tr><th>Documents </th> <td><?php $__currentLoopData = $task->documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <a href="<?php echo e(url('uploads/documents/' . $document->file)); ?>"><?php echo e($document->name); ?></a> - <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td></tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/pages/tasks/show.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title', ' | Show user'); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>
            user #<?php echo e($user->id); ?>

        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/admin/')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo e(url('/admin/users')); ?>"> Users </a></li>
            <li class="active">Show</li>
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <?php echo $__env->make('includes.flash_message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <a href="<?php echo e(url('/admin/users')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                        <a href="<?php echo e(url('/admin/users/' . $user->id . '/edit')); ?>" title="Edit user"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <?php if($user->is_admin == 0): ?>
                            <form method="POST" action="<?php echo e(url('admin/users' . '/' . $user->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <button type="submit" class="btn btn-danger btn-sm" title="Delete user" onclick="return confirm('Confirm delete?');"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        <?php endif; ?>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>

                                    <?php if(!empty($user->image)): ?>
                                        <tr>
                                            <td>
                                                <img src="<?php echo e(url('uploads/users/' . $user->image)); ?>" class="pull-right" width="200" height="200" />
                                            </td>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th>ID</th><td><?php echo e($user->id); ?></td>
                                    </tr>
                                    <tr><th> Name </th><td> <?php echo e($user->name); ?> </td>
                                    </tr><tr><th> Email </th><td> <?php echo e($user->email); ?> </td></tr>
                                    <tr><th> Position Title </th><td> <?php echo e($user->position_title); ?> </td></tr>
                                    <tr><th> Phone </th><td> <?php echo e($user->phone); ?> </td></tr>
                                    <tr><th> Is Admin </th><td> <?php echo $user->is_admin == 1? '<i class="fa fa-check"></i>':'<i class="fa fa-times"></i>'; ?> </td></tr>
                                    <tr><th> Is Active </th><td> <?php echo $user->is_active == 1? '<i class="fa fa-check"></i>':'<i class="fa fa-ban"></i>'; ?> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/pages/users/show.blade.php ENDPATH**/ ?>
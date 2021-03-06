

<?php $__env->startSection('title', ' | Select role'); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>
            Select role
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/admin/')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo e(url('/admin/users')); ?>"> Users </a></li>
            <li class="active">Select role</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="<?php echo e(url('/admin/users')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        <?php if($errors->any()): ?>
                            <ul class="alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(url('/admin/users/role/' . $user->id)); ?>" accept-charset="UTF-8" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('put')); ?>


                            <div class="form-group <?php echo e($errors->has('role_id') ? 'has-error' : ''); ?>">
                                <label for="role_id" class="control-label"><?php echo e('Role'); ?></label>

                                <select name="role_id" id="role_id" class="form-control">
                                    <option value="">select role</option>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($role->id); ?>" <?php echo e(isset($user->roles[0]) && $role->id == $user->roles[0]->id?"selected":""); ?>><?php echo e($role->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php echo $errors->first('role_id', '<p class="help-block">:message</p>'); ?>

                            </div>

                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Update">
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/pages/users/role.blade.php ENDPATH**/ ?>
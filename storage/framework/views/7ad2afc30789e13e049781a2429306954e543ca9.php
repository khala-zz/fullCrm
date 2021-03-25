

<?php $__env->startSection('title', ' | Edit My Profile'); ?>

<?php $__env->startSection('content'); ?>


    <section class="content-header">
        <h1>
            Edit My profile
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <?php if($errors->any()): ?>
                            <ul class="alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(url('/admin/my-profile/edit/')); ?>" accept-charset="UTF-8" enctype="multipart/form-data">
                            <?php echo e(method_field('PATCH')); ?>

                            <?php echo e(csrf_field()); ?>


                            <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                                <label for="name" class="control-label"><?php echo e('Name'); ?></label>
                                <input class="form-control" name="name" type="text" id="name" value="<?php echo e(isset($user->name) ? $user->name : ''); ?>" >
                                <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

                            </div>
                            <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                                <label for="email" class="control-label"><?php echo e('Email'); ?></label>
                                <input class="form-control" name="email" type="text" id="email" value="<?php echo e(isset($user->email) ? $user->email : ''); ?>" >
                                <?php echo $errors->first('email', '<p class="help-block">:message</p>'); ?>

                            </div>
                            <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                                <label for="password" class="control-label"><?php echo e('Password'); ?></label>
                                <input class="form-control" name="password" type="password" id="password" value="" >
                                <?php echo $errors->first('password', '<p class="help-block">:message</p>'); ?>

                            </div>
                            <div class="form-group <?php echo e($errors->has('position_title') ? 'has-error' : ''); ?>">
                                <label for="position_title" class="control-label"><?php echo e('Position Title'); ?></label>
                                <input class="form-control" name="position_title" type="text" id="position_title" value="<?php echo e(isset($user->position_title) ? $user->position_title : ''); ?>" >
                                <?php echo $errors->first('position_title', '<p class="help-block">:message</p>'); ?>

                            </div>
                            <div class="form-group <?php echo e($errors->has('phone') ? 'has-error' : ''); ?>">
                                <label for="phone" class="control-label"><?php echo e('Phone'); ?></label>
                                <input class="form-control" name="phone" type="text" id="phone" value="<?php echo e(isset($user->phone) ? $user->phone : ''); ?>" >
                                <?php echo $errors->first('phone', '<p class="help-block">:message</p>'); ?>

                            </div>

                            <?php if(!empty($user->image)): ?>
                                <img src="<?php echo e(url('uploads/users/' . $user->image)); ?>" width="200" height="180"/>
                            <?php endif; ?>

                            <div class="form-group <?php echo e($errors->has('image') ? 'has-error' : ''); ?>">
                                <label for="image" class="control-label"><?php echo e('Image'); ?></label>
                                <input class="form-control" name="image" type="file" id="image" >
                                <?php echo $errors->first('image', '<p class="help-block">:message</p>'); ?>

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
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/pages/users/profile/edit.blade.php ENDPATH**/ ?>
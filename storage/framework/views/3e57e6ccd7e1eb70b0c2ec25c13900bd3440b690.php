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
<?php if($formMode == 'create'): ?>
    <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
        <label for="password" class="control-label"><?php echo e('Password'); ?></label>
        <input class="form-control" name="password" type="password" id="password" value="<?php echo e(isset($user->password) ? $user->password : ''); ?>" >
        <?php echo $errors->first('password', '<p class="help-block">:message</p>'); ?>

    </div>
<?php endif; ?>
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

<?php if(isset($user->image) && !empty($user->image)): ?>
    <img src="<?php echo e(url('uploads/users/' . $user->image)); ?>" width="200" height="180"/>
<?php endif; ?>

<div class="form-group <?php echo e($errors->has('image') ? 'has-error' : ''); ?>">
    <label for="image" class="control-label"><?php echo e('Image'); ?></label>
    <input class="form-control" name="image" type="file" id="image" >
    <?php echo $errors->first('image', '<p class="help-block">:message</p>'); ?>

</div>

<?php if($formMode == 'create' || ($formMode == 'edit' && $user->is_admin == 0)): ?>
    <div class="form-group <?php echo e($errors->has('is_active') ? 'has-error' : ''); ?>">
        <label for="is_active" class="control-label">
            <input type="checkbox" name="is_active" id="is_active" value="1" class="minimal" <?php echo e($formMode == 'create'?"checked":($user->is_active == 1?"checked":"")); ?>>
            <?php echo e('Active / Banned'); ?>

        </label>
        <?php echo $errors->first('is_active', '<p class="help-block">:message</p>'); ?>

    </div>
<?php endif; ?>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/pages/users/form.blade.php ENDPATH**/ ?>
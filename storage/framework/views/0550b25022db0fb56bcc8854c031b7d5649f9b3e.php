<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Basic details</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                            <label for="name" class="control-label"><?php echo e('Name'); ?></label>
                            <input class="form-control" name="name" type="text" id="name" value="<?php echo e(isset($task->name) ? $task->name : ''); ?>" >
                            <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group <?php echo e($errors->has('contact_type') ? 'has-error' : ''); ?>">
                            <label for="contact_type" class="control-label"><?php echo e('Contact type'); ?></label>
                            <select class="form-control" name="contact_type" id="contact_type">
                                <option value="">Select type</option>
                                <?php $__currentLoopData = $contact_statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact_status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($contact_status->name); ?>" <?php echo e(isset($task->contact_type) && $task->contact_type == $contact_status->name ? 'selected' : ''); ?>><?php echo e($contact_status->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php echo $errors->first('contact_type', '<p class="help-block">:message</p>'); ?>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group <?php echo e($errors->has('contact_id') ? 'has-error' : ''); ?>">
                            <label for="contact_id" class="control-label"><?php echo e('Contact name'); ?></label>
                            <select name="contact_id" id="contact_id" class="form-control" data-selected-value="<?php echo e(isset($task->contact_id) ? $task->contact_id : ''); ?>"></select>
                            <?php echo $errors->first('contact_id', '<p class="help-block">:message</p>'); ?>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group <?php echo e($errors->has('type_id') ? 'has-error' : ''); ?>">
                            <label for="type_id" class="control-label"><?php echo e('Task type'); ?></label>
                            <select name="type_id" id="type_id" class="form-control">
                                <?php $__currentLoopData = $task_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($type->id); ?>" <?php echo e(isset($task->type_id) && $task->type_id == $type->id ? 'selected' : ''); ?>><?php echo e($type->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php echo $errors->first('type_id', '<p class="help-block">:message</p>'); ?>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group <?php echo e($errors->has('status') ? 'has-error' : ''); ?>">
                            <label for="status" class="control-label"><?php echo e('Contact status'); ?></label>
                            <select name="status" id="status" class="form-control">
                                <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($status->id); ?>" <?php echo e(isset($task->status) && $task->status == $status->id ? 'selected' : ''); ?>><?php echo e($status->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php echo $errors->first('status', '<p class="help-block">:message</p>'); ?>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group <?php echo e($errors->has('priority') ? 'has-error' : ''); ?>">
                            <label for="priority" class="control-label"><?php echo e('Priority'); ?></label>
                            <select class="form-control" name="priority" id="priority">
                                <option value="">Select priority</option>
                                <?php $__currentLoopData = array('Low', 'Normal', 'High', 'Urgent'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value); ?>" <?php echo e(isset($task->priority) && $task->priority == $value ? 'selected' : ''); ?>><?php echo e($value); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php echo $errors->first('priority', '<p class="help-block">:message</p>'); ?>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
                            <label for="description" class="control-label"><?php echo e('Description'); ?></label>
                            <textarea class="form-control" name="description" type="text" id="description"><?php echo e(isset($task->description) ? $task->description : ''); ?></textarea>
                            <?php echo $errors->first('description', '<p class="help-block">:message</p>'); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">Task dates</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group <?php echo e($errors->has('start_date') ? 'has-error' : ''); ?>">
                            <label for="start_date" class="control-label"><?php echo e('Start date'); ?></label>
                            <input class="form-control" name="start_date" type="text" id="start_date" value="<?php echo e(isset($task->start_date) ? $task->start_date : ''); ?>" >
                            <?php echo $errors->first('start_date', '<p class="help-block">:message</p>'); ?>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group <?php echo e($errors->has('end_date') ? 'has-error' : ''); ?>">
                            <label for="end_date" class="control-label"><?php echo e('End date'); ?></label>
                            <input class="form-control" name="end_date" type="text" id="end_date" value="<?php echo e(isset($task->end_date) ? $task->end_date : ''); ?>" >
                            <?php echo $errors->first('end_date', '<p class="help-block">:message</p>'); ?>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group <?php echo e($errors->has('complete_date') ? 'has-error' : ''); ?>">
                            <label for="complete_date" class="control-label"><?php echo e('Completed date'); ?></label>
                            <input class="form-control" name="complete_date" type="text" id="complete_date" value="<?php echo e(isset($task->complete_date) ? $task->complete_date : ''); ?>" >
                            <?php echo $errors->first('complete_date', '<p class="help-block">:message</p>'); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="documents" class="control-label"><?php echo e('Documents'); ?> <i class="fa fa-link"></i></label>
    <select name="documents[]" id="documents" multiple class="form-control">
        <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($document->id); ?>" <?php echo e(isset($selected_documents) && in_array($document->id, $selected_documents)?"selected":""); ?>><?php echo e($document->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<?php if(\Auth::user()->is_admin == 1): ?>
    <div class="form-group <?php echo e($errors->has('assigned_user_id') ? 'has-error' : ''); ?>">
        <label for="assigned_user_id" class="control-label"><?php echo e('Assigned User'); ?></label>
        <select name="assigned_user_id" id="assigned_user_id" class="form-control">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($user->id); ?>" <?php echo e(isset($task->assigned_user_id) && $task->assigned_user_id == $user->id?"selected":""); ?>><?php echo e($user->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <?php echo $errors->first('assigned_user_id', '<p class="help-block">:message</p>'); ?>

    </div>
<?php endif; ?>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>

<input type="hidden" id="getContactsAjaxUrl" value="<?php echo e(url('/admin/api/contacts/get-contacts-by-status')); ?>" /><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/pages/tasks/form.blade.php ENDPATH**/ ?>
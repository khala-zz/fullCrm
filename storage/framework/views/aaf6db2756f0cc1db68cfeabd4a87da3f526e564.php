<div class="panel panel-default">
    <div class="panel-heading">Basic info</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group <?php echo e($errors->has('first_name') ? 'has-error' : ''); ?>">
                    <label for="first_name" class="control-label"><?php echo e('First Name'); ?></label>
                    <input class="form-control" name="first_name" type="text" id="first_name" value="<?php echo e(isset($contact->first_name) ? $contact->first_name : ''); ?>" >
                    <?php echo $errors->first('first_name', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group <?php echo e($errors->has('middle_name') ? 'has-error' : ''); ?>">
                    <label for="middle_name" class="control-label"><?php echo e('Middle Name'); ?></label>
                    <input class="form-control" name="middle_name" type="text" id="middle_name" value="<?php echo e(isset($contact->middle_name) ? $contact->middle_name : ''); ?>" >
                    <?php echo $errors->first('middle_name', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group <?php echo e($errors->has('last_name') ? 'has-error' : ''); ?>">
                    <label for="last_name" class="control-label"><?php echo e('Last Name'); ?></label>
                    <input class="form-control" name="last_name" type="text" id="last_name" value="<?php echo e(isset($contact->last_name) ? $contact->last_name : ''); ?>" >
                    <?php echo $errors->first('last_name', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group <?php echo e($errors->has('status') ? 'has-error' : ''); ?>">
                    <label for="status" class="control-label"><?php echo e('Status'); ?></label>
                    <select name="status" id="status" class="form-control">
                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($status->id); ?>" <?php echo e(isset($contact->status) && $contact->status == $status->id ? 'selected':''); ?>><?php echo e($status->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php echo $errors->first('status', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group <?php echo e($errors->has('referral_source') ? 'has-error' : ''); ?>">
                    <label for="referral_source" class="control-label"><?php echo e('Referral Source'); ?></label>
                    <input class="form-control" name="referral_source" type="text" id="referral_source" value="<?php echo e(isset($contact->referral_source) ? $contact->referral_source : ''); ?>" >
                    <?php echo $errors->first('referral_source', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group <?php echo e($errors->has('position_title') ? 'has-error' : ''); ?>">
                    <label for="position_title" class="control-label"><?php echo e('Position Title'); ?></label>
                    <input class="form-control" name="position_title" type="text" id="position_title" value="<?php echo e(isset($contact->position_title) ? $contact->position_title : ''); ?>" >
                    <?php echo $errors->first('position_title', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group <?php echo e($errors->has('company') ? 'has-error' : ''); ?>">
                    <label for="company" class="control-label"><?php echo e('Company'); ?></label>
                    <input class="form-control" name="company" type="text" id="company" value="<?php echo e(isset($contact->company) ? $contact->company : ''); ?>" >
                    <?php echo $errors->first('company', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group <?php echo e($errors->has('industry') ? 'has-error' : ''); ?>">
                    <label for="inductry" class="control-label"><?php echo e('Industry'); ?></label>
                    <input class="form-control" name="industry" type="text" id="industry" value="<?php echo e(isset($contact->industry) ? $contact->industry : ''); ?>" >
                    <?php echo $errors->first('industry', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="col-md-4">
                <h4>Emails</h4>
                <div class="row">
                    <div class="col-md-10">
                        <div id="emails-wrapper">
                            <?php if(!isset($contact->emails) || count($contact->emails) == 0): ?>
                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-md-10">
                                        <input type="text" name="emails[]" class="form-control" value="" />
                                    </div>
                                </div>
                            <?php else: ?>
                                <?php $__currentLoopData = $contact->emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row" style="margin-top: 5px;">
                                        <div class="col-md-10">
                                            <input type="text" name="emails[]" class="form-control" value="<?php echo e($email->email); ?>" />
                                        </div>
                                        <?php if($loop->iteration > 1): ?>
                                            <div class="col-md-2"> <a href="javascript:void(0)" onclick="$(this).parent().parent().remove();"><i class="fa fa-remove"></i></a></div>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="javascript:void(0)" id="new_email" class="btn btn-warning btn-sm" title="add new email"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4>Phones</h4>
                <div class="row">
                    <div class="col-md-10">
                        <div id="phones-wrapper">
                            <?php if(!isset($contact->phones) || count($contact->phones) == 0): ?>
                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-md-10">
                                        <input type="text" name="phones[]" class="form-control" value="" />
                                    </div>
                                </div>
                            <?php else: ?>
                                <?php $__currentLoopData = $contact->phones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row" style="margin-top: 5px;">
                                        <div class="col-md-10">
                                            <input type="text" name="phones[]" class="form-control" value="<?php echo e($phone->phone); ?>" />
                                        </div>
                                        <?php if($loop->iteration > 1): ?>
                                            <div class="col-md-2"> <a href="javascript:void(0)" onclick="$(this).parent().parent().remove();"><i class="fa fa-remove"></i></a></div>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="javascript:void(0)" id="new_phone" class="btn btn-warning btn-sm" title="add new phone"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Project info</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group <?php echo e($errors->has('project_type') ? 'has-error' : ''); ?>">
                    <label for="project_type" class="control-label"><?php echo e('Project Type'); ?></label>
                    <input class="form-control" name="project_type" type="text" id="project_type" value="<?php echo e(isset($contact->project_type) ? $contact->project_type : ''); ?>" >
                    <?php echo $errors->first('project_type', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group <?php echo e($errors->has('project_description') ? 'has-error' : ''); ?>">
                    <label for="project_description" class="control-label"><?php echo e('Project Description'); ?></label>
                    <input class="form-control" name="project_description" type="text" id="project_description" value="<?php echo e(isset($contact->project_description) ? $contact->project_description : ''); ?>" >
                    <?php echo $errors->first('project_description', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group <?php echo e($errors->has('budget') ? 'has-error' : ''); ?>">
                    <label for="budget" class="control-label"><?php echo e('Budget'); ?></label>
                    <input class="form-control" name="budget" type="text" id="budget" value="<?php echo e(isset($contact->budget) ? $contact->budget : ''); ?>" >
                    <?php echo $errors->first('budget', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Address info</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2">
                <div class="form-group <?php echo e($errors->has('address_country') ? 'has-error' : ''); ?>">
                    <label for="address_country" class="control-label"><?php echo e('Country'); ?></label>
                    <input class="form-control" name="address_country" type="text" id="address_country" value="<?php echo e(isset($contact->address_country) ? $contact->address_country : ''); ?>" >
                    <?php echo $errors->first('address_country', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group <?php echo e($errors->has('address_state') ? 'has-error' : ''); ?>">
                    <label for="address_state" class="control-label"><?php echo e('State'); ?></label>
                    <input class="form-control" name="address_state" type="text" id="address_state" value="<?php echo e(isset($contact->address_state) ? $contact->address_state : ''); ?>" >
                    <?php echo $errors->first('address_state', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group <?php echo e($errors->has('address_city') ? 'has-error' : ''); ?>">
                    <label for="address_city" class="control-label"><?php echo e('City'); ?></label>
                    <input class="form-control" name="address_city" type="text" id="address_city" value="<?php echo e(isset($contact->address_city) ? $contact->address_city : ''); ?>" >
                    <?php echo $errors->first('address_city', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group <?php echo e($errors->has('address_street') ? 'has-error' : ''); ?>">
                    <label for="address_street" class="control-label"><?php echo e('Street'); ?></label>
                    <input class="form-control" name="address_street" type="text" id="address_street" value="<?php echo e(isset($contact->address_street) ? $contact->address_street : ''); ?>" >
                    <?php echo $errors->first('address_street', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group <?php echo e($errors->has('address_zipcode') ? 'has-error' : ''); ?>">
                    <label for="address_zipcode" class="control-label"><?php echo e('Zipcode'); ?></label>
                    <input class="form-control" name="address_zipcode" type="text" id="address_zipcode" value="<?php echo e(isset($contact->address_zipcode) ? $contact->address_zipcode : ''); ?>" >
                    <?php echo $errors->first('address_zipcode', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Other info</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group <?php echo e($errors->has('website') ? 'has-error' : ''); ?>">
                    <label for="website" class="control-label"><?php echo e('Website'); ?></label>
                    <input class="form-control" name="website" type="text" id="website" value="<?php echo e(isset($contact->website) ? $contact->website : ''); ?>" >
                    <?php echo $errors->first('website', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group <?php echo e($errors->has('linkedin') ? 'has-error' : ''); ?>">
                    <label for="linkedin" class="control-label"><?php echo e('Linkedin'); ?></label>
                    <input class="form-control" name="linkedin" type="text" id="linkedin" value="<?php echo e(isset($contact->linkedin) ? $contact->linkedin : ''); ?>" >
                    <?php echo $errors->first('linkedin', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
                    <label for="description" class="control-label"><?php echo e('Description'); ?></label>
                    <textarea class="form-control" name="description" type="text" id="description"><?php echo e(isset($contact->description) ? $contact->description : ''); ?></textarea>
                    <?php echo $errors->first('description', '<p class="help-block">:message</p>'); ?>

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
                <option value="<?php echo e($user->id); ?>" <?php echo e(isset($contact->assigned_user_id) && $contact->assigned_user_id == $user->id?"selected":""); ?>><?php echo e($user->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <?php echo $errors->first('assigned_user_id', '<p class="help-block">:message</p>'); ?>

    </div>
<?php endif; ?>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/pages/contacts/form.blade.php ENDPATH**/ ?>
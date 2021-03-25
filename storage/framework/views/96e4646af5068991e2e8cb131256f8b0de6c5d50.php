

<?php $__env->startSection('title', ' | Show contact'); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>
            contact #<?php echo e($contact->id); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/admin/')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo e(url('/admin/contacts')); ?>">Contacts</a></li>
            <li class="active">Show</li>
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <a href="<?php echo e(url('/admin/contacts')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                        <?php if(user_can('edit_contact')): ?>
                            <a href="<?php echo e(url('/admin/contacts/' . $contact->id . '/edit')); ?>" title="Edit contact"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <?php endif; ?>

                        <?php if(user_can('delete_contact')): ?>
                            <form method="POST" action="<?php echo e(url('admin/contacts' . '/' . $contact->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <button type="submit" class="btn btn-danger btn-sm" title="Delete contact" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        <?php endif; ?>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <?php if(\Auth::user()->is_admin == 1): ?>
                                        <tr>
                                            <th>ID</th><td><?php echo e($contact->id); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                    <tr><th> First Name </th><td> <?php echo e($contact->first_name); ?> </td>
                                    </tr><tr><th> Middle Name </th><td> <?php echo e($contact->middle_name); ?> </td></tr>
                                    <tr><th> Last Name </th><td> <?php echo e($contact->last_name); ?> </td></tr>
                                    <tr><th> Status </th><td> <i class="btn bg-maroon"><?php echo e($contact->getStatus->name); ?></i> </td></tr>
                                    <tr><th> Referral source </th><td> <?php echo e($contact->referral_cource); ?> </td></tr>
                                    <tr><th> Position title </th><td> <?php echo e($contact->position_title); ?> </td></tr>
                                    <tr><th> Industry </th><td> <?php echo e($contact->industry); ?> </td></tr>
                                    <tr><th> Project type </th><td> <?php echo e($contact->project_type); ?> </td></tr>
                                    <tr><th> Project description </th><td> <?php echo e($contact->project_description); ?> </td></tr>
                                    <tr><th> Description </th><td> <?php echo e($contact->description); ?> </td></tr>
                                    <tr><th> Company </th><td> <?php echo e($contact->company); ?> </td></tr>
                                    <tr><th> Budget </th><td> <?php echo e($contact->budget); ?> </td></tr>
                                    <tr><th> Website </th><td> <?php echo e($contact->website); ?> </td></tr>
                                    <tr><th> Linkedin </th><td> <?php echo e($contact->linkedin); ?> </td></tr>
                                    <tr><th> Street </th><td> <?php echo e($contact->address_street); ?> </td></tr>
                                    <tr><th> City </th><td> <?php echo e($contact->address_city); ?> </td></tr>
                                    <tr><th> State </th><td> <?php echo e($contact->address_state); ?> </td></tr>
                                    <tr><th> Country </th><td> <?php echo e($contact->address_country); ?> </td></tr>
                                    <tr><th> Zipcode </th><td> <?php echo e($contact->address_zipcode); ?> </td></tr>
                                    <?php if(\Auth::user()->is_admin == 1): ?>
                                        <tr><th> Created by </th><td><?php echo e($contact->createdBy->name); ?></td></tr>
                                        <tr><th> Modified by </th><td><?php echo e(isset($contact->modifiedBy->name)?$contact->modifiedBy->name:""); ?></td></tr>
                                    <?php endif; ?>

                                    <tr><th> Assigned to </th><td><?php echo e($contact->assignedTo != null ?$contact->assignedTo->name : "not set"); ?></td></tr>
                                    <tr><th> Created at </th><td><?php echo e($contact->created_at); ?></td></tr>
                                    <tr><th> Modified at </th><td><?php echo e($contact->updated_at); ?></td></tr>
                                    <?php if($contact->emails->count() > 0): ?>
                                        <tr><th>Emails </th> <td><?php echo e(implode(", ", array_column($contact->emails->toArray(), "email"))); ?></td></tr>
                                    <?php endif; ?>
                                    <?php if($contact->phones->count() > 0): ?>
                                        <tr><th>Phones </th> <td><?php echo e(implode(", ", array_column($contact->phones->toArray(), "phone"))); ?></td></tr>
                                    <?php endif; ?>
                                    <?php if($contact->documents->count() > 0): ?>
                                        <tr><th>Documents </th> <td><?php $__currentLoopData = $contact->documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <a href="<?php echo e(url('uploads/documents/' . $document->file)); ?>"><?php echo e($document->name); ?></a> - <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td></tr>
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
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/pages/contacts/show.blade.php ENDPATH**/ ?>
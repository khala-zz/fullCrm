

<?php $__env->startSection('title', ' | My Profile'); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>
            My Profile
        </h1>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <?php echo $__env->make('includes.flash_message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php if(user_can('edit_profile')): ?>
                            <a href="<?php echo e(url('/admin/my-profile/edit')); ?>" title="Edit profile"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
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

                                <tr><th> Name </th><td> <?php echo e($user->name); ?> </td>
                                </tr><tr><th> Email </th><td> <?php echo e($user->email); ?> </td></tr>
                                <tr><th> Position Title </th><td> <?php echo e($user->position_title); ?> </td></tr>
                                <tr><th> Phone </th><td> <?php echo e($user->phone); ?> </td></tr>

                                </tbody>
                            </table>

                            <hr/>

                            <?php if(user_can('list_documents')): ?>
                                <h3>Documents assigned</h3>
                                <?php if($user->documents->count() > 0): ?>
                                    <table class="table">
                                        <tr>
                                            <th>Name</th>
                                            <th>View</th>
                                        </tr>
                                        <tbody>
                                        <?php $__currentLoopData = $user->documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($document->name); ?></td>
                                                <td>
                                                    <?php if(user_can("view_document")): ?>
                                                        <a href="<?php echo e(url('/admin/documents/' . $document->id)); ?>"><i class="fa fa-camera"></i></a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                <?php else: ?>
                                    <p>No documents assigned</p>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if(user_can('list_contacts')): ?>
                                <h3>Contacts assigned</h3>
                                <div class="box-body">
                                    <div class="box-group" id="accordion">
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#contacts">
                                                        All contacts
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="contacts" class="panel-collapse collapse in">
                                                <div class="box-body">
                                                    <?php if($user->contacts->count() > 0): ?>
                                                        <table class="table">
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>View</th>
                                                            </tr>
                                                            <tbody>
                                                            <?php $__currentLoopData = $user->contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><?php echo e($contact->getName()); ?></td>
                                                                    <td>
                                                                        <?php if(user_can("view_contact")): ?>
                                                                            <a href="<?php echo e(url('/admin/contacts/' . $contact->id)); ?>" class="btn btn-info btn-sm"><i class="fa fa-camera"></i></a>
                                                                        <?php endif; ?>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                    <?php else: ?>
                                                        <p>No contacts assigned</p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#my_leads">
                                                        My leads
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="my_leads" class="panel-collapse collapse">
                                                <div class="box-body">
                                                    <?php if($user->leads->count() > 0): ?>
                                                        <table class="table">
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>View</th>
                                                            </tr>
                                                            <tbody>
                                                            <?php $__currentLoopData = $user->leads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><?php echo e($contact->getName()); ?></td>
                                                                    <td>
                                                                        <?php if(user_can("view_contact")): ?>
                                                                            <a href="<?php echo e(url('/admin/contacts/' . $contact->id)); ?>" class="btn btn-info btn-sm"><i class="fa fa-camera"></i></a>
                                                                        <?php endif; ?>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                    <?php else: ?>
                                                        <p>No leads assigned</p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#my_opportunities">
                                                        My opportunities
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="my_opportunities" class="panel-collapse collapse">
                                                <div class="box-body">
                                                    <?php if($user->opportunities->count() > 0): ?>
                                                        <table class="table">
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>View</th>
                                                            </tr>
                                                            <tbody>
                                                            <?php $__currentLoopData = $user->opportunities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><?php echo e($contact->getName()); ?></td>
                                                                    <td>
                                                                        <?php if(user_can("view_contact")): ?>
                                                                            <a href="<?php echo e(url('/admin/contacts/' . $contact->id)); ?>" class="btn btn-info btn-sm"><i class="fa fa-camera"></i></a>
                                                                        <?php endif; ?>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                    <?php else: ?>
                                                        <p>No opportunities assigned</p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#my_customers">
                                                        My customers
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="my_customers" class="panel-collapse collapse">
                                                <div class="box-body">
                                                    <?php if($user->customers->count() > 0): ?>
                                                        <table class="table">
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>View</th>
                                                            </tr>
                                                            <tbody>
                                                            <?php $__currentLoopData = $user->customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><?php echo e($contact->getName()); ?></td>
                                                                    <td>
                                                                        <?php if(user_can("view_contact")): ?>
                                                                            <a href="<?php echo e(url('/admin/contacts/' . $contact->id)); ?>" class="btn btn-info btn-sm"><i class="fa fa-camera"></i></a>
                                                                        <?php endif; ?>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                    <?php else: ?>
                                                        <p>No customers assigned</p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#my_archives">
                                                        My archives / Close
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="my_archives" class="panel-collapse collapse">
                                                <div class="box-body">
                                                    <?php if($user->archives->count() > 0): ?>
                                                        <table class="table">
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>View</th>
                                                            </tr>
                                                            <tbody>
                                                            <?php $__currentLoopData = $user->archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><?php echo e($contact->getName()); ?></td>
                                                                    <td>
                                                                        <?php if(user_can("view_contact")): ?>
                                                                            <a href="<?php echo e(url('/admin/contacts/' . $contact->id)); ?>" class="btn btn-info btn-sm"><i class="fa fa-camera"></i></a>
                                                                        <?php endif; ?>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                    <?php else: ?>
                                                        <p>No archives assigned</p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if(user_can('list_tasks')): ?>
                                <h3>Tasks assigned</h3>
                                <?php if($user->tasks->count() > 0): ?>
                                    <table class="table">
                                        <tr>
                                            <th>Name</th>
                                            <th>View</th>
                                        </tr>
                                        <tbody>
                                        <?php $__currentLoopData = $user->tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($task->name); ?></td>
                                                <td>
                                                    <?php if(user_can("view_task")): ?>
                                                        <a href="<?php echo e(url('/admin/tasks/' . $task->id)); ?>"><i class="fa fa-camera"></i></a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                <?php else: ?>
                                    <p>No tasks assigned</p>
                                <?php endif; ?>
                            <?php endif; ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/pages/users/profile/view.blade.php ENDPATH**/ ?>
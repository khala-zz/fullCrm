<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php if(\Auth::user()->image != null): ?>
                    <img src="<?php echo e(url('uploads/users/' . \Auth::user()->image)); ?>" class="img-circle" alt="User Image">
                <?php else: ?>
                    <img src="<?php echo e(url('theme/dist/img/image_placeholder.png')); ?>" class="img-circle" alt="User Image">
                <?php endif; ?>
            </div>
            <div class="pull-left info">
                <p><?php echo e(\Auth::user()->name); ?></p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php echo e(Request::segment(2) == ""?"active":""); ?>">
                <a href="<?php echo e(url('/admin')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <?php if(user_can('list_contacts')): ?>
                <li class="treeview <?php echo e(Request::segment(2) == 'contacts'? 'active':''); ?>">
                    <a href="#">
                        <i class="fa fa-address-card"></i> <span>Accounts</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php echo e(Request::segment(2) == "contacts" && request('status_name') == null?"active":""); ?>">
                            <a href="<?php echo e(url('/admin/contacts')); ?>"><i class="fa fa-list"></i> All contacts</a>
                        </li>
                        <li class="<?php echo e(Request::segment(2) == "contacts" && request('status_name') == 'Lead'?"active":""); ?>">
                            <a href="<?php echo e(url('/admin/contacts?status_name=Lead')); ?>"><i class="fa fa-leaf"></i> Leads</a>
                        </li>
                        <li class="<?php echo e(Request::segment(2) == "contacts" && request('status_name') == 'Opportunity'?"active":""); ?>">
                            <a href="<?php echo e(url('/admin/contacts?status_name=Opportunity')); ?>"><i class="fa fa-flag"></i> Opportunities</a>
                        </li>
                        <li class="<?php echo e(Request::segment(2) == "contacts" && request('status_name') == 'Customer'?"active":""); ?>">
                            <a href="<?php echo e(url('/admin/contacts?status_name=Customer')); ?>"><i class="fa fa-user-circle"></i> Customers</a>
                        </li>
                        <li class="<?php echo e(Request::segment(2) == "contacts" && request('status_name') == 'Close'?"active":""); ?>">
                            <a href="<?php echo e(url('/admin/contacts?status_name=Close')); ?>"><i class="fa fa-ban"></i> Close</a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if(user_can('list_documents')): ?>
                <li class="<?php echo e(Request::segment(2) == "documents"?"active":""); ?>">
                    <a href="<?php echo e(url('/admin/documents')); ?>">
                        <i class="fa fa-file-word-o"></i> <span>Documents</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if(user_can('list_tasks')): ?>
                <li class="<?php echo e(Request::segment(2) == "tasks"?"active":""); ?>">
                    <a href="<?php echo e(url('/admin/tasks')); ?>">
                        <i class="fa fa-tasks"></i> <span>Tasks</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if(user_can('list_emails') || user_can('compose_email')): ?>
                <li class="treeview <?php echo e(Request::segment(2) == 'mailbox' || strpos(Request::segment(2), "mailbox")!==FALSE? 'active':''); ?>">
                    <a href="#">
                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <?php if(user_can('list_emails')): ?>
                            <li class="<?php echo e(Request::segment(2) == "mailbox" || Request::segment(3)=="" || Request::segment(3)=="Inbox"?"active":""); ?>">
                                <a href="<?php echo e(url('/admin/mailbox')); ?>">
                                    Inbox
                                    <?php if(count(getUnreadMessages()) > 0): ?>
                                        <span class="pull-right-container">
                                            <span class="label label-primary pull-right"><?php echo e(count(getUnreadMessages())); ?></span>
                                        </span>
                                    <?php endif; ?>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if(user_can('compose_email')): ?>
                            <li class="<?php echo e(Request::segment(2) == "mailbox-create"?"active":""); ?>">
                                <a href="<?php echo e(url('/admin/mailbox-create')); ?>">
                                    Compose
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if(user_can('show_calendar')): ?>
                <li class="<?php echo e(Request::segment(2) == "calendar"?"active":""); ?>">
                    <a href="<?php echo e(url('/admin/calendar')); ?>">
                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if(\Auth::user()->is_admin == 1): ?>
                <li class="<?php echo e(in_array(Request::segment(2), ['users', 'permissions', 'roles'])?"active":""); ?> treeview">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>User Managment</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php echo e(Request::segment(2) == "users"?"active":""); ?>">
                            <a href="<?php echo e(url('/admin/users')); ?>"><i class="fa fa-user-o"></i> Users</a>
                        </li>

                        <li class="<?php echo e(Request::segment(2) == "permissions"?"active":""); ?>">
                            <a href="<?php echo e(url('/admin/permissions')); ?>"><i class="fa fa-ban"></i> Permissions</a>
                        </li>
                        <li class="<?php echo e(Request::segment(2) == "roles"?"active":""); ?>">
                            <a href="<?php echo e(url('/admin/roles')); ?>"><i class="fa fa-list"></i> Roles</a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside><?php /**PATH C:\xampp\htdocs\crm_laravel\resources\views/layout/sidebar.blade.php ENDPATH**/ ?>
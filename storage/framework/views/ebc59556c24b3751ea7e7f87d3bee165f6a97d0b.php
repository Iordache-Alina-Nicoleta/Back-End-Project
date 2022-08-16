<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <br><br>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>

<div class="card my-4">
    <div class="card-header">
    	<div class="row">
    		<div class="col-8">
    			<i class="fas fa-table me-1"></i> User Management
    		</div>
    	</div>
    	<div class="col float-end">
            <form  action="<?php echo e(route('search-user')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="text" style="border-radius:2px" name="name" placeholder="Search..."/>
                <button class="btn btn-default-sm bg-success text-light" type="submit" style="border-radius:15px">Search
                </button>
            </form>
    	</div>	
    </div>

    <div class ="row">
        <div class ="col-12">
            <table class = "table">
                <thead>
                    <tr>
    					<th>Image</th>
                        <th>User id</th>
                        <th>User Name</th>
                        <th>Email Address</th>
                        <th>Password</th>
                        <th>Contact No.</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Created On</th>
                        <th>Updated On</th>
                        <th>Action</th>
    				</tr>
    		    </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($user->profile_upload); ?></td>
                            <td><?php echo e($user->user_id); ?></td>
                            <td><?php echo e($user->user_name); ?></td>
                            <td><?php echo e($user->email_address); ?></td>
                            <td><?php echo e($user->password); ?></td>
                            <td><?php echo e($user->contact_no); ?></td>
                            <td><?php echo e($user->user_address); ?></td>
                            <td><?php echo e($user->status); ?></td>
                            <td><?php echo e($user->Created_On->format("d.m.Y")); ?></td>
                            <td><?php echo e($user->Updated_On->format("d.m.Y")); ?></td>
                            <td>
                                <form style="display:inline" method="POST" action="<?php echo e(route("delete-user", $user->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("delete"); ?>
                                    <button type ="submit" class = "btn btn-sm"><img src ="https://www.nicepng.com/png/detail/362-3620680_delete-icon-png-download-.png" width="20px" height="20px"></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php /**PATH C:\laragon\www\INNA\resources\views/pages/userBook/index.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 font-weight-bold">
           User Management
        </h2>
     <?php $__env->endSlot(); ?>

<div class="container-fluid py-4" style="min-height: 700px;">
    <div class="card mb-4">
    	<div class="card-header">
    		<div class="row">
    			<div class="col col-md-6">
    				<i class="fas fa-table me-1"></i> User Management
    			</div>
    			<div class="col col-md-6" align="right">
    			</div>
    		</div>
    	</div>
    	<div class="card-body">
        <div class ="row">
                <div class ="col-6 float-left"></div>
                <div class ="col-6">
                    <a href = "<?php echo e(route("store-profile")); ?>" class = "btn float-end"><img src="https://www.freeiconspng.com/uploads/document-add-icon-16.png" width="60px" height="60px"></a>
                </div>
            </div>
    		<table class ="table">
    			<thead>
    				<tr>
    					<th>User photo</th>
                        <th>User Name</th>
                        <th>Password</th>
                        <th>Email Address</th>
                        <th>User Address</th>
                        <th>Contact No</th>
                        <th>User id</th>
                        
    				</tr>
    			</thead>
                 <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->Profile->file_upload); ?></td>
                        <td><div class ="text-success"><?php echo e($user->Profile->user_name); ?></div></td>
                        <td><?php echo e($user->Profile ->password); ?></td>
                        <td><?php echo e($user->Profile ->email_address); ?></td>
                        <td><?php echo e($user->Profile ->user_address); ?></td>
                        <td><?php echo e($user->Profile ->contact_no); ?></td>
                        <td><?php echo e($user->Profile ->user_id); ?></td>
                        
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
    		</table>
    	</div>
    </div>
</div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\INNA\resources\views/pages/user/index.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <br><br>
     <?php $__env->endSlot(); ?>

<div class="d-flex align-items-center justify-content-center mt-5 mb-5" style="min-height:700px;">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header text-center"><h2>Profile</h2></div>
			<div class="card-body">
				<form method="POST" action = "<?php echo e(route('store-profile')); ?>" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
					<div class ="mb-3">
					 	<label for="file_upload" class="form-label">User photo</label>
                        <input type="file" id="fileUpload" name="file_upload" class="form-control" accept=".jpg,.png"/> 
						<br>
						<span class="text-muted">Only .jpg & .png image allowed. Image size must be 225 x 225</span>
						<br /> 
					</div>

					<div class="mb-3">
						<label for="user_name" class="form-label">User Name</label>
                            <select name = "user_name" class ="form-select">
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value ="<?php echo e($user->name); ?>"<?php echo e($user->name== $user->name ? : ''); ?>><?php echo e($user->name); ?></option>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
					</div>

					<div class="mb-3">
						<label class="form-label">Password</label>
						<input type="password" name="password" id="password" class="form-control" value="" />
					</div>

					<div class="mb-3">
						<label class="form-label">Email address</label>
						<select name = "email_address" class ="form-select">
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value ="<?php echo e($user->email); ?>"<?php echo e($user->email== $user->email ? : ''); ?>><?php echo e($user->email); ?></option>        
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </select>
					</div>
					
					<div class="mb-3">
						<label class="form-label">User Address</label>
						
						<textarea name="user_address" id="user_address" class="form-control"></textarea>
					</div>
					
					<div class="mb-3">
						<label class="form-label">User Contact No.</label>
						<input type="text" name="contact_no" id="contact_no" class="form-control" value="" />
					</div>

					<div class="mb-3">
						<label class="form-label">User Id</label>
						<input type="number" name="user_id" id="user_id" class="form-control" value="" />
					</div>

					
					<div class="text-center mt-4 mb-2">
					
						<input type="submit" name="save_button" class="btn btn-success text-white" value="Save" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\INNA\resources\views/profile.blade.php ENDPATH**/ ?>
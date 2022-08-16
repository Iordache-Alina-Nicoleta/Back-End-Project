<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 font-weight-bold">
            Library Settings
        </h2>
     <?php $__env->endSlot(); ?>

<div class="container-fluid px-4" >
	<div class="card">
		<div class="card-body">
			<form method="POST" action ="<?php echo e(route("update-setting")); ?>">
			<?php echo csrf_field(); ?>
			<?php echo method_field("PUT"); ?>
		
				<div class="row">
					<div class="col-md-12">
						<div class="mb-3">
							<label class="form-label">Library Name</label>
							<input type="text" name="library_name" id="library_name" class="form-control" style="background-color:##F9F9F9" value ="BookZone Library">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="mb-3">
							<label class="form-label">Address</label>
							<textarea name="address" id="address" class="form-control" style="background-color:##F9F9F9">Bucharest, sector 4, Romania</textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Contact Number</label>
							<input type="text" name="contact_no" id="contact_no" class="form-control" style="background-color:#F9F9F9" value ="0350224792">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Email Address</label>
							<input type="email" name="email_address" id="email_address" class="form-control" style="background-color:#F9F9F9" value ="bookzone@library.com">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Book Return Day Limit</label>
							<input type="number" name="book_return_day_limit" id="book_return_day_limit" class="form-control" style="background-color:#F9F9F9" value ="30">
						</div>
					</div>
					
				<div class="mt-4 mb-0 text-center">
					<input type="submit" name="edit_setting" class="btn btn-success" value="Update">
					 <a href ="<?php echo e(route('dashboard')); ?>" class ='btn'><img src ="https://icon-library.com/images/go-arrow-icon/go-arrow-icon-4.jpg" width="30px" height="30px"></a>
				</div>
	
			</form>
		</div>
	</div>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\INNA\resources\views/setting.blade.php ENDPATH**/ ?>
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
			<form method="post" action ="<?php echo e(route("update-setting")); ?>">
			<?php echo csrf_field(); ?>
            <?php echo method_field("put"); ?>
				<div class="row">
					<div class="col-md-12">
						<div class="mb-3">
							<label  for ="library_name" class="form-label">Library Name</label>
							<input class="form-control" type="text" name="library_name" value="" placeholder="Library Name" autocomplete="off"><br>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="mb-3">
							<label for ="address" class="form-label">Address</label>
							<textarea name="address" id="address" class="form-control" type ="text" placeholder="Address" ></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="mb-3">
							<label for ="contact_no" class="form-label">Contact Number</label>
							<input type="text" name="contact_no" id="contact_no" class="form-control"  value ="" placeholder="Contact number" >
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label for = "email_address" class="form-label">Email Address</label>
							<input type="email" name="email_address" id="email_address" class="form-control"  value ="" placeholder="Email Address" >
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="mb-3">
							<label for ="book_return_day_limit" class="form-label">Book Return Day Limit</label>
							<input type="number" name="book_return_day_limit" id="book_return_day_limit" class="form-control"  value ="" placeholder="Period limit" >
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
<?php endif; ?><?php /**PATH C:\laragon\www\INNA\resources\views/pages/setting/edit.blade.php ENDPATH**/ ?>
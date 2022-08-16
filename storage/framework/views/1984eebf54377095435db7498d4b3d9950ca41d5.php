<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 font-weight-bold">Setting
        </h2>
     <?php $__env->endSlot(); ?>

<div class="container-fluid px-4">
	<div class="card mb-4">
		<div class="card-header">
			<i class="fas fa-user-edit"></i> Library Setting
		</div>

		<div class="card-body">
			<form method="post" action ="">
				<div class="row">
					<div class="col-md-12">
						<div class="mb-3">
							<label class="form-label">Library Name</label>
							<input type="text" name="library_name" id="library_name" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="mb-3">
							<label class="form-label">Address</label>
							<textarea name="library_address" id="library_address" class="form-control">Address</textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Contact Number</label>
							<input type="text" name="library_contact_number" id="library_contact_number" class="form-control" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Email Address</label>
							<input type="text" name="library_email_address" id="library_email_address" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Book Return Day Limit</label>
							<input type="number" name="library_total_book_issue_day" id="library_total_book_issue_day" class="form-control" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Book Late Return One Day Fine</label>
							<input type="number" name="library_one_day_fine" id="library_one_day_fine" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Currency</label>
							<select name="library_currency" id="library_currency" class="form-control">
								<?php echo Currency_list(); ?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Timezone</label>
							<select name="library_timezone" id="library_timezone" class="form-control">
								<?php echo Timezone_list(); ?>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label class="form-label">Per User Book Issue Limit</label>
						<input type="number" name="library_issue_total_book_per_user" id="library_issue_total_book_per_user" class="form-control" />
					</div>
				</div>
				<div class="mt-4 mb-0">
					<input type="submit" name="edit_setting" class="btn btn-primary" value="Save" />
				</div>

			</form>
		</div>
	</div>
</div><?php /**PATH C:\laragon\www\INNA\resources\views/pages/settings/index.blade.php ENDPATH**/ ?>
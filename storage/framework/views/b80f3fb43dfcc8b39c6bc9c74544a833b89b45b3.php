
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 font-weight-bold">
           Edit: <?php echo e("$location->Location_Rack"); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class = "row">
        <div class = "col-6 offset-3">
            <div class = "card">
                <div class="card-header text-center">
                     <h2>Edit a new Location Rack</h2>
                </div>
                
                <div class = "card-body">
                    <form method ="POST" action = "<?php echo e(route("update-location", $location->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("PUT"); ?>
                        <div class="mb-3">
                            <label for="Location_Rack" class="form-label">Location Rack</label>
                            <input type="text" name = "Location_Rack" class="form-control" id="Location_Rack" aria-describedby="LocationRackHelp" value ="<?php echo e($location->Location_Rack); ?>">
                                <div id="LocationRackHelp" class="form-text">Name of the Location Rack</div>
                        </div>

                        <div class="mb-3">
                            <label for="Status" class="form-label">Status</label>
                            <select id="Status" name="Status" class="form-select">
                                <?php $__currentLoopData = $statuss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value =>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e(strtolower($value)); ?>"><?php echo e(strtolower($value)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                                <div id="StatusHelp" class="form-text">Issue Book - Status</div>
                        </div>

                        <div class="mb-3">
                            <label for="Created_On" class="form-label">Created On</label>
                            <input name = "Created_On" type="date" class="form-control" id="Created_On" aria-describedby="CreatedOnHelp" value ="<?php echo e($location->Created_On->format("Y-m-d")); ?>">
                                <div id="CreatedOnHelp" class="form-text">Location Rack - Created On</div>
                        </div>

                        <div class="mb-3">
                            <label for="Updated_On" class="form-label">Updated On</label>
                            <input name = "Updated_On" type="date" class="form-control" id="Updated_On" aria-describedby="UpdatedOnHelp" value ="<?php echo e($location->Updated_On->format("Y-m-d")); ?>">
                                <div id="UpdatedOnHelp" class="form-text">Location Rack - Updated On</div>
                        </div>

                        <div class="mb-3 text-center">
                            <button type = "submit" class = "btn btn-success text-white ">Update Location Rack</button>
                            <a href ="<?php echo e(route('LocationRack')); ?>" class ='btn'><img src ="https://icon-library.com/images/go-arrow-icon/go-arrow-icon-4.jpg" width="30px" height="30px"></a>
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
<?php endif; ?><?php /**PATH C:\laragon\www\INNA\resources\views/pages/locationRack/edit.blade.php ENDPATH**/ ?>
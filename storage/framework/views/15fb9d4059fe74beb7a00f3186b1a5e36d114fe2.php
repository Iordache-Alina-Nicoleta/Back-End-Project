
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 font-weight-bold">
           Add a new Category
        </h2>
     <?php $__env->endSlot(); ?>

    <div class = "row">
        <div class = "col-6 offset-3">
            <div class = "card">
                <div class="card-header text-center">
                     <h2>Add a new category</h2>
                </div>
                
                <div class = "card-body">
                    <form method ="POST" action = "<?php echo e(route ("store-category")); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="name" class="form-label">Category Name</label>
                            <input type="text" name = "name" class="form-control" id="name" aria-describedby="nameHelp">
                                <div id="nameHelp" class="form-text">Name of the Category</div>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <textarea name = "status" class="form-control" id="status"  rows="4" aria-describedby="statusHelp"></textarea>
                                <div id="statusHelp" class="form-text">Category - Status</div>
                        </div>

                        <div class="mb-3">
                            <label for="created_on" class="form-label">Created On</label>
                            <input name = "created_on" type="date" class="form-control" id="created_on" aria-describedby="createdOntHelp">
                                <div id="createdOnHelp" class="form-text">Category - Created On</div>
                        </div>

                        <div class="mb-3">
                            <label for="updated_on" class="form-label">Updated On</label>
                            <input name = "updated_on" type="date" class="form-control" id="updated_on" aria-describedby="updatedOnHelp">
                                <div id="updatedOnHelp" class="form-text">Category - Updated On</div>
                        </div>

                        <div class="mb-3 text-center">
                            <button type = "submit" class = "btn btn-primary white-text ">Add Category</button>
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
<?php endif; ?><?php /**PATH C:\laragon\www\INNA\resources\views/pages/Category/add.blade.php ENDPATH**/ ?>

<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 font-weight-bold">
           Edit client :
        </h2>
     <?php $__env->endSlot(); ?>

    <div class = "row">
        <div class = "col-6 offset-3">
            <div class = "card">
                <div class="card-header text-center">
                     <h2>Edit client</h2>
                </div>
                
                <div class = "card-body">
                    <form method ="POST" action = "<?php echo e(route('update-client', $client->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("PUT"); ?>
                        
                        <div class="mb-3">
                            <label for="client_name" class="form-label">Client Name</label>
                            <input type="text" name = "client_name" class="form-control" id="client_name" aria-describedby="clientNameHelp" value ="<?php echo e($client->client_name); ?>">
                                <div id="clientNameHelp" class="form-text">Client name</div>
                        </div>

                        <div class="mb-3">
                            <label for="contact_no" class="form-label">Contact no</label>
                            <input type="number" name = "contact_no" class="form-control" id="contact_no" aria-describedby="contactNoHelp" value ="<?php echo e($client->contact_no); ?>">
                                <div id="contactNoHelp" class="form-text">Contact number</div>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Client Address</label>
                            <input type="text" name = "address" class="form-control" id="address" aria-describedby="addressHelp" value ="<?php echo e($client->address); ?>">
                                <div id="addressHelp" class="form-text">Client address</div>
                        </div>

                        <div class="mb-3">
                            <label for= "email_address" class="form-label">Email address</label>
                            <input name = "email_address" class="form-control" type="email" id="email_address"  rows="4" aria-describedby="emailAddressHelp" value = "<?php echo e($client->email_address); ?>">
                                <div id="emailAddressHelp" class="form-text">Email address</div>
                        </div>

                        <div class="mb-3 text-center">
                            <button type = "submit" class = "btn btn-success text-white ">Update Client</button>
                            <a href ="<?php echo e(route('Client')); ?>" class ='btn '><img src ="https://icon-library.com/images/go-arrow-icon/go-arrow-icon-4.jpg" width="30px" height="30px"></a>
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
<?php endif; ?>                        <?php /**PATH C:\laragon\www\INNA\resources\views/pages/client/edit.blade.php ENDPATH**/ ?>
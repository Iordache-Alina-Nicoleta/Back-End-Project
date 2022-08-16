
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 font-weight-bold">
           Add a new Client
        </h2>
     <?php $__env->endSlot(); ?>

    <div class = "row">
        <div class = "col-6 offset-3">
            <div class = "card" >
                <div class="card-header text-center">
                     <h2>Add a new client</h2>
                </div>
                
                <div class = "card-body">
                    <form method ="POST" action = "<?php echo e(route ("store-client")); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="client_name" class="form-label">Client Name</label>
                            <input type="text" name = "client_name" class="form-control" id="client_name" aria-describedby="clientNameHelp">
                                <div id="clientNameHelp" class="form-text">Client name</div>
                        </div>

                        <div class="mb-3">
                            <label for="contact_no" class="form-label">Contact no</label>
                            <input type="number" name = "contact_no" class="form-control" id="contact_no" aria-describedby="contactNoHelp">
                                <div id="contactNoHelp" class="form-text">Contact number</div>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Client Adress</label>
                            <input type="text" name = "address" class="form-control" id="address" aria-describedby="addressHelp">
                                <div id="caddressHelp" class="form-text">Client address</div>
                        </div>

                        <div class="mb-3">
                            <label for= "email_address" class="form-label">Email address</label>
                            <input name = "email_address" class="form-control" type="email" id="email_address"  rows="4" aria-describedby="emailAddressHelp"></textarea>
                                <div id="emailAddressHelp" class="form-text">Email address</div>
                        </div>

                        

                        <div class="mb-3 text-center">
                            <button type = "submit" class = "btn btn-success text-white ">Add Client</button>
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
<?php endif; ?><?php /**PATH C:\laragon\www\INNA\resources\views/pages/client/add.blade.php ENDPATH**/ ?>
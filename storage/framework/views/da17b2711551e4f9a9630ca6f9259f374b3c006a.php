<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <br><br>
     <?php $__env->endSlot(); ?>

<div class="card my-4">
    <div class="card-header">
    	<div class="row">
    		<div class="col-8">
    			<i class="fas fa-table me-1"></i> Client Management
    		</div>
    	</div>
    	<div class="col float-end">
            <form  action="<?php echo e(route('search-client')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="text" style="border-radius:2px" name="name" placeholder="Search..."/>
                <button class="btn btn-default-sm bg-success text-light" type="submit" style="border-radius:15px">Search
                </button>
            </form>
    	</div>	
    </div>

    <div class="card-body" >
        <div class ="row">
            <div class ="col-6 float-left"></div>
            <div class ="col-6">
                <a href = "<?php echo e(route("add-client")); ?>" class = "btn float-end"><img src="https://www.freeiconspng.com/uploads/document-add-icon-16.png" width="60px" height="60px"></a>
            </div>
        </div>
    </div>


    <div class ="row">
        <div class ="col-12">
            <table class = "table">
                <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Email Address</th>
                        <th>Contact No.</th>
                        <th>Address</th>
                        <th>Action</th>
    				</tr>
    		    </thead>

                <tbody>
                    <?php $__currentLoopData = $client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <tr>
                            <td><?php echo e($client->client_name); ?></td>
                            <td><?php echo e($client->email_address); ?></td>
                            <td><?php echo e($client->contact_no); ?></td>
                            <td><?php echo e($client->address); ?></td>
                            
                            <td>
                                <a href = "<?php echo e(route("edit-client", $client->id)); ?>" class = "btn btn-sm" ><img src="https://www.freeiconspng.com/uploads/edit-pen-write-icon--2.png" width="20px" height="20px"></a>
                                <form style="display:inline" method="POST" action="<?php echo e(route("delete-client", $client->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("delete"); ?>
                                    <button type ="submit" class = "btn btn-sm"><img src ="https://www.nicepng.com/png/detail/362-3620680_delete-icon-png-download-.png" width="20px" height="20px"></button>
                                </form>
                            </td>
                        </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </tbody>
            </table>

</div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>


                
        <?php /**PATH C:\laragon\www\INNA\resources\views/pages/client/index.blade.php ENDPATH**/ ?>
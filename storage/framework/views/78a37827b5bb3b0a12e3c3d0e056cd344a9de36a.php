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
    				<h5><b> Issue-book Management</b></h5>
    			</div>
    			<div class="col float-end">
                     <form  action="<?php echo e(route('search-issue')); ?>" method="post">
                     <?php echo csrf_field(); ?>
                        <input type="text" style="border-radius:2px" name="name" placeholder="Search..."/>
                        <button class="btn btn-default-sm bg-success text-light" type="submit" style="border-radius:15px">Search
                        </button>
                    </form>
    			</div>
    		</div>
    	</div>
        
        <div class="card-body">

            <div class ="row">

                <div class ="col-6 float-left"></div>
                <div class ="col-6">
                    <a href = "<?php echo e(route("add-issue-book-page")); ?>" class = "btn float-end"><img src="https://www.freeiconspng.com/uploads/document-add-icon-16.png" width="60px" height="60px"></a>
                </div>
            </div>

            <div class ="row">
                <div class ="col-12">
                    <table class = "table">
            <thead>
                <tr>
                    <th>Book Name</th>
                    <th>Author Name</th>
                    <th>Client Name</th>
                    <th>Borrow Date</th>
                    <th>Return Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $issue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $issue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($issue->Book_Name); ?></td>
                        <td><?php echo e($issue->Author_Name); ?></td>
                        <td><?php echo e($issue->Client->client_name); ?></td>
                        <td  class =" text-center"><?php echo e($issue->Borrowed_Date->format("d.m.Y")); ?></td>
                        <td  class =" text-center"> 
                            <?php if($issue->Status == "returned"): ?>
                                <?php echo e($due->format("d.m.Y")); ?>

                            <?php else: ?> <?php echo e('-'); ?>

                            <?php endif; ?>
                        </td>
                        <td>
                            <div class ="row">
                                <div class ="col-9 offset-1 text-light bg-white" style= "border-radius:7px">


                                    <?php if($issue->Status == "not returned"): ?><span class="badge bg-danger"><?php echo e($issue->Status); ?></span>
                                    <?php else: ?> <span class="badge bg-success"><?php echo e($issue->Status); ?></span>   
                                    <?php endif; ?>
                                </div>    
                            </div>
                        </td>
                        
                        <td>
                            <a href = "<?php echo e(route("view-issue", $issue->id)); ?>" class = "btn btn-sm"><img src ="https://cdn2.iconfinder.com/data/icons/picol-vector/32/view-512.png" width="20px" height="20px"></a>
                            <a href = "<?php echo e(route("edit-issueBook-page", $issue->id)); ?>" class = "btn btn-sm" ><img src="https://www.freeiconspng.com/uploads/edit-pen-write-icon--2.png" width="20px" height="20px"></a>
                            
                            <form style="display:inline" method="POST" action="<?php echo e(route("delete-issueBook", $issue->id)); ?>">
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
            </div>

          
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\INNA\resources\views/pages/issueBook/index.blade.php ENDPATH**/ ?>
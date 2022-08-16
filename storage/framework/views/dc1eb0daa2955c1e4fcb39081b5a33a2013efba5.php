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
    				<h5><b> Book Management</b></h5>
    			</div>
    			<div class="col float-end">
                     <form  action="<?php echo e(route('search-book')); ?>" method="post">
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
                    <a href = "<?php echo e(route("add-book-page")); ?>" class = "btn float-end"><img src="https://www.freeiconspng.com/uploads/document-add-icon-16.png" width="60px" height="60px"></a>
                </div>
            </div>

            <div class ="row">
                <div class ="col-12">
                    <table class = "table">
                        <thead>
                            <tr><hr>
                                <th>Book Name</th>
                                <th>ISBN no</th>
                                <th>Author</th>
                                <th>Location Rack</th>
                                <th>Status</th>
                                <th>No. of Copy</th>
                                <th>Created On</th>
                                <th>Updated On</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($book->Book_Name); ?></td>
                                    <td><?php echo e($book->ISBN_no); ?></td>
                                    <td><?php echo e($book->Author->Author_Name); ?></td>
                                    <td class ="text-center"><?php echo e($book->location->Location_Rack); ?></td>
                                    <td>
                                        <div class="row">
                                            <div class ="col-9 offset-1 text-light bg-white" style= "border-radius:7px">
                                                <?php if($book->Status == "disable"): ?>
                                                    <span class="badge bg-danger"><?php echo e($book->Status); ?></span>
                                                <?php else: ?> 
                                                    <span class="badge bg-success"><?php echo e($book->Status); ?></span> 
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td class ="text-center">
                                        <?php if($book->Status == "disable"): ?> <?php echo e($book->no_of_copy = 0); ?>

                                        <?php else: ?> <?php echo e($book->no_of_copy); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($book->Created_On ->format("d.m.Y")); ?></td>
                                    <td><?php echo e($book->Updated_On->format("d.m.Y")); ?></td>
                                    <td>
                                        <a href = "<?php echo e(route("view-book", $book->id)); ?>" class = "btn btn-sm"><img src ="https://cdn2.iconfinder.com/data/icons/picol-vector/32/view-512.png" width="20px" height="20px"></a>
                                        <a href = "<?php echo e(route("edit-book-page", $book->id)); ?>" class = "btn btn-sm"><img src="https://www.freeiconspng.com/uploads/edit-pen-write-icon--2.png" width="20px" height="20px"></a>
                                        <form action ="<?php echo e(route("delete-book", $book->id)); ?>" method= "POST" style="display:inline">
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
<?php endif; ?><?php /**PATH C:\laragon\www\INNA\resources\views/pages/book/index.blade.php ENDPATH**/ ?>
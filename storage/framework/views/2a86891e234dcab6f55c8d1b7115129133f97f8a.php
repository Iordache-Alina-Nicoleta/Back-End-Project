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
    				<h5><b> Category Management</b></h5>
    			</div>
    			<div class="col float-end">
                     <form  action="<?php echo e(route('search-category')); ?>" method="post">
                     <?php echo csrf_field(); ?>
                        <input type="text" style="border-radius:2px" name="name" placeholder="Search..."/>
                        <button class="btn btn-default-sm bg-success text-light" type="submit" style="border-radius:15px">Search
                        </button>
                    </form>
    			</div>
    		</div>
    	</div>
        <div class="card-body" >
            
            <div class ="row">
                <div class ="col-6 float-left"></div>
                <div class ="col-6">
                    <a href = "<?php echo e(route("add-category-page")); ?>" class = "btn float-end"><img src="https://www.freeiconspng.com/uploads/document-add-icon-16.png" width="60px" height="60px"></a>
                </div>
            </div>
    
             </div>
                
               

            <div class ="row">
                <div class ="col-12">
                    <table class = "table">
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Status</th>
                                <th>Created On</th>
                                <th>Updated On</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                         <tbody>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($category->Category_Name); ?></td>
                                    <td>
                                        <div class ="row">


                                            <div class ="col-7 offset-2 text-light bg-white" style= "border-radius:7px">
                                                <?php if($category->Status == "disable"): ?>{
                                   <span class="badge bg-danger"><?php echo e($category->Status); ?></span>
                                }
                                <?php else: ?> {
                                    <span class="badge bg-success"><?php echo e($category->Status); ?></span>
                                }
                                    
                                <?php endif; ?>
                                                
                                               
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td><?php echo e($category->Created_On->format("d.m.Y")); ?></td>
                                    <td><?php echo e($category->Updated_On->format("d.m.Y")); ?></td>
                                    <td>
                                     <?php if($category->deleted_at === null): ?>
                                        <a href = "<?php echo e(route("view-category", $category->id)); ?>" class = "btn btn-sm" ><img src ="https://cdn2.iconfinder.com/data/icons/picol-vector/32/view-512.png" width="20px" height="20px"></a>
                                        <a href = "<?php echo e(route("edit-category-page", $category->id)); ?>" class = "btn btn-sm" ><img src="https://www.freeiconspng.com/uploads/edit-pen-write-icon--2.png" width="20px" height="20px"></a>

                                        <form style="display:inline" method="POST" action="<?php echo e(route("delete-category", $category->id)); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field("delete"); ?>
                                            <button type ="submit" class = "btn btn-sm"><img src ="https://www.nicepng.com/png/detail/362-3620680_delete-icon-png-download-.png" width="20px" height="20px"></button>
                                        </form>
                                         <?php else: ?>
                                            <form style="display: inline;" method="POST" action="<?php echo e(route('restore-category')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('put'); ?>
                                                <input type="hidden" name="category_id" value="<?php echo e($category->id); ?>" />
                                                <button type="submit" class="btn btn-sm btn-secondary" style="border-radius:10px">Restore</button>
                                            </form>
                                    <?php endif; ?> 
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
<?php endif; ?><?php /**PATH C:\laragon\www\INNA\resources\views/pages/category/index.blade.php ENDPATH**/ ?>
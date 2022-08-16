<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 font-weight-bold">
           Location Rack: <?php echo e($location->Location_Rack); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <div class ="row">
        <div class ="col-3">
            <div class ="card">
                <div class ="card-body">
                    <h3 style="color:red; text-shadow 2px 2px 2px 2px white"><?php echo e($location->Location_Rack); ?></h3>
                    <ul>
                        <li>Status: <?php echo e($location->Status); ?></li><br>
                        <li>Created_On: <?php echo e($location->Created_On->format("d.m.Y")); ?></li><br>
                        <li>Updated_On: <?php echo e($location->Updated_On->format("d.m.Y")); ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class ="col-9">
            <div class ="card">
                <div class ="card-body">
                    <div class ="row">
                        <div class ="col-12">
                            <p>Here we can write a description of the book's location rack.</p>
                            <a href ="<?php echo e(route('LocationRack')); ?>" class ='btn float-end'><img src ="https://icon-library.com/images/go-arrow-icon/go-arrow-icon-4.jpg" width="30px" height="30px"></a>
                        </div>
                    </div>
    
                    <div class ="row">
                        <div class = "col-12">
                            <table class ="table">
                                <thead>
                                    <tr>
                                        <td>Book Name</td>
                                        <td>Author</td>
                                        <td>Category</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $__currentLoopData = $location->Book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($book->Book_Name); ?></td>
                                        <td><?php echo e($book->Author->Author_Name); ?></td>
                                        <td><?php echo e($book->Category->Category_Name); ?></td>
                                        <td>
                                            <a href ="<?php echo e(route('view-book', $book->id)); ?>" class = "btn"><img src ="https://cdn2.iconfinder.com/data/icons/picol-vector/32/view-512.png" width="20px" height="20px"></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
        </div>   
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\INNA\resources\views/pages/locationRack/view.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 font-weight-bold">
           Book: <?php echo e($book->Book_Name); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <div class ="row">
        <div class ="col-3">
            <div class ="card">
                <div class ="card-body">
                    <h3 style="color:red; text-shadow 2px 2px 2px 2px white"><?php echo e($book->Book_Name); ?></h3>
                    <ul>
                        <li>ISBN no: <?php echo e($book->ISBN_no); ?> </li><br>
                        <li>Author: <?php echo e($book->Author->Author_Name); ?></li><br>
                        <li>Category Name: <?php echo e($book->Category->Category_Name); ?></li>
                        <li>Status: <?php echo e($book->Status); ?></li><br>
                        <li>Location Rack:<?php echo e($book->location->Location_Rack); ?></li><br>
                        <li>No of available copy:
                                <?php echo e($book->remaining); ?>

                        </li><br>
                        
                        <li>Created: <?php echo e($book->Created_On->format("d.m.Y")); ?></li><br>
                        <li>Updated: <?php echo e($book->Updated_On->format("d.m.Y")); ?></li>
                        
                    </ul>
                </div>
            </div>
        </div>

        <div class ="col-9">
            <div class ="card">
                <div class ="card-body">
                 <div class ="row">
                    <h4 class ="text-center">Description:</h4>
                    <p> <?php echo e($book->description); ?><p></div>
                    <div class ="row">
                        <div class ="col-12">
                            <a href ="<?php echo e(route('Book')); ?>" class ='btn float-end'><img src ="https://icon-library.com/images/go-arrow-icon/go-arrow-icon-4.jpg" width="30px" height="30px"></a>
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
<?php /**PATH C:\laragon\www\INNA\resources\views/pages/book/view.blade.php ENDPATH**/ ?>
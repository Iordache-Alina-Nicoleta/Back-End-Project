<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 font-weight-bold">
           Category: <?php echo e($category->Category_Name); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <div class ="row">
        <div class ="col-3">
            <div class ="card">
                <div class ="card-body">
                    <h3 style="color:red; text-shadow 2px 2px 2px 2px white"><?php echo e($category->Category_Name); ?></h3>
                    <ul>
                        
                        <li>Status: <?php echo e(($category->Status)); ?></li><br>
                        <li>Created:  <?php echo e($category->Created_On->format("d.m.Y")); ?></li><br>
                        <li>Updated:  <?php echo e($category->Updated_On->format("d.m.Y")); ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class ="col-9">
            <div class ="card">
                <div class ="card-body">
                    <div class ="row">
                        <div class ="col-12">
                            <a href ="<?php echo e(route('Category')); ?>" class ='btn float-end'><img src ="https://icon-library.com/images/go-arrow-icon/go-arrow-icon-4.jpg" width="30px" height="30px"></a>
                        </div>
                    </div>
                    <div class ="row">
                    <h4 class ="text-center">Description:</h4>
                    <p> <?php echo e($category->description); ?><p></div>
                    <div class ="row">
                        <div class = "col-12">
                            <table class ="table">
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Author</td>
                                        <td>Created On</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $__currentLoopData = $category->book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($book->Book_Name); ?></td>
                                        <td><?php echo e($book->Author->Author_Name); ?></td>
                                        <td><?php echo e($book->Created_On->format("d.m.y")); ?></td>
                                        <td>
                                            <a href ="<?php echo e(route("view-book", $book->id)); ?>" class = "btn"><img src ="https://cdn2.iconfinder.com/data/icons/picol-vector/32/view-512.png" width="20px" height="20px"></a>
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
<?php /**PATH C:\laragon\www\INNA\resources\views/pages/category/view.blade.php ENDPATH**/ ?>
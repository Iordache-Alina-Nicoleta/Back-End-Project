<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 font-weight-bold">
           Issue Book: <?php echo e($issue->Book_Name); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <div class ="row">
        <div class ="col-3">
            <div class ="card">
                <div class ="card-body">
                    <ul style = "list-style-type: none"><h4 style = " color:green"><b>Book Details:</b></h4>
                        <li></li>
                        <li>Book Name: <h4 style="color:red; text-shadow 2px 2px 2px 2px black"><?php echo e($issue->Book_Name); ?></h4><br></li>
                        <li>ISBN No: </li><br>
                        <li>Author:  <?php echo e($issue->Author_Name); ?></li><br>
                        <li>Location Rack: </li>
                        <li><br>
                            <a href="<?php echo e(route('edit-issueBook-page', $issue->id)); ?>">
                            <button class ="btn bg-success text-white" onclick="return_book()">
                            
                            Book Return</button></a>
                        </li>
                        <br><br>
                        <li><img src ="https://damientg.files.wordpress.com/2015/11/books.png" width="150px" height="100px"></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class ="col-8">
            <div class ="card">
                <div class ="card-body">
                    <div class ="row">
                        <div class ="col-7 offset-1">
                            <ul style = "list-style-type: none"><h4 style = " color:green"><b>Client Details:</b></h4>
                                <li></li><br>
                                <li>Client name: <?php echo e($issue->Client->client_name); ?></li><br>
                                <li>Client address: <?php echo e($issue->Client->address); ?></li><br>
                                <li>Client contact no: <?php echo e($issue->Client->contact_no); ?></li><br>
                                <li>Client email address: <?php echo e($issue->Client->email_address); ?></li><br>
                            </ul>
                        </div>
                    </div>
                    <br><br>
                    <div class ="row">
                        <div class ="col-6 offset-1">
                            <ul style = "list-style-type: none"><h4 style = " color:green"><b>Issue Book Details:</b></h4>
                                <li></li>
                                <li>Book borrow date: <?php echo e($issue->Borrowed_Date->format("d.m.Y")); ?></li><br>
                                <li>Book return date: 
                                    <?php if($issue->Status == "returned"): ?>
                                        <?php echo e($due->format("d.m.Y")); ?>

                                    <?php else: ?> <?php echo e('-'); ?>

                                     <?php endif; ?>
                                </li><br>
                                <li>Book issue status:<b> <?php echo e($issue->Status); ?> </b></li><br>
                                
                            </ul>
                        </div>
                    </div>
                    <div class ="row">
                        <div class ="col-12">
                            <a href ="<?php echo e(route('IssueBook')); ?>" class ='btn float-end'><img src ="https://icon-library.com/images/go-arrow-icon/go-arrow-icon-4.jpg" width="30px" height="30px"></a>
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
<?php /**PATH C:\laragon\www\INNA\resources\views/pages/issueBook/view.blade.php ENDPATH**/ ?>
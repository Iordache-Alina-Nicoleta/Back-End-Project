
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 font-weight-bold">
           Edit: <?php echo e("$issue->Book_Name"); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class = "row">
        <div class = "col-6 offset-3">
            <div class = "card">
                <div class="card-header text-center">
                     <h2>Edit a new Issue Book</h2>
                </div>
                
                <div class = "card-body">
                    <form method ="POST" action = "<?php echo e(route("update-issueBook", $issue->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("PUT"); ?>
                        <div class="mb-3">
                            <label for="Book_Name" class="form-label">Book Name</label>
                            <input type="text" name = "Book_Name" class="form-control" id="Book_Name" aria-describedby="BookNameHelp" value ="<?php echo e($issue->Book_Name); ?>">
                                <div id="BookNameHelp" class="form-text">Book Name</div>
                        </div>

                        <div class="mb-3">
                            <label for="Author_Name" class="form-label">Author Name</label>
                            <select name = "Author_Name" class ="form-select">
                                <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value ="<?php echo e($author->Author_Name); ?>"<?php echo e($issue->Author_Name== $author->Author_Name ? 'selected': ''); ?>><?php echo e($author->Author_Name); ?></option>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                        </div>

                        <div class="mb-3">
                            <label for="client_name" class="form-label">Client Name</label>
                            <select name = "client_id" class ="form-select">
                                <?php $__currentLoopData = $client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value = "<?php echo e($client->id); ?>"><?php echo e($client->client_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                        </div>

                        


                        <div class="mb-3">
                            <label for="Borrowed_Date" class="form-label">Borrowed Date</label>
                            <input name = "Borrowed_Date" type="date" class="form-control" id="Borrowed_Date" aria-describedby="BorrowedDateHelp" value ="<?php echo e($issue->Borrowed_Date->format("Y-m-d")); ?>">
                                <div id="BorrowedDateeHelp" class="form-text">Issue Book - Borrowed Date</div>
                        </div>


                        <div class="mb-3">
                            <label for="Status" class="form-label">Status</label>
                            <select id="Status" name="Status" class="form-select">
                                <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value =>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e(strtolower($value)); ?>"><?php echo e(strtolower($value)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                                <div id="StatusHelp" class="form-text">Issue Book - Status</div>
                        </div>

                        <div class="mb-3 text-center">
                            <button type = "submit" class = "btn btn-success text-white">Update Issue Book</button>
                            <a href ="<?php echo e(route('IssueBook')); ?>" class ='btn' ><img src ="https://icon-library.com/images/go-arrow-icon/go-arrow-icon-4.jpg" width="30px" height="30px"></a>
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
<?php endif; ?><?php /**PATH C:\laragon\www\INNA\resources\views/pages/issueBook/edit.blade.php ENDPATH**/ ?>
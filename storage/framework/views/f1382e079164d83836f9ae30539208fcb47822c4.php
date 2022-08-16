
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 font-weight-bold">
           Edit: <?php echo e("$book->Book_Name"); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class = "row">
        <div class = "col-6 offset-3">
            <div class = "card">
                <div class="card-header text-center">
                     <h2>Edit a new Book</h2>
                </div>
                
                <div class = "card-body">
                    <form method ="POST" action = "<?php echo e(route ("update-book", $book->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("PUT"); ?>
                        <div class="mb-3">
                            <label for="Book_Name" class="form-label">Book Name</label>
                            <input type="text" name = "Book_Name" class="form-control" id="Book_Name" aria-describedby="BookNameHelp" value ="<?php echo e($book->Book_Name); ?>">
                                <div id="BookNameHelp" class="form-text">Book's Name</div>
                        </div>

                        <div class="mb-3">
                            <label for="ISBN_no" class="form-label">ISBN no</label>
                            <input type="number" name = "ISBN_no" class="form-control" id="ISBN_no" aria-describedby="ISBNNoHelp" value ="<?php echo e($book->ISBN_no); ?>">
                                <div id="ISBNNoHelp" class="form-text">ISBN no</div>
                        </div>

                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category Name</label>
                            <select name = "category_id" class ="form-select">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value ="<?php echo e($category->id); ?>" <?php echo e($book->category_id== $category->id ? 'selected': ''); ?>><?php echo e($category->Category_Name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                        </div>

                        <div class="mb-3">
                            <label for="author_id" class="form-label">Author</label>
                            <select name = "author_id" class ="form-select">
                                <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value ="<?php echo e($author->id); ?>"<?php echo e($book->author_id== $author->id ? 'selected': ''); ?>><?php echo e($author->Author_Name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                        </div>

                        <div class="mb-3">
                            <label for="location_id" class="form-label">Location Rack</label>
                            <select name = "location_id" class ="form-select">
                                <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value ="<?php echo e($location->id); ?>" <?php echo e($book->location_id== $location->id ? 'selected': ''); ?>><?php echo e($location->Location_Rack); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                        </div>
                        

                        <div class="mb-3">
                            <label for="Status" class="form-label">Status</label>
                            <select id="Status" name="Status" class="form-select">
                                <?php $__currentLoopData = $statuss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value =>$key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e(strtolower($value)); ?>"><?php echo e(strtolower($value)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                                <div id="StatusHelp" class="form-text">Issue Book - Status</div>
                        </div>

                        <div class="mb-3">
                            <label for="no_of_copy" class="form-label">No of copy</label>
                            <input name = "no_of_copy" type="number" class="form-control" id="no_of_copy" aria-describedby="noOfCopyHelp" value="<?php echo e($book->no_of_copy); ?>">
                                <div id="noOfCopy" class="form-text">No. of Copy</div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name = "description" class="form-control" id="description"  rows="4" aria-describedby="descriptionHelp"><?php echo e($book->description); ?></textarea>
                                <div id="descriptionHelp" class="form-text">Description of the book</div>
                        </div>

                        <div class="mb-3">
                            <label for="Created_On" class="form-label">Created On</label>
                            <input name = "Created_On" type="date" class="form-control" id="Created_On" aria-describedby="CreatedOnHelp" value ="<?php echo e($book->Created_On->format("Y-m-d")); ?>">
                                <div id="CreatedOnHelp" class="form-text">Book - Created On</div>
                        </div>

                        <div class="mb-3">
                            <label for="Updated_On" class="form-label">Updated On</label>
                            <input name = "Updated_On" type="date" class="form-control" id="Updated_On" aria-describedby="UpdatedOnHelp" value ="<?php echo e($book->Updated_On->format("Y-m-d")); ?>">
                                <div id="UpdatedOnHelp" class="form-text">Book - Updated On</div>
                        </div>

                        <div class="mb-3 text-center">
                            <button type = "submit" class = "btn btn-success text-white">Update Book</button>
                            <a href ="<?php echo e(route('Book')); ?>" class ='btn'><img src ="https://icon-library.com/images/go-arrow-icon/go-arrow-icon-4.jpg" width="30px" height="30px"></a>
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
<?php endif; ?><?php /**PATH C:\laragon\www\INNA\resources\views/pages/book/edit.blade.php ENDPATH**/ ?>
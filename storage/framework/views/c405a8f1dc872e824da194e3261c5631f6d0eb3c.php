<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    </head>
    <body class="font-sans antialiased" style = "background:url(https://st2.depositphotos.com/4072575/9728/i/950/depositphotos_97282840-stock-photo-light-brown-background-paper.jpg); background-repeat: no-repeat;
            background-size: cover">
        <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Page Heading -->
        <header class="d-flex shadow-sm border-bottom" >
            <div class="container">
                <?php echo e($header); ?>

            </div>
        </header>

        <!-- Page Content -->
        <main class="container my-4 py-7 px-2 mx-3" style="background:#778899; height:auto">
        <div class ="float-start my-5 py-2 px-2 mx-3">
		<ul style="list-style-type: none">
			<li><a href ="<?php echo e(route("dashboard")); ?>" class="active text-white" style="text-decoration:none"><h5>Dashbord</h5></a></li><br>
			<li><a href ="<?php echo e(route("Category")); ?>" class="text-white" style="text-decoration:none"><h5>Category</h5></a></li><br>
			<li><a href ="<?php echo e(route("Author")); ?>" class="text-white" style="text-decoration:none"><h5>Author</h5></a></li><br>
			<li><a href ="<?php echo e(route("LocationRack")); ?>" class="text-white" style="text-decoration:none"><h5>Location Rack</h5></a></li><br>
			<li><a href ="<?php echo e(route("Book")); ?>" class="text-white" style="text-decoration:none"><h5>Book</h5></a></li><br>
			<li><a href ="<?php echo e(route("IssueBook")); ?>" class="text-white" style="text-decoration:none"><h5>Issue Book</h5></a></li><br>
            <li><a href ="<?php echo e(route("Client")); ?>" class="text-white" style="text-decoration:none"><h5>Client</h5></a></li><br>
			<li><a href ="<?php echo e(route("welcome")); ?>" class="text-white" style="text-decoration:none"><h5>Logout</h5></a></li><br>
            
		</ul>
	</div>
        <?php if(session("success")): ?>
            <div class ="row">
                <div class ="col-6 offset-3">
                    <div class = "alert alert-success alert-dismissible fade show" role = "alert">
                        <p><?php echo e(session("success")); ?></p>
                        <button type= "button" class ="btn-close" data-bs-dismiss = "alert" aria-label = "Close"></button>
                    </div> 
                </div>
            </div>

        <?php endif; ?>

        <?php if($errors->any()): ?>
            <div class ="row">
                <div class ="col-6 offset-3">
                    <div class = "alert alert-danger alert-dismissible fade show" role = "alert">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p><?php echo e($error); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <button type= "button" class ="btn-close" data-bs-dismiss = "alert" aria-label = "Close"></button>
                    </div> 
                </div>
            </div>
        <?php endif; ?>
            <?php echo e($slot); ?>

        </main>
    </body>
</html>
<?php /**PATH C:\laragon\www\INNA\resources\views/layouts/app.blade.php ENDPATH**/ ?>
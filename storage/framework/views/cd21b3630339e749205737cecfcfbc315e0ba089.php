<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo e(asset('bootstrap/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('css/boostrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="<?php echo e(asset('public/css/simple-sidebar.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/css/css2/style.css')); ?> " rel="stylesheet">





</header>




</head>



<body>

    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>














</body>
</html>
<?php /**PATH I:\Gary\laravel\resources\views/layouts/master.blade.php ENDPATH**/ ?>
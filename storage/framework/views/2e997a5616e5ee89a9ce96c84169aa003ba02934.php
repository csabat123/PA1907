<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>Coffee Shop-<?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH I:\Gary\laravel\resources\views/welcome.blade.php ENDPATH**/ ?>
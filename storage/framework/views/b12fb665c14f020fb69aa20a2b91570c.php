<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/login/style.css">
    <title>Minikuis | <?php echo e($title); ?></title>
</head>
<body>
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt-4">
      <?php echo $__env->yieldContent('container'); ?>
    </div>
</body>
</html><?php /**PATH F:\FILE KULIAH\Kuliah Online\SEMESTER 5\Pemrograman Web\UAS\UAS_Pemweb\resources\views/layouts/main.blade.php ENDPATH**/ ?>
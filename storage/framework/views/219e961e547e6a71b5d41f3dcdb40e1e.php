<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e(__('app.app_name')); ?></title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <script>
        window.sd1Texts = {
            deleteTitle: <?php echo json_encode(__('app.js.delete_title'), 15, 512) ?>,
            deleteText: <?php echo json_encode(__('app.js.delete_text'), 15, 512) ?>,
            deleteConfirm: <?php echo json_encode(__('app.js.delete_confirm'), 15, 512) ?>,
            deleteCancel: <?php echo json_encode(__('app.js.delete_cancel'), 15, 512) ?>,
        };
    </script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><?php echo e(__('app.app_name')); ?></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>"><?php echo e(__('app.nav.home')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('client.conferences.index')); ?>"><?php echo e(__('app.nav.client')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('employee.conferences.index')); ?>"><?php echo e(__('app.nav.employee')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('app.nav.admin')); ?></a>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-outline-light btn-sm" disabled>
                    <?php echo e(__('app.nav.logout')); ?>

                </button>

                <span class="text-white-50 small">
                    <?php
                        $fn = $currentUser['first_name'] ?? config('student.first_name');
                        $ln = $currentUser['last_name'] ?? config('student.last_name');
                    ?>
                    <?php echo e($fn); ?> <?php echo e($ln); ?>

                </span>
            </div>
        </div>
    </div>
</nav>

<main class="container py-4">
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
    <?php if(session('error')): ?>
        <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>
</main>
</body>
</html>
<?php /**PATH D:\Documents\GitHub\sp-sd1\resources\views/layouts/app.blade.php ENDPATH**/ ?>
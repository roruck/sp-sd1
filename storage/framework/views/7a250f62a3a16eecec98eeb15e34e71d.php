<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-8">
        <div class="card card-soft">
            <div class="card-body p-4">
                <h1 class="h4 mb-3"><?php echo e(__('app.admin.dashboard_title')); ?></h1>
                <p class="text-muted mb-4"><?php echo e(__('app.admin.dashboard_desc')); ?></p>

                <div class="d-flex gap-2 flex-wrap">
                    <a class="btn btn-outline-primary" href="<?php echo e(route('admin.users.index')); ?>">
                        <?php echo e(__('app.admin.manage_users')); ?>

                    </a>
                    <a class="btn btn-outline-primary" href="<?php echo e(route('admin.conferences.index')); ?>">
                        <?php echo e(__('app.admin.manage_conferences')); ?>

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Documents\GitHub\sp-sd1\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>
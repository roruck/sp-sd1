<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card card-soft">
            <div class="card-body p-4">
                <h1 class="h4 mb-3"><?php echo e(__('app.home.title')); ?></h1>

                <div class="mb-4">
                    <div class="text-muted"><?php echo e(__('app.home.student')); ?></div>
                    <div class="fs-5 fw-semibold">
                        <?php echo e($student['first_name']); ?> <?php echo e($student['last_name']); ?>

                        <span class="text-muted">(<?php echo e($student['group']); ?>)</span>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-md-4">
                        <a class="btn btn-primary w-100" href="<?php echo e(route('client.conferences.index')); ?>">
                            <?php echo e(__('app.home.go_client')); ?>

                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-primary w-100" href="<?php echo e(route('employee.conferences.index')); ?>">
                            <?php echo e(__('app.home.go_employee')); ?>

                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-primary w-100" href="<?php echo e(route('admin.dashboard')); ?>">
                            <?php echo e(__('app.home.go_admin')); ?>

                        </a>
                    </div>
                </div>

                <hr class="my-4">

                <div class="text-muted small">
                    <?php echo e(__('app.home.note')); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Documents\GitHub\sp-sd1\resources\views/home/index.blade.php ENDPATH**/ ?>
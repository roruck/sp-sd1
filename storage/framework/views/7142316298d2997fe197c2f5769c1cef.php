<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h4 mb-0"><?php echo e(__('app.client.conferences_title')); ?></h1>
    <span class="badge badge-soft"><?php echo e(__('app.client.only_planned')); ?></span>
</div>

<?php if(empty($conferences)): ?>
    <div class="alert alert-info"><?php echo e(__('app.client.no_conferences')); ?></div>
<?php else: ?>
    <div class="card card-soft">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead>
                    <tr>
                        <th><?php echo e(__('app.conf.title')); ?></th>
                        <th><?php echo e(__('app.conf.date')); ?></th>
                        <th><?php echo e(__('app.conf.time')); ?></th>
                        <th><?php echo e(__('app.conf.address')); ?></th>
                        <th class="text-end"><?php echo e(__('app.table.actions')); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $conferences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="fw-semibold"><?php echo e($c['title']); ?></td>
                            <td><?php echo e($c['date']); ?></td>
                            <td><?php echo e($c['time']); ?></td>
                            <td><?php echo e($c['address']); ?></td>
                            <td class="text-end">
                                <div class="table-actions justify-content-end">
                                    <a class="btn btn-sm btn-outline-primary"
                                       href="<?php echo e(route('client.conferences.show', $c['id'])); ?>">
                                        <?php echo e(__('app.table.view')); ?>

                                    </a>
                                    <a class="btn btn-sm btn-primary"
                                       href="<?php echo e(route('client.conferences.show', $c['id'])); ?>#register">
                                        <?php echo e(__('app.client.register')); ?>

                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Documents\GitHub\sp-sd1\resources\views/client/conferences/index.blade.php ENDPATH**/ ?>
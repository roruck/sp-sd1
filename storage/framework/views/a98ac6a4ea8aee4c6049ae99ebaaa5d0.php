<?php $__env->startSection('content'); ?>
<h1 class="h4 mb-3"><?php echo e(__('app.employee.conferences_title')); ?></h1>

<div class="card card-soft">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped mb-0">
                <thead>
                <tr>
                    <th><?php echo e(__('app.conf.title')); ?></th>
                    <th><?php echo e(__('app.conf.date')); ?></th>
                    <th><?php echo e(__('app.employee.status')); ?></th>
                    <th class="text-end"><?php echo e(__('app.table.actions')); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $conferences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $isPast = \Illuminate\Support\Carbon::parse($c['date'])->lessThan($today);
                    ?>
                    <tr>
                        <td class="fw-semibold"><?php echo e($c['title']); ?></td>
                        <td><?php echo e($c['date']); ?> <?php echo e($c['time']); ?></td>
                        <td>
                            <?php if($isPast): ?>
                                <span class="badge text-bg-secondary"><?php echo e(__('app.employee.past')); ?></span>
                            <?php else: ?>
                                <span class="badge text-bg-success"><?php echo e(__('app.employee.planned')); ?></span>
                            <?php endif; ?>
                        </td>
                        <td class="text-end">
                            <a class="btn btn-sm btn-outline-primary"
                               href="<?php echo e(route('employee.conferences.show', $c['id'])); ?>">
                                <?php echo e(__('app.table.view')); ?>

                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Documents\GitHub\sp-sd1\resources\views/employee/conferences/index.blade.php ENDPATH**/ ?>
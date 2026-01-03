<?php $__env->startSection('content'); ?>
<h1 class="h4 mb-3"><?php echo e(__('app.admin.users_title')); ?></h1>

<div class="card card-soft">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped mb-0">
                <thead>
                <tr>
                    <th><?php echo e(__('app.form.id')); ?></th>
                    <th><?php echo e(__('app.form.first_name')); ?></th>
                    <th><?php echo e(__('app.form.last_name')); ?></th>
                    <th><?php echo e(__('app.form.email')); ?></th>
                    <th class="text-end"><?php echo e(__('app.table.actions')); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($u['id']); ?></td>
                        <td><?php echo e($u['first_name']); ?></td>
                        <td><?php echo e($u['last_name']); ?></td>
                        <td><?php echo e($u['email']); ?></td>
                        <td class="text-end">
                            <a class="btn btn-sm btn-outline-primary" href="<?php echo e(route('admin.users.edit', $u['id'])); ?>">
                                <?php echo e(__('app.table.edit')); ?>

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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Documents\GitHub\sp-sd1\resources\views/admin/users/index.blade.php ENDPATH**/ ?>
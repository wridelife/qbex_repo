<?php $__env->startSection('title'); ?>
    Admin - <?php echo e(__('crud.admin.settlements.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('heading'); ?>
    <?php echo e(__('crud.admin.settlements.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="w-full overflow-hidden rounded-lg shadow-xs mb-6">
        <div class="w-full overflow-x-auto">
            <table id="dataTable" class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.SNo')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.general.user')); ?> <?php echo e(__('crud.inputs.type')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.general.user')); ?> <?php echo e(__('crud.inputs.name')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.general.user')); ?> <?php echo e(__('crud.inputs.email')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.type')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.mode')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.amount')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.date')); ?> & <?php echo e(__('crud.inputs.time')); ?></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    
                    <?php $__empty_1 = true; $__currentLoopData = $settlements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $settlement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3"><?php echo e($loop->index + 1); ?></td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-center">
                                <?php echo e(substr($settlement->request_from, 11)); ?>

                            </td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                                <?php echo e($settlement->walletRequester->name ?? ''); ?>

                            </td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                                <?php echo e($settlement->walletRequester->email ?? ''); ?>

                            </td>
                            <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm">
                                <?php echo e($settlement->type == 'C' ? 'Credit' : 'Debit'); ?>

                            </td>
                            <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm">
                                <?php echo e($settlement->send_by ? ucfirst($settlement->send_by) : ''); ?>

                            </td>
                            <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm">
                                <?php echo e($settlement->amount ?? '-'); ?>

                            </td>
                            <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm">
                                <?php echo e($settlement->created_at->toDate()->format('d-m-Y') ?? ''); ?>

                            </td>
                            
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td class="text-center dark:text-gray-400 dark:bg-gray-800 py-3 text-sm" colspan="10">
                                <?php echo app('translator')->get('crud.general.not_found'); ?>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        
        <div class="">
            <?php echo $settlements->links(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/admin/payment/providerSettlement.blade.php ENDPATH**/ ?>
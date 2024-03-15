<?php $__env->startSection('title'); ?>
Admin - <?php echo e(__('crud.admin.settlements.all_transactions')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('heading'); ?>
<?php echo e(__('crud.admin.settlements.all_transactions')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="w-full overflow-hidden rounded-lg shadow-xs mb-6">
    <div class="w-full overflow-x-auto">
        <table id="dataTable" class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.SNo')); ?></th>
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.transaction_id')); ?></th>
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.amount')); ?></th>
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.description')); ?></th>
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.payment.transaction_type')); ?></th>
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.date')); ?> & <?php echo e(__('crud.inputs.time')); ?></th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                
                <?php $__empty_1 = true; $__currentLoopData = $paymentLogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paymentLog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3"><?php echo e($loop->index + 1); ?></td>
                    <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-center">
                        <?php echo e($paymentLog->transaction_alias); ?>

                    </td>
                    <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                        <?php echo e(currency($paymentLog->amount) ?? ''); ?>

                    </td>
                    <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                        <?php echo e($paymentLog->transaction_desc ?? '-'); ?>

                    </td>
                    <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm">
                        <?php echo e($paymentLog->type == 'C' ? 'Credit' : 'Debit'); ?>

                    </td>
                    <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm">
                        <?php echo e($paymentLog->created_at ? $paymentLog->created_at->toDate()->format('d/m/Y') : ''); ?>

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
        <p class="mt-3 dark:text-red-500"><?php echo e(config('constants.booking_prefix', '')); ?> - Ride Transactions, PSET - Driver Transaction, FSET - Fleet Transaction, URC - User Refills</p>
    </div>
    
    <div class="">
        <?php echo $paymentLogs->links(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/admin/payment/allTransactions.blade.php ENDPATH**/ ?>
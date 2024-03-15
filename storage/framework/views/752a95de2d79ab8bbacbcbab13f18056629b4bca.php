<?php $__env->startSection('title'); ?>
    Admin - <?php echo e(__('crud.admin.ratings.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('heading'); ?>
    <?php echo e(__('crud.admin.ratings.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="w-full overflow-hidden rounded-lg shadow-xs mb-6">
        <div class="w-full overflow-x-auto">
            <table id="dataTable" class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.SNo')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.admin.users.name')); ?> <?php echo e(__('crud.inputs.name')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.admin.providers.name')); ?> <?php echo e(__('crud.inputs.name')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.admin.ratings.user')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.admin.ratings.user_comment')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.admin.ratings.provider')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.admin.ratings.provider_comment')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.date')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.general.actions')); ?></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    
                    <?php $__empty_1 = true; $__currentLoopData = $ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3"><?php echo e($loop->index + 1); ?></td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                                <?php echo e($rating->user->name ?? ''); ?>

                            </td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                                <?php echo e($rating->provider->name ?? ''); ?>

                            </td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                                <?php echo e($rating->user_rating); ?>

                            </td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                                <?php echo e($rating->user_comment ?? '-'); ?>

                            </td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                                <?php echo e($rating->provider_rating); ?>

                            </td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                                <?php echo e($rating->provider_comment ?? '-'); ?>

                            </td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                                <?php echo e($rating->created_at->toDate()->format('d/m/Y')); ?>

                            </td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.show','data' => ['link' => route('admin.request.detail', $rating->request_id)]]); ?>
<?php $component->withName('buttons.show'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.request.detail', $rating->request_id))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
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
        
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/admin/ratings.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title'); ?>
    Admin - <?php echo e(__('crud.admin.statements.agent')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('heading'); ?>
    <?php echo e(__('crud.admin.statements.agent')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="w-full overflow-hidden rounded-lg shadow-xs mb-6">
    <div class="w-full overflow-x-auto">
        <table id="dataTable" class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.SNo')); ?></th>
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.admin.agents.name')); ?> <?php echo e(__('crud.inputs.name')); ?>

                    </th>
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.admin.agents.name')); ?>

                        <?php echo e(__('crud.inputs.phone')); ?></th>
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.commission')); ?></th>
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.general.total')); ?> <?php echo e(__('crud.general.jobs')); ?></th>
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.general.member_since')); ?></th>
                    </th>
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.general.actions')); ?></th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                
                <?php $__empty_1 = true; $__currentLoopData = $agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3"><?php echo e($loop->index + 1); ?></td>
                    <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                        <div class="flex items-center text-sm">
                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                <img class="object-cover w-full h-full rounded-full"
                                    src="<?php echo e($agent->avatar ? asset('storage/'.$agent->avatar) : asset('img/avatar.png')); ?>"
                                    alt="" loading="lazy" />
                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-700 dark:text-gray-400"><?php echo e($agent->name); ?></p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                        <?php echo e($agent->mobile); ?>

                    </td>
                    <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                        <p class="font-semibold text-gray-700 dark:text-gray-400">
                            <?php echo e(currency($agent->payment->overall) ?? '-'); ?></p>
                    </td>
                    <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                        <p class="font-semibold text-gray-700 dark:text-gray-400"><?php echo e($agent->payment->jobs_count ?? '0'); ?></p>
                    </td>
                    <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                        <?php echo e($agent->created_at->diffForHumans()); ?>

                    </td>
                    <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.show','data' => ['link' => route('admin.statement.overall', ['agent', $agent->id])]]); ?>
<?php $component->withName('buttons.show'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.statement.overall', ['agent', $agent->id]))]); ?>
                         <?php echo $__env->renderComponent(); ?>
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
    
    <div class="">
        <?php echo $agents->links(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/admin/statement/agent.blade.php ENDPATH**/ ?>
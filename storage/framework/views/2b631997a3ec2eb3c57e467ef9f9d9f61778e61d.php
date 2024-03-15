<?php $__env->startSection('title'); ?>
    Admin - <?php echo e(__('crud.admin.plans.update')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('heading'); ?>
    <?php echo e(__('crud.admin.plans.update')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="w-full mb-5 bg-white rounded-lg shadow-xs dark:text-gray-400 dark:bg-gray-800">
        <div class="w-full px-5 py-5">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => ''.e(route('admin.plan.update', $plan)).'','method' => 'put','hasFile' => true]]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => ''.e(route('admin.plan.update', $plan)).'','method' => 'put','has-file' => true]); ?>
                <?php echo $__env->make('admin.plan.form-inputs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
                <div class="flex justify-end">
                    <button type="submit" class="right-0 inline-block px-4 py-1 text-sm font-semibold leading-loose text-white transition duration-200 bg-green-500 rounded-lg hover:bg-green-600" type="submit"><?php echo e(__('crud.general.update')); ?> <?php echo e(__('crud.admin.plans.name')); ?></button>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
    </div>

<div class="w-full overflow-hidden rounded-lg shadow-xs my-6 bg-white shadow-xs dark:text-gray-400 dark:bg-gray-800">

    <h2 class="my-6 p-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        <?php echo e(__("Subscribers")); ?>

    </h2>
    <div class="w-full overflow-x-auto">
        <table id="dataTable" class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.SNo')); ?></th>
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.name')); ?></th>
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.is_active')); ?></th>
                    <th class="text-center px-4 py-3"><?php echo e(__('crud.general.actions')); ?></th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                
                <?php $__empty_1 = true; $__currentLoopData = $plan->subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3"><?php echo e($loop->index + 1); ?></td>
                        <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm">
                            <div class="flex items-center text-sm">
                                <!-- Avatar with inset shadow -->
                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                    <img
                                    class="object-cover w-full h-full rounded-full"
                                    src="<?php echo e($subscription->provider->avatar ? asset('storage/'.$subscription->provider->avatar) : "https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"); ?>"
                                    alt=""
                                    loading="lazy"
                                    />
                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                    aria-hidden="true"></div>
                                </div>
                                <div>
                                    <p><?php echo e($subscription->provider->first_name); ?></p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">
                                        <?php echo e($subscription->plan->name | $subscription->plan->description); ?>

                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm capitalize">
                            <?php echo e($subscription->expire_at ?? "-"); ?>

                        </td>

                        
                        <td>
                            <div class="flex items-center justify-center">
                                
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.delete','data' => ['link' => route('admin.subscription.destroy', $subscription)]]); ?>
<?php $component->withName('buttons.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.subscription.destroy', $subscription))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>
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
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/admin/plan/edit.blade.php ENDPATH**/ ?>
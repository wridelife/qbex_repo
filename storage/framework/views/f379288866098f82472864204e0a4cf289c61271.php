<?php $__env->startSection('title'); ?>
    Admin - <?php echo e(__('crud.admin.providers.index')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('heading'); ?>
    <?php echo e(__('crud.admin.providers.index')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.indexPageSearch','data' => ['addBtnRoute' => route('admin.provider.create'),'addBtnText' => __('crud.admin.providers.create')]]); ?>
<?php $component->withName('indexPageSearch'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['addBtnRoute' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.provider.create')),'addBtnText' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.providers.create'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <div class="w-full overflow-hidden rounded-lg shadow-xs mb-6">
        <div class="w-full overflow-x-auto">
            <table id="dataTable" class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.admin.providers.name')); ?> <?php echo e(__('crud.general.id')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.name')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.email')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.phone')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.admin.plans.name')."Expire in"); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('total Referred')); ?></th>
                        <!-- <th class="text-center px-4 py-3"><?php echo e(__('crud.general.wallet')); ?></th> -->
                        
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.admin.documents.name')); ?> <?php echo e(__('crud.inputs.status')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.status')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.general.actions')); ?></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    
                    <?php $__empty_1 = true; $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            
                            <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3"><?php echo e($provider->id); ?></td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="<?php echo e($provider->avatar ? asset('storage/'.$provider->avatar) : "https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"); ?>"
                                        alt=""
                                        loading="lazy"
                                        />
                                        <div class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-700 dark:text-gray-400">
                                            <?php echo e($provider->name); ?>

                                            <?php if(!empty($provider->agent)): ?>
                                            under (<?php echo e($provider->agent->name ?? '-'); ?> )
                                            <?php endif; ?>
                                        </p>
                                        
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm">
                                <?php echo e($provider->email ?? ''); ?>

                            </td>
                            <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm">
                                <?php echo e($provider->mobile); ?>

                            </td>
                            <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm">
                                <?php echo e($provider?->subscription?->expire_at->diffForHumans() ?? 'n/a'); ?>

                            </td>
                            
                    <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm">
                        <?php echo e("0" ?? ''); ?>

                    </td>
                            <!-- <td class="text-center px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm">
                                <?php if($provider->wallet_balance > 0): ?>
                                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"><?php echo e(currency($provider->wallet_balance)); ?></span>
                            <?php elseif($provider->wallet_balance == 0): ?>
                                <span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:text-white dark:bg-yellow-600"><?php echo e(currency($provider->wallet_balance)); ?></span>
                            <?php else: ?>
                                <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"><?php echo e(currency($provider->wallet_balance)); ?></span>
                            <?php endif; ?>
                            </td> -->
                            

                            <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm">
                                <?php if($provider->status == 'document'): ?>
                                    <span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:text-white dark:bg-yellow-600"><?php echo e($provider->pendingDocuments ? "Documents Verification Pending" : "Documents Required"); ?>[<?php echo e($provider->pending_documents()); ?>]</span>
                                    <?php elseif($provider->status == 'approved'): ?>
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">Approved</span>
                                <?php else: ?>
                                    <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"><?php echo e($provider->status); ?></span>
                                
                                <?php endif; ?>
                            </td>
                            <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm">
                                <?php if($provider->viewservice): ?>
                                    <?php if($provider->viewservice->status == 'active'): ?>
                                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">On</span>
                                    <?php else: ?>
                                        <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">Off</span>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:text-white dark:bg-yellow-600">N/A</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="flex items-center justify-center">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.show','data' => ['link' => route('admin.statement.overall', ['provider', $provider->id])]]); ?>
<?php $component->withName('buttons.show'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.statement.overall', ['provider', $provider->id]))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.edit','data' => ['link' => route('admin.provider.edit', $provider)]]); ?>
<?php $component->withName('buttons.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.provider.edit', $provider))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.delete','data' => ['link' => route('admin.provider.destroy', $provider)]]); ?>
<?php $component->withName('buttons.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.provider.destroy', $provider))]); ?> <?php echo $__env->renderComponent(); ?>
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
        
        <div class="">
            <?php echo $providers->links(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/admin/provider/index.blade.php ENDPATH**/ ?>
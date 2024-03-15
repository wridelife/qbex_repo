<?php $__env->startSection('title'); ?>
Admin - <?php echo e(__('crud.admin.providers.update')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('heading'); ?>
<?php echo e(__('crud.admin.providers.update')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="w-full rounded-lg shadow-xs bg-white dark:text-gray-400 dark:bg-gray-800 mb-5">
        <div class="w-full px-5 py-5">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => ''.e(route('admin.provider.update', $provider)).'','method' => 'put','hasFile' => true]]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => ''.e(route('admin.provider.update', $provider)).'','method' => 'put','has-file' => true]); ?>
                <?php echo $__env->make('admin.provider.form-inputs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="flex justify-end">
                    <button type="submit"
                        class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm"
                        type="submit">Submit</button>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
    </div>
    <div class="w-full rounded-lg shadow-xs bg-white dark:text-gray-400 dark:bg-gray-800 mb-5">
        <div class="w-full px-5 py-5">
            <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Add Services
            </h4>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('provider-services', ['provider' => $provider])->html();
} elseif ($_instance->childHasBeenRendered('hJxvZS0')) {
    $componentId = $_instance->getRenderedChildComponentId('hJxvZS0');
    $componentTag = $_instance->getRenderedChildComponentTagName('hJxvZS0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('hJxvZS0');
} else {
    $response = \Livewire\Livewire::mount('provider-services', ['provider' => $provider]);
    $html = $response->html();
    $_instance->logRenderedChild('hJxvZS0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
    <div class="w-full rounded-lg shadow-xs bg-white dark:text-gray-400 dark:bg-gray-800 mb-5">
        <div class="w-full">
            <table class="w-full whitespace-no-wrap dark:border-gray-700">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.SNo')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.admin.documents.name')); ?> <?php echo e(__('crud.inputs.name')); ?>

                        </th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.status')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.general.actions')); ?></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    
                    <?php $__empty_1 = true; $__currentLoopData = $providerDocuments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3">
                            <?php echo e($loop->index + 1); ?>

                        </td>
                        <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                            <?php echo e($doc->document->name); ?>

                        </td>
                        <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm">
                            <?php if($doc->status == "ACTIVE"): ?>
                            <span
                                class="px-2 py-1 font-semibold leading-tight text-green-600 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100 text-xs">
                                Active
                            </span>
                            <?php elseif($doc->status == "ASSESSING"): ?>
                            <span
                                class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:text-white dark:bg-yellow-600 text-xs">
                                Accessing
                            </span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="flex items-center justify-center">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.show','data' => ['title' => 'Show Document','target' => '_blank','link' => asset('storage/'.$doc->url)]]); ?>
<?php $component->withName('buttons.show'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => 'Show Document','target' => '_blank','link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(asset('storage/'.$doc->url))]); ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if($doc->status == "ASSESSING"): ?>
                                <a href="<?php echo e(route('admin.acceptProviderDocument', $doc)); ?>"
                                    class="bg-green-400 text-white rounded-full flex w-8 h-8 justify-center items-center hover:bg-green-500 mx-1"
                                    title="Validate Document">
                                    <i class="fa fa-check"></i>
                                </a>
                                <?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.delete','data' => ['title' => 'Delete Document','link' => route('admin.rejectProviderDocument', $doc)]]); ?>
<?php $component->withName('buttons.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => 'Delete Document','link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.rejectProviderDocument', $doc))]); ?> <?php echo $__env->renderComponent(); ?>
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
                    <tr>
                        <td class="text-center dark:text-gray-400 dark:bg-gray-800 py-3 text-sm" colspan="10">
                            <?php if($provider->blocked == '0'): ?>

                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => ''.e(route('admin.provider.approveProvider', $provider)).'','method' => 'put','hasFile' => true]]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => ''.e(route('admin.provider.approveProvider', $provider)).'','method' => 'put','has-file' => true]); ?>
                                <button type="submit"
                                    class="bg-green-400 text-white rounded px-3 py-2 flex justify-center mx-3 float-right items-center hover:bg-green-500 m-3"
                                    title="Validate Document">
                                    <i class="fa fa-check"></i>&nbsp;Approve Provider
                                </button>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <?php else: ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => ''.e(route('admin.provider.blockProvider', $provider)).'','method' => 'put','hasFile' => true]]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => ''.e(route('admin.provider.blockProvider', $provider)).'','method' => 'put','has-file' => true]); ?>
                                <button type="submit"
                                    class="bg-red-400 text-white rounded px-3 py-2 flex justify-center items-center mx-3 float-right hover:bg-red-500"
                                    title="Validate Document">
                                    <i class="fa fa-ban"></i>&nbsp;Block Provider
                                </button>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.telephoneImport', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/admin/provider/edit.blade.php ENDPATH**/ ?>
<div class="flex flex-wrap -mb-4 md:mb-0 w-full" x-data={searchResult:false}>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.select','data' => ['label' => __('crud.inputs.type'),'name' => 'request_from','wire:change' => 'getDetails()','wire:model' => 'user_type']]); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.type')),'name' => 'request_from','wire:change' => 'getDetails()','wire:model' => 'user_type']); ?>
        <option <?php echo e(old('user_type', '') == "Provider" ? 'selected' : ''); ?> value="Provider">Provider</option>
        <option <?php echo e(old('user_type', '') == "User" ? 'selected' : ''); ?> value="User">User</option>
        <option <?php echo e(old('user_type', '') == "Agent" ? 'selected' : ''); ?> value="Agent">Agent</option>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <input class="hidden" type="text" wire:model="user_id" name="from_id" value="<?php echo e($user_id); ?>">

    
    <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
        
        <div class="relative w-full" x-on:click.away="searchResult=false">
            <label class="dark:text-gray-400 capitalize block text-gray-800 text-sm font-semibold mb-2">
                <?php echo e($user_type); ?> Email
            </label>
            <input type="email" placeholder="<?php echo e(ucfirst(strtolower($user_type))); ?> Email"
                class="appearance-none w-full text-xs font-semibold leading-none rounded outline-none bg-gray-50 dark:bg-gray-700 dark:text-gray-300 p-4" wire:model="email"  x-on:focus="searchResult='true'" value="<?php echo e(!empty($user) ? $user->email : ''); ?>">
            
            <ul class="divide-y dark:divide-gray-700 absolute w-full dark:bg-gray-900 dark:text-gray-500 bg-white border-l border-r border-b dark:border-gray-700"
                x-show="searchResult" style="max-height: 200px; overflow-y: scroll; z-index: 20;">
                <li class="p-3 dark:bg-gray-900 dark:text-gray-500 text-center" wire:loading>
                    <i class="fa-spinner fa-pulse fa"></i>
                </li>
                <?php $__empty_1 = true; $__currentLoopData = $suggestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $suggest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li class="dark:bg-gray-900 dark:text-gray-500" wire:loading.remove>
                        <div class="flex justify-between">
                            <button type="button" class="text-left p-3 w-full h-full focus:outline-none" wire:click="selectUser(<?php echo e($suggest->id); ?>)">
                                <?php echo e($suggest->name); ?> (Email:- <?php echo e($suggest->email); ?>)
                            </button>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <li class="p-3 dark:bg-gray-900 dark:text-gray-500" wire:loading.remove>
                        No Search Results Found
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
        <div class="mb-6">
            <label class="dark:text-gray-400 block text-gray-800 text-sm font-semibold mb-2 capitalize">
                <?php echo e($user_type); ?> Name
            </label>
            <input type="text"
                class="<?php if(!$found_status): ?> border border-red-400 <?php endif; ?> appearance-none w-full p-4 text-xs font-semibold leading-none bg-gray-50 rounded outline-none dark:bg-gray-700 dark:text-gray-400 capitalize"
                placeholder="<?php echo e(($user_type)); ?> Name" value="<?php echo e(!empty($user) ? $user->name : '-'); ?>" disabled readonly>
        </div>
    </div>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.select','data' => ['label' => __('crud.inputs.type'),'name' => 'type']]); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.type')),'name' => 'type']); ?>
        <option <?php echo e(old('type', '') == "C" ? 'selected' : ''); ?> value="C">Credit</option>
        <option <?php echo e(old('type', '') == "D" ? 'selected' : ''); ?> value="D">Debit</option>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div><?php /**PATH /var/www/cab/resources/views/livewire/dynamic-settlement.blade.php ENDPATH**/ ?>
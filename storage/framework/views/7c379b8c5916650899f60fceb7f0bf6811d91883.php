<div x-data={searchResult:false}>
    <div class="mb-6" id="tabs">
        <div class="w-full">
            <div class="w-full flex justify-center">
                <ul class="tab-head flex mb-0 list-none pb-4 w-full text-center">
                    <li class="mr-2 mb-2 last:mr-0 text-center" wire:click="changeContent('searching')">
                        <a class="text-xs font-bold uppercase cursor-pointer px-5 py-3 shadow-lg rounded block leading-normal <?php if($active == 'searching'): ?> bg-blue-500 text-white dark:bg-white dark:text-blue-500 <?php else: ?> dark:bg-blue-500 dark:text-white bg-white text-blue-500 <?php endif; ?>">
                            <i class="fa fa-space-shuttle text-base mr-1"></i> Searching
                        </a>
                    </li>
                    <li class="mr-2 mb-2 last:mr-0 text-center">
                        <a class="text-xs font-bold uppercase cursor-pointer px-5 py-3 shadow-lg rounded block leading-normal <?php if($active == 'cancelled'): ?> bg-blue-500 text-white dark:bg-white dark:text-blue-500 <?php else: ?> dark:bg-blue-500 dark:text-white bg-white text-blue-500 <?php endif; ?>" wire:click="changeContent('cancelled')">
                            <i class="fa fa-cog text-base mr-1"></i> Cancelled
                        </a>
                    </li>
                    <li class="mr-2 mb-2 last:mr-0 text-center">
                        <a class="text-xs font-bold uppercase cursor-pointer px-5 py-3 shadow-lg rounded block leading-normal <?php if($active == 'scheduled'): ?> bg-blue-500 text-white dark:bg-white dark:text-blue-500 <?php else: ?> dark:bg-blue-500 dark:text-white bg-white text-blue-500 <?php endif; ?>" wire:click="changeContent('scheduled')">
                            <i class="fa fa-check-circle text-base mr-1"></i> Scheduled
                        </a>
                    </li>
                    <li class="mr-2 mb-2 last:mr-0 text-center">
                        <a class="text-xs font-bold uppercase cursor-pointer px-5 py-3 shadow-lg rounded block leading-normal <?php if($active == 'ongoing'): ?> bg-blue-500 text-white dark:bg-white dark:text-blue-500 <?php else: ?> dark:bg-blue-500 dark:text-white bg-white text-blue-500 <?php endif; ?>" wire:click="changeContent('ongoing')">
                            <i class="fa fa-check-circle text-base mr-1"></i> Ongoing
                        </a>
                    </li>
                    <li class="mb-2 last:mr-0 text-center ml-auto">
                        <a class="text-xs font-bold uppercase cursor-pointer px-5 py-3 shadow-lg rounded block leading-normal <?php if($active == 'add'): ?> bg-blue-500 text-white dark:bg-white dark:text-blue-500 <?php else: ?> dark:bg-blue-500 dark:text-white bg-white text-blue-500 <?php endif; ?>" wire:click="changeContent('add')">
                            <i class="fa fa-plus-circle text-base mr-1"></i> Add Request
                        </a>
                    </li>
                </ul>
            </div>
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded dark:bg-gray-800 text-gray-500 border-b dark:border-gray-700 dark:text-gray-300">
                <div class="grid grid-cols-2">
                    <?php if($active == 'add'): ?>
                        <div class="col-span-1 overflow-hidden" style="min-height: 500px;">
                            <div class="overflow-y-scroll h-full">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['wire:submit.prevent' => 'createRequest','action' => '#']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:submit.prevent' => 'createRequest','action' => '#']); ?>
                                    <div class="p-5 text-gray-500 dark:text-gray-300 flex flex-wrap">
                                        <div class="w-full px-4 mb-4 md:mb-0 md:w-1/2" wire:ignore>
                                            <div class="mb-6">
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.partials.label','data' => ['name' => 'location','label' => __('crud.dispatcher.pickup_location')]]); ?>
<?php $component->withName('inputs.partials.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'location','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.dispatcher.pickup_location'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                
                                                <input id="pac-input" autocomplete="off" class="controls appearance-none w-full p-4 text-xs font-semibold leading-none rounded outline-none bg-gray-50 dark:bg-gray-700 dark:text-gray-300" type="text" placeholder="Search <?php echo e(__('crud.dispatcher.pickup_location')); ?>" wire:model.defer="s_address"/>
                                            </div>
                                        </div>
                                        <div class="w-full px-4 mb-4 md:mb-0 md:w-1/2" wire:ignore>
                                            <div class="mb-6">
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.partials.label','data' => ['autocomplete' => 'off','name' => 'location','label' => __('crud.dispatcher.drop_location')]]); ?>
<?php $component->withName('inputs.partials.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['autocomplete' => 'off','name' => 'location','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.dispatcher.drop_location'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                <input id="pac-input2" class="controls appearance-none w-full p-4 text-xs font-semibold leading-none rounded outline-none bg-gray-50 dark:bg-gray-700 dark:text-gray-300" type="text" placeholder="Search <?php echo e(__('crud.dispatcher.drop_location')); ?>" wire:model.defer="d_address"/>
                                            </div>
                                        </div>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['disabled' => true,'name' => 'total','wire:model.defer' => 'distance','label' => 'Total','value' => '']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['disabled' => true,'name' => 'total','wire:model.defer' => 'distance','label' => 'Total','value' => '']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['wire:model' => 'user_id','name' => 'user_id','label' => __('crud.general.user').' '.__('crud.general.id'),'value' => '']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'user_id','name' => 'user_id','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.general.user').' '.__('crud.general.id')),'value' => '']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                        
                                        <div class="w-full px-4 mb-4 md:mb-0 md:w-1/2 relative w-full" x-on:click.away="searchResult=false">
                                            <label class="dark:text-gray-400 capitalize block text-gray-800 text-sm font-semibold mb-2">
                                                <?php echo e(__('crud.inputs.name')); ?> / <?php echo e(__('crud.inputs.email')); ?>

                                            </label>
                                            <input type="email" placeholder="<?php echo e(__('crud.inputs.name')); ?> / <?php echo e(__('crud.inputs.email')); ?>"
                                                class="appearance-none w-full text-xs font-semibold leading-none rounded outline-none bg-gray-50 dark:bg-gray-700 dark:text-gray-300 p-4" wire:model="email"  x-on:focus="searchResult='true'">

                                            <ul class="divide-y dark:divide-gray-700 absolute dark:bg-gray-900 dark:text-gray-500 bg-white border-l border-r border-b dark:border-gray-700" x-show="searchResult" style="max-height: 200px; overflow-y: scroll; z-index: 20; width: 95%;">
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
                                                        <a href="<?php echo e(route('admin.user.create')); ?>"><i class="fa fa-user-plus"></i> Add New User</a>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
 
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.select','data' => ['label' => __('crud.admin.serviceTypes.name'),'name' => 'service_type_id','wire:model.defer' => 'service_type_id']]); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.serviceTypes.name')),'name' => 'service_type_id','wire:model.defer' => 'service_type_id']); ?>
                                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($service->id); ?>"><?php echo e($service->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.datetime','data' => ['name' => 'schedule_at','label' => __('crud.inputs.schedule_at'),'wire:model' => 'scheduled_at','value' => '']]); ?>
<?php $component->withName('inputs.datetime'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'schedule_at','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.schedule_at')),'wire:model' => 'scheduled_at','value' => '']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                        <div class="w-full px-4 mb-4 md:mb-0 md:w-1/2">
                                            <div class="mb-6">
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.partials.label','data' => ['name' => 'location','label' => __('crud.dispatcher.manual_provider')]]); ?>
<?php $component->withName('inputs.partials.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'location','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.dispatcher.manual_provider'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                <label for="showProviderFields" class="inline-block cursor-pointer" style="width: fit-content;">
                                                    <div class="relative">
                                                        <input type="checkbox" id="showProviderFields" class="sr-only" wire:model.defer="status">
                                                        <div class="block bg-gray-600 w-10 h-6 rounded-full"></div>
                                                        <div class="dot absolute left-1 w-4 h-4 rounded-full transition" style="top: 2.5px;"></div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end mb-6 px-9">
                                        <button wire:loading.remove type="submit" class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm" wire:target="createRequest">
                                                <?php echo e(__('crud.general.add')); ?> Request
                                        </button>
                                        <button wire:loading type="button" class="right-0 block py-1 px-4 leading-loose bg-green-500 hover:bg-green-400 text-white font-semibold rounded-lg transition duration-200 text-sm" wire:target="createRequest">
                                            <i class="fa fa-refresh fa-spin"></i> <?php echo e(__('crud.general.adding')); ?> Request
                                        </button>
                                    </div>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div> 
                        </div>
                        <div class="col-span-1">
                            <div id="map" style="height: 500px;" wire:ignore></div>
                        </div>
                    <?php elseif($active == 'assign_provider'): ?>
                        <div class="col-span-1 overflow-hidden" style="max-height: 500px;">
                            <div class="h-full">
                                <div class="px-4 py-3 flex-auto font-semibold">
                                    <div class="tab-content tab-space text-gray-500 dark:text-gray-300">
                                        Assign Provider
                                    </div>
                                </div>
                                <hr class="dark:border-gray-400">
                                <div style="height: 90%;" class="overflow-y-scroll">
                                    <?php $__empty_1 = true; $__currentLoopData = $available_providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="p-5 text-gray-500 dark:text-gray-300 border m-2 rounded border-gray-700 shadow-xs">
                                            <span class="text-gray-500 dark:text-gray-300"><?php echo e(__('crud.admin.providers.name')); ?> <?php echo e(__('crud.general.id')); ?>: </span> <?php echo e($p->id); ?> <br/>
                                            
                                            <span class="text-gray-500 dark:text-gray-300"><?php echo e(__('crud.admin.providers.name')); ?> <?php echo e(__('crud.inputs.name')); ?>: </span> <?php echo e($p->name); ?> <br/>

                                            <span class="text-gray-500 dark:text-gray-300"><?php echo e(__('crud.admin.agents.name')); ?> <?php echo e(__('crud.inputs.name')); ?>: </span> <?php echo e($p->name); ?> <br/>
                                            
                                            <div class="mt-2">
                                                <a href="#" class="right-0 leading-loose bg-green-500 mr-1 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm w-full text-left px-4 py-2" onclick="locateProvider(<?php echo e($p->latitude); ?>, <?php echo e($p->longitude); ?>)"><i class="fa fa-search"></i> Locate Provider</a>
                                                <a href="#" class="right-0 leading-loose w-full text-left bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm px-4 py-2" wire:click="appointProvider(<?php echo e($user_request_id); ?>, <?php echo e($p->id); ?>)"><i class="fa fa-check"></i> Assign Provider</a>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="p-5 text-gray-500 dark:text-gray-300 border m-2 rounded border-gray-700 shadow-xs">
                                            No Provider Available
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div id="map" style="height: 500px;" wire:ignore></div>
                        </div>
                    <?php else: ?>
                        <div class="col-span-1 overflow-hidden" style="max-height: 500px;">
                            <div class="h-full">
                                <?php if($active == 'searching'): ?>
                                    <div class="px-4 py-3 flex-auto font-semibold">
                                        <div class="tab-content tab-space text-gray-500 dark:text-gray-300">
                                            Searching
                                        </div>
                                    </div>
                                <?php elseif($active == 'cancelled'): ?>
                                    <div class="px-4 py-3 flex-auto font-semibold">
                                        <div class="tab-content tab-space text-gray-500 dark:text-gray-300">
                                            Cancelled
                                        </div>
                                    </div>
                                <?php elseif($active == 'scheduled'): ?>
                                    <div class="px-4 py-3 flex-auto font-semibold">
                                        <div class="tab-content tab-space text-gray-500 dark:text-gray-300">
                                            Scheduled
                                        </div>
                                    </div>
                                <?php elseif($active == 'ongoing'): ?>
                                    <div class="px-4 py-3 flex-auto font-semibold">
                                        <div class="tab-content tab-space text-gray-500 dark:text-gray-300">
                                            Ongoing
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <hr class="dark:border-gray-400">
                                <div style="height: 90%;" class="overflow-y-scroll">
                                    <?php $__empty_1 = true; $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="p-5 text-gray-500 dark:text-gray-300 border m-2 rounded border-gray-700 shadow-xs">
                                            <span class="text-gray-500 dark:text-gray-300"><?php echo e(__('crud.navlinks.request')); ?> <?php echo e(__('crud.general.id')); ?>: </span> <?php echo e($request->id ?? '-'); ?> <br/>
                                            
                                            <span class="text-gray-500 dark:text-gray-300"><?php echo e(__('crud.admin.users.name')); ?> <?php echo e(__('crud.inputs.name')); ?>: </span> <?php echo e($request->user->name ?? '-'); ?> <br/>

                                            <span class="text-gray-500 dark:text-gray-300"><?php echo e(__('crud.admin.providers.name')); ?> <?php echo e(__('crud.inputs.name')); ?>: </span> <?php echo e($request->provider->name ?? '-'); ?> <br/>
                                            <span class="text-gray-500 dark:text-gray-300"><?php echo e(__('crud.admin.serviceTypes.name')); ?> <?php echo e(__('crud.inputs.name')); ?>: </span> <?php echo e($request->serviceType->name ?? '-'); ?> <br/>
                                            <span class="text-gray-500 dark:text-gray-300"><?php echo e(__('crud.inputs.status')); ?>: </span> <?php echo e(ucfirst(strtolower($request->status)) ?? '-'); ?> <br/>
                                            <div class="mt-2 flex items-center justify-between">
                                                <a href="<?php echo e(route('admin.request.detail', $request->id)); ?>" class="right-0 leading-loose bg-green-500 mr-1 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm w-full text-left px-4 py-2" style="width: auto;">See Full Request</a>
                                                <div class="flex">
                                                    <?php if($active == 'ongoing' && in_array($request->status, ['SEARCHING', 'ACCEPTED', 'ARRIVED', 'SCHEDULED','PICKEDUP','DROPPED'])): ?>
                                                        <button type="button" wire:click="cancelRequest(<?php echo e($request->id); ?>)" class="bg-red-400 text-white rounded-full flex w-8 h-8 justify-center items-center hover:bg-red-500 mx-1">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    <?php endif; ?>
                                                    <button type="button" wire:click="$emit('updateMap', <?php echo e($request->s_latitude); ?>, <?php echo e($request->s_longitude); ?>, <?php echo e($request->d_latitude); ?>, <?php echo e($request->d_longitude); ?>)" class="bg-yellow-400 text-white rounded-full flex w-8 h-8 justify-center items-center hover:bg-yellow-500 mx-1">
                                                        <i class="fa fa-map-marker"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <span class="text-sm text-center flex p-5 m-1">
                                            No Requests In This Category
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div id="map" style="height: 500px;" wire:ignore></div>
                            <input id="pac-input" class="hidden controls" type="text" placeholder="Search Box" wire:model.defer="s_address" />
                            <input id="pac-input2" class="hidden controls" type="text" placeholder="Search Box2" wire:model.defer="d_address" />
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
                
    <style>
        input:checked ~ .dot {
            transform: translateX(100%);
            background: rgba(249, 250, 251);
        }
        input:not(:checked) ~ .dot {
            background: rgba(249, 250, 251);
            opacity: 0.5;
            transform: translateX(0%);
        }
    </style>
</div><?php /**PATH /var/www/cab/resources/views/livewire/dispatcher-dashboard.blade.php ENDPATH**/ ?>
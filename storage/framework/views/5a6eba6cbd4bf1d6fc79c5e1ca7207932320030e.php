<?php $__env->startSection('content'); ?>
    <section class="container h-full ">
        <div class="w-full px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="col-span-1 grid grid-cols-3">
                    <p class="mb-4 col-span-3 text-gray-600 dark:text-gray-400">
                        <span class="font-semibold"><?php echo e(__('crud.inputs.booking_id') ?? ''); ?></span>:
                        <?php echo e($userRequest->booking_id ?? ''); ?>

                        <br>
                        <span class="font-semibold"><?php echo e(__('crud.inputs.date') ?? ''); ?></span>:
                        <?php echo e($userRequest->created_at ?? ''); ?>

                        <br>
                        <span class="font-semibold"><?php echo e(__('crud.navlinks.request') ?? ''); ?>

                            <?php echo e(__('crud.inputs.status') ?? ''); ?></span>:
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.request-show-status','data' => ['status' => $userRequest->status]]); ?>
<?php $component->withName('request-show-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($userRequest->status)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </p>
                    <p class="text-gray-600 dark:text-gray-400 md:col-span-1 col-span-2 md:mb-0 mb-3">
                        <span
                            class="font-semibold text-gray-800 dark:text-gray-300 text-base"><?php echo e(__('crud.admin.users.name') ?? ''); ?>

                            <?php echo e(__('crud.general.details') ?? ''); ?></span> <br>
                        <?php echo e($userRequest->user->name ?? ''); ?> <br>
                        <?php echo e($userRequest->user->email ?? ''); ?> <br>
                        <?php echo e($userRequest->user->mobile ?? ''); ?> <br>
                        User Rating:- <?php echo e($userRequest->user_rated ?? ''); ?> <br>
                        
                    </p>
                    <p class="text-gray-600 dark:text-gray-400 md:col-span-1 col-span-2 md:mb-0 mb-3">
                        <span
                            class="font-semibold text-gray-800 dark:text-gray-300 text-base"><?php echo e(__('crud.admin.providers.name') ?? ''); ?>

                            <?php echo e(__('crud.general.details') ?? ''); ?></span> <br>
                        <?php echo e($userRequest->provider->name ?? ''); ?> <br>
                        <?php echo e($userRequest->provider->email ?? ''); ?> <br>
                        <?php echo e($userRequest->provider->mobile ?? ''); ?> <br>
                        Provider Rating:- <?php echo e($userRequest->provider_rated ?? ''); ?> <br>
                    </p>
                    <div class="my-3 col-span-3">
                        <p class="mb-4 text-gray-600 dark:text-gray-400">
                            <span class="font-semibold"><?php echo e(__('crud.inputs.payment_mode') ?? ''); ?></span>:
                            <?php echo e($userRequest->payment_mode ?? ''); ?>

                        </p>
                        <p class="mb-4 text-gray-600 dark:text-gray-400">
                            <span class="font-semibold"><?php echo e(__('crud.inputs.start_time') ?? ''); ?></span>:
                            <?php echo e($userRequest->started_at ?? '-'); ?>

                        </p>
                        <p class="mb-4 text-gray-600 dark:text-gray-400">
                            <span class="font-semibold"><?php echo e(__('crud.inputs.end_time') ?? ''); ?></span>:
                            <?php echo e($userRequest->finished_at ?? '-'); ?>

                        </p>
                    </div>
                </div>


                <div class="col-span-1">
                    
                    <img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo e($userRequest->s_latitude ?? ''); ?>,<?php echo e($userRequest->s_longitude ?? ''); ?>&zoom=20&size=550x400
                                                    &markers=color:blue|label:S|<?php echo e($userRequest->s_latitude ?? ''); ?>,<?php echo e($userRequest->s_longitude ?? ''); ?>

                                                    &markers=size:mid|color:0xFFFF00|label:D|<?php echo e($userRequest->d_latitude ?? ''); ?>,<?php echo e($userRequest->d_longitude ?? ''); ?>&key=<?php echo e(config('constants.map_key')); ?>"
                        alt="Image Could Not Be Loaded">
                </div>
            </div>

        </div>
    </section>
    <section class="container h-full">
        <div class="w-full px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <table id="dataTable" class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.admin.serviceTypes.name') ?? ''); ?></th>
                        <th class="text-center px-4 py-3">Source <?php echo e(__('crud.general.location') ?? ''); ?></th>
                        <th class="text-center px-4 py-3">Destination <?php echo e(__('crud.general.location') ?? ''); ?></th>
                        
                        
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3">
                        <?php echo e($userRequest->serviceType->name ?? ''); ?>

                    </td>
                    <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3">
                        <?php echo e($userRequest->s_address ?? '-'); ?>

                    </td>
                    <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3">
                        <?php echo e($userRequest->d_address ?? '-'); ?>

                    </td>
                    
                    
                    </td>
                </tbody>
            </table>
        </div>
    </section>
    <?php if($userRequest->payment): ?>
        <section class="container h-full ">
            <div class="w-full px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <h2 class="text-3xl mb-2 font-heading font-semibold dark:text-gray-400"><?php echo e(__('crud.payment.invoice') ?? ''); ?>

                </h2>
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full lg:w-1/2 px-4 mb-4 lg:mb-0">
                        <table id="dataTable" class="w-full whitespace-no-wrap">
                            <thead>
                                <tr
                                    class="font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3"><?php echo e(__('crud.admin.invoice.name') ?? ''); ?></th>
                                    <th class="px-4 py-3"><?php echo e(__('crud.admin.invoice.value') ?? ''); ?></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr
                                    class="tracking-wide text-left text-gray-500 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <td class="border-t px-4 py-2"><?php echo e(__('crud.payment.payment_mode') ?? ''); ?></td>
                                    <td class="border-t px-4 py-2"><?php echo e($userRequest->payment->payment_mode ?? ''); ?>

                                    </td>
                                </tr>
                                <tr
                                    class="tracking-wide text-left text-gray-500 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <td class="border-t px-4 py-2"><?php echo e(__('crud.payment.base_price') ?? ''); ?></td>
                                    <td class="border-t px-4 py-2"><?php echo e(currency($userRequest->payment->fixed ) ?? ''); ?></td>
                                </tr>
                                <?php if($userRequest->service_type): ?>
                                <tr
                                    class="tracking-wide text-left text-gray-500 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <?php if($userRequest->service_type->calculator=='MIN'): ?>
                                        <td class="border-t px-4 py-2"><?php echo e(__('crud.payment.minutes_price') ?? ''); ?></td>
                                        <td class="border-t px-4 py-2"><?php echo e(currency($userRequest->payment->minute) ?? ''); ?></td>
                                    <?php endif; ?>
                                    <?php if($userRequest->service_type->calculator=='HOUR'): ?>
                                        <td class="border-t px-4 py-2">sf<?php echo e(__('crud.payment.hours_price') ?? ''); ?></td>
                                        <td class="border-t px-4 py-2"><?php echo e(currency($userRequest->payment->hour) ?? ''); ?></td>
                                    <?php endif; ?>
                                    <?php if($userRequest->service_type->calculator=='DISTANCE'): ?>
                                        <td class="border-t px-4 py-2"><?php echo e(__('crud.payment.distance_price') ?? ''); ?></td>
                                        <td class="border-t px-4 py-2"><?php echo e(currency($userRequest->payment->distance) ?? ''); ?></td>
                                    <?php endif; ?>
                                    <?php if($userRequest->service_type->calculator=='DISTANCEMIN'): ?>
                                            <td class="border-t px-4 py-2"><?php echo e(__('crud.payment.minutes_price') ?? ''); ?></td>
                                            <td class="border-t px-4 py-2"><?php echo e(currency($userRequest->payment->minute) ?? ''); ?></td>
                                        </tr>
                                        <tr class="tracking-wide text-left text-gray-500 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                            <td class="border-t px-4 py-2"><?php echo e(__('crud.payment.distance_price') ?? ''); ?></td>
                                            <td class="border-t px-4 py-2"><?php echo e(currency($userRequest->payment->distance) ?? ''); ?></td>
                                    <?php endif; ?>
                                    <?php if($userRequest->service_type->calculator=='DISTANCEHOUR'): ?>
                                        <td class="border-t px-4 py-2"><?php echo e(__('crud.payment.hours_price') ?? ''); ?></td>
                                        <td class="border-t px-4 py-2"><?php echo e(currency($userRequest->payment->hour) ?? ''); ?></td>
                                    </tr>
                                    <tr class="tracking-wide text-left text-gray-500 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <td class="border-t px-4 py-2"><?php echo e(__('crud.payment.distance_price') ?? ''); ?></td>
                                        <td class="border-t px-4 py-2"><?php echo e(currency($userRequest->payment->distance) ?? ''); ?></td>
                                    <?php endif; ?>
                                </tr>
                                <?php endif; ?>


                                <?php if($userRequest->payment->discount != 0): ?>
                                <tr
                                    class="tracking-wide text-left text-gray-500 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <td class="border-t px-4 py-2">
                                        <?php echo e(__('crud.payment.discount') ?? ''); ?>

                                    </td>
                                    <td class="border-t px-4 py-2">
                                        <span class="mono">- <?php echo e(currency($userRequest->payment->discount) ?? ''); ?></span>
                                    </td>
                                </tr>
                                <?php endif; ?>
                                <tr
                                    class="tracking-wide text-left text-gray-500 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <td class="border-t px-4 py-2">
                                        <?php echo e(__('crud.payment.tax') ?? ''); ?>

                                    </td>
                                    <td class="border-t px-4 py-2">
                                        <span class="mono"><?php echo e(currency($userRequest->payment->tax) ?? ''); ?></span>
                                        <small class="text-muted"> / <?php echo e(Config::get('constants.tax_percentage')); ?>%</small>
                                    </td>
                                </tr>
                                <?php if($userRequest->payment->tips != 0): ?>
                                <tr
                                    class="tracking-wide text-left text-gray-500 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <td class="border-t px-4 py-2">
                                        <?php echo e(__('crud.payment.tip') ?? ''); ?>

                                    </td>
                                    <td class="border-t px-4 py-2">
                                        <?php echo e(currency($userRequest->payment->tips) ?? ''); ?>

                                </tr>
                                <?php endif; ?>

                                <tr
                                    class="tracking-wide text-left text-gray-500 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <td class="border-t px-4 py-2">
                                        <?php echo e(__('crud.payment.paid') ?? ''); ?>

                                    </td>
                                    <td class="border-t px-4 py-2">
                                        <strong class="mono">
                                            <?php echo e(currency($userRequest->payment->payable+$userRequest->payment->tips) ?? ''); ?></strong>
                                </tr>
                                <tr
                                    class="tracking-wide text-left text-gray-500 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <td class="border-t px-4 py-2">
                                        <?php echo e(__('crud.payment.round_off') ?? ''); ?>

                                    </td>
                                    <td class="border-t px-4 py-2">
                                        <?php echo e(currency($userRequest->payment->round_of) ?? ''); ?>

                                    </td>
                                </tr>

                                <tr
                                    class="tracking-wide text-left text-gray-500 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <td class="border-t px-4 py-2">
                                        <?php echo e(__('crud.payment.total') ?? ''); ?>

                                    </td>
                                    <td class="border-t px-4 py-2">
                                        <strong class="text-muted mono">
                                            <?php echo e(currency($userRequest->payment->total+$userRequest->payment->tips) ?? ''); ?></strong>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <?php if(request()->routeIs(['admin.request.detail'])): ?>
                        <div class="w-full lg:w-1/2 px-4 mb-4 lg:mb-0">
                            <table id="dataTable" class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr
                                        class="font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <th colspan="2" class="px-4 py-3"><?php echo e(__('crud.admin.invoice.admin') ?? ''); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="tracking-wide text-left text-gray-500 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <td class="border-t px-4 py-2"><?php echo e(__('crud.payment.admin_commission') ?? ''); ?></td>
                                        <td class="border-t px-4 py-2"><?php echo e(currency($userRequest->payment->commision) ?? ''); ?>

                                            (<?php echo e($userRequest->payment->commision_per ?? ''); ?>%)</td>
                                    </tr>
                                    
                                    <tr
                                        class="tracking-wide text-left text-gray-500 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <td class="border-t px-4 py-2"><?php echo e(__('crud.payment.provider_earning') ?? ''); ?></td>
                                        <td class="border-t px-4 py-2"><?php echo e(currency($userRequest->payment->provider_pay) ?? ''); ?>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?><?php /**PATH /var/www/cab/resources/views/admin/requestDetail.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
    Admin - <?php echo e(__('crud.admin.customPushes.index')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('heading'); ?>
    <?php echo e(__('crud.admin.customPushes.index')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.indexPageSearch','data' => ['addBtnRoute' => route('admin.customPush.create'),'addBtnText' => __('crud.admin.customPushes.create')]]); ?>
<?php $component->withName('indexPageSearch'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['addBtnRoute' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.customPush.create')),'addBtnText' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.customPushes.create'))]); ?> <?php echo $__env->renderComponent(); ?>
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
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.SNo')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.type')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.condition')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.condition_data')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.message')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.sent_to')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.inputs.schedule_at')); ?></th>
                        <th class="text-center px-4 py-3"><?php echo e(__('crud.general.actions')); ?></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    
                    <?php $__empty_1 = true; $__currentLoopData = $customPushes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customPush): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3"><?php echo e($loop->index + 1); ?></td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                                <?php echo e($customPush->send_to ?? '-'); ?>

                            </td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                                <?php echo e($customPush->condition ?? '-'); ?>

                            </td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                                <?php echo e($customPush->condition_data ?? '-'); ?>

                            </td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                                <?php echo e($customPush->message ?? '-'); ?>

                            </td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                                <?php echo e($customPush->sent_to ?? '-'); ?>

                            </td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                                <?php echo e($customPush->schedule_at ?? '-'); ?>

                            </td>
                            <td>
                                <div class="flex items-center justify-center">
                                    
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.delete','data' => ['link' => route('admin.customPush.destroy', $customPush)]]); ?>
<?php $component->withName('buttons.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.customPush.destroy', $customPush))]); ?> <?php echo $__env->renderComponent(); ?>
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
            <?php echo $customPushes->links(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('endScripts'); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(config('constants.map_key')); ?>&libraries=places,drawing&callback=initMap" async defer></script>
    <script>
        var map;

        function initMap() {
            var userLocation = new google.maps.LatLng(0.0236, 37.9062);
            const searchBox = new google.maps.places.SearchBox(city_name);

            map = new google.maps.Map(document.getElementById('map'), {
                center: userLocation,
                zoom: 15,
            });

            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });

            let markers = [];
            
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }
            
                // Clear out the old markers.
                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];
                
                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();

                places.forEach((place) => {
                    if (!place.geometry || !place.geometry.location) {
                        firstCoordinates = null;
                        console.log("Returned place contains no geometry");
                        return;
                    }

                    firstCoordinates = place.geometry.location.lat() + ',' + place.geometry.location.lng();
                
                    const icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25),
                    };
                
                    // Create a marker for each place.
                    markers.push(
                        new google.maps.Marker({
                            map,
                            icon,
                            title: place.name,
                            position: place.geometry.location,
                        })
                    );

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });

                map.fitBounds(bounds);
            });
        }

        initMap();
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/admin/customPush/index.blade.php ENDPATH**/ ?>
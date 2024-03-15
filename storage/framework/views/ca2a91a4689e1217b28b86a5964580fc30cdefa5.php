<div class="w-full rounded-lg bg-white dark:text-gray-400 dark:bg-gray-800 mb-5">
    <div class="w-full px-5 py-5">
        <?php $__empty_1 = true; $__currentLoopData = $peakHours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ph): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <?php
                $key = $serviceType->id."_".$ph->id;
            ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('service-type-peak-hour', ['ph' => $ph,'serviceType' => $serviceType])->html();
} elseif ($_instance->childHasBeenRendered($key)) {
    $componentId = $_instance->getRenderedChildComponentId($key);
    $componentTag = $_instance->getRenderedChildComponentTagName($key);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($key);
} else {
    $response = \Livewire\Livewire::mount('service-type-peak-hour', ['ph' => $ph,'serviceType' => $serviceType]);
    $html = $response->html();
    $_instance->logRenderedChild($key, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <?php if(!$loop->last): ?>
                <hr class="w-full my-4 border-gray-200 dark:border-gray-600" />
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            
        <?php endif; ?>
    </div>
</div><?php /**PATH /var/www/cab/resources/views/admin/serviceType/serviceTypePeakHour.blade.php ENDPATH**/ ?>
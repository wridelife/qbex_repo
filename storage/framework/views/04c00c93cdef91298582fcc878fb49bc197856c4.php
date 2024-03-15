
<div class="w-full rounded-lg shadow-xs bg-white dark:text-gray-400 dark:bg-gray-800 mb-5">
    <div class="w-full px-1 py-0">
        <div class="w-full rounded-lg bg-white dark:text-gray-400 dark:bg-gray-800 mb-5">
            <div class="w-full px-5 py-5">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('service-rental', ['currentService' => $serviceType])->html();
} elseif ($_instance->childHasBeenRendered('is82USP')) {
    $componentId = $_instance->getRenderedChildComponentId('is82USP');
    $componentTag = $_instance->getRenderedChildComponentTagName('is82USP');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('is82USP');
} else {
    $response = \Livewire\Livewire::mount('service-rental', ['currentService' => $serviceType]);
    $html = $response->html();
    $_instance->logRenderedChild('is82USP', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </div>
</div>

<?php /**PATH /var/www/cab/resources/views/admin/serviceType/serviceRental.blade.php ENDPATH**/ ?>
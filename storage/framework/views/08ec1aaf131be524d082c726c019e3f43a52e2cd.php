

<?php $__env->startSection('title'); ?>
    <?php echo e(__('crud.general.faq')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
<section class="relative py-20">
    <div class="container px-4 mx-auto">
        <div class="max-w-2xl mx-auto mb-10 text-center">
            <h2 class="mt-8 text-4xl font-semibold font-heading">
                <?php echo e(__('crud.general.faq')); ?>

            </h2>
        </div>
        <style>
            details>summary {
                list-style: none;
            }
            summary::-webkit-details-marker {
                display: none
            }
            summary::after {
                content: ' ►';
            }
            details[open] summary:after {
                content: " ▼";
            }
        </style>
        <div class="max-w-4xl mx-auto">
            <ul class="space-y-4">
                <?php $__empty_1 = true; $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li class="p-12 border rounded-lg">
                        <details>
                            <summary class="my-1 w-full flex justify-between items-center text-left font-semibold font-heading focus:outline-none">
                                <span class="cursor-pointer text-2xl font-semibold font-heading"><?php echo e($faq->question); ?></span>
                            </summary>

                            <span class="max-w-2xl text-gray-500 leading-loose">
                                <?php echo e($faq->answer); ?>

                            </span>
                        </details>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    No FAQs
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/faq.blade.php ENDPATH**/ ?>
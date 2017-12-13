<?php echo $__env->make('charts::_partials.container.div', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>
var <?php echo e($model->id); ?> = c3.generate({
    bindto: '#<?php echo e($model->id); ?>',
    data: {
        columns: [
            <?php $__currentLoopData = $model->datasets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                ["<?php echo e($ds['label']); ?>",<?php $__currentLoopData = $ds['values']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($value); ?>,<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>],
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ],
        type: 'bar',
    },
    axis: {
        x: {
            type: 'category',
            categories: [<?php $__currentLoopData = $model->labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>"<?php echo $label; ?>",<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>]
        },
        y: {
            label: {
                text: "<?php echo $model->element_label; ?>",
                position: 'outer-middle',
            }
        },
    },
    <?php if($model->title): ?>
    title: {
        text:  "<?php echo $model->title; ?>",
        x: -20 //center
    },
    <?php endif; ?>
});
</script>

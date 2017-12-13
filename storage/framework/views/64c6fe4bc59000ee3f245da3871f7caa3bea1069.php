<?php echo $__env->make('charts::_partials.container.chartist', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script type="text/javascript">
    var data = {
        labels: [
            <?php $__currentLoopData = $model->labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                "<?php echo $label; ?>",
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ],
        series: [
            <?php $__currentLoopData = $model->datasets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                [
                    <?php $__currentLoopData = $ds['values']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        "<?php echo e($value); ?>",
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ],
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ]
    };

    var options = { <?php echo $__env->make('charts::_partials.dimension.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> }

    var <?php echo e($model->id); ?> = new Chartist.Bar('#<?php echo e($model->id); ?>', data, options);
</script>

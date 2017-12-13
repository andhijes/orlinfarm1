<script type="text/javascript">
    google.charts.setOnLoadCallback(draw<?php echo e($model->id); ?>)
    var <?php echo e($model->id); ?>;
    function draw<?php echo e($model->id); ?>() {
        var data = google.visualization.arrayToDataTable([
            ['', "<?php echo $model->element_label; ?>",
                <?php if($model->colors): ?>
                    { role: 'style' }
                <?php endif; ?>
            ],
            <?php for($i = 0; $i < count($model->values); $i++): ?>
                [
                    "<?php echo $model->labels[$i]; ?>", <?php echo e($model->values[$i]); ?>

                    <?php if($model->colors): ?>
                        ,"<?php echo e($model->colors[$i]); ?>"
                    <?php endif; ?>
                ],
            <?php endfor; ?>
        ])

        var options = {
            <?php echo $__env->make('charts::_partials.dimension.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            legend: { position: 'top', alignment: 'end' },
            fontSize: 12,
            <?php echo $__env->make('charts::google.titles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php if($model->colors): ?>
                colors:[
                    <?php $__currentLoopData = $model->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        "<?php echo e($color); ?>",
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ],
            <?php endif; ?>
        };

        <?php echo e($model->id); ?> = new google.visualization.ColumnChart(document.getElementById("<?php echo e($model->id); ?>"))

        <?php echo e($model->id); ?>.draw(data, options)
    }
</script>

<?php if(!$model->customId): ?>
    <?php echo $__env->make('charts::_partials.container.div', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

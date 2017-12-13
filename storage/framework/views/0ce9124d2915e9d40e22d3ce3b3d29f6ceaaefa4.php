<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']})
    var <?php echo e($model->id); ?>;
    google.charts.setOnLoadCallback(draw<?php echo e($model->id); ?>)

    function draw<?php echo e($model->id); ?>() {
        var data = google.visualization.arrayToDataTable([
            [
                '', "<?php echo $model->element_label; ?>",
                <?php if($model->colors): ?>
                    { role: 'style' }
                <?php endif; ?>
            ],
                <?php for($i = 0; $i < count($model->values); $i++): ?>
                    ["<?php echo $model->labels[$i]; ?>", <?php echo e($model->values[$i]); ?>,"<?php echo e($model->colors[$i]); ?>"],
                <?php endfor; ?>
        ])

        var options = {
            chart: {
                <?php if($model->title): ?>
                    title: "<?php echo $model->title; ?>",
                <?php endif; ?>
            },
            <?php if($model->colors): ?>
                colors:[
                    <?php $__currentLoopData = $model->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        "<?php echo e($color); ?>",
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ],
            <?php endif; ?>
        };

        <?php echo e($model->id); ?> = new google.charts.Bar(document.getElementById("<?php echo e($model->id); ?>"))
        <?php echo e($model->id); ?>.draw(data, options)
    }
</script>

<?php echo $__env->make('charts::_partials.container.div', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

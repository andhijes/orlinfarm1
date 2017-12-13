<script type="text/javascript">
    chart = google.charts.setOnLoadCallback(drawChart)
    var <?php echo e($model->id); ?>;
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            [
                'Element',
                <?php for($i = 0; $i < count($model->datasets); $i++): ?>
                    "<?php echo e($model->datasets[$i]['label']); ?>",
                <?php endfor; ?>
            ],
            <?php for($l = 0; $l < count($model->labels); $l++): ?>
                [
                    "<?php echo e($model->labels[$l]); ?>",
                    <?php for($i = 0; $i < count($model->datasets); $i++): ?>
                        <?php echo e($model->datasets[$i]['values'][$l]); ?>,
                    <?php endfor; ?>
                ],
            <?php endfor; ?>
        ])

        var options = {
            <?php echo $__env->make('charts::_partials.dimension.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            fontSize: 12,
            <?php echo $__env->make('charts::google.titles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('charts::google.colors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            legend: { position: 'top', alignment: 'end' }
        };

        <?php echo e($model->id); ?> = new google.visualization.LineChart(document.getElementById("<?php echo e($model->id); ?>"))

        <?php echo e($model->id); ?>.draw(data, options)
    }
</script>

<?php if(!$model->customId): ?>
    <?php echo $__env->make('charts::_partials.container.div', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

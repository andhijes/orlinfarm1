<?php echo $__env->make('charts::_partials.container.svg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script type="text/javascript">
    var <?php echo e($model->id); ?>;
    $(function() {
        <?php echo $__env->make('charts::plottablejs._data.multi', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        var xScale = new Plottable.Scales.Category();
        var yScale = new Plottable.Scales.Linear();

        var xAxis = new Plottable.Axes.Category(xScale, 'bottom');
        var yAxis = new Plottable.Axes.Numeric(yScale, 'left');

        var plot = new Plottable.Plots.ClusteredBar()
            <?php for($i = 0; $i < count($model->datasets); $i++): ?>
                .addDataset(new Plottable.Dataset(s<?php echo e($i); ?>))
            <?php endfor; ?>
            .x(function(d) { return d.x; }, xScale)
            .y(function(d) { return d.y; }, yScale)
            <?php if($model->colors): ?>
                .attr('stroke', "<?php echo e($model->colors[0]); ?>")
                .attr('fill', "<?php echo e($model->colors[0]); ?>")
            <?php endif; ?>
            .animated(true);

        var title;
        <?php if($model->title): ?>
            title = new Plottable.Components.TitleLabel("<?php echo $model->title; ?>").yAlignment('center');
        <?php endif; ?>

        var label = new Plottable.Components.AxisLabel("<?php echo $model->element_label; ?>")
            .yAlignment('center').angle(270);

         <?php echo e($model->id); ?> = new Plottable.Components.Table([[null,null, title],[label, yAxis, plot],[null, null, xAxis]]);
         <?php echo e($model->id); ?>.renderTo('svg#<?php echo e($model->id); ?>');


        window.addEventListener('resize', function() {
          <?php echo e($model->id); ?>.redraw()
        })
    });
</script>

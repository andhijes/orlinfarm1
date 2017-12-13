<?php if(!$model->container): ?>
	<?php echo $__env->make('charts::_partials.loader.container-top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div>
			<canvas id="<?php echo e($model->id); ?>" <?php echo $__env->make('charts::_partials.dimension.html', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>></canvas>
		</div>
	<?php echo $__env->make('charts::_partials.loader.container-bottom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

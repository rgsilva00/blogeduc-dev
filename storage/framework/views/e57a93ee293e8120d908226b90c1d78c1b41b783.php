<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
	<head>
		<?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</head>
	<body>
		<?php echo $__env->make('partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<!-- #Content -->
		<?php echo $__env->yieldContent('content'); ?>
		<!-- .Content -->
		<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->make('partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</body>
</html>
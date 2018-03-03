<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
	<head>
		<?php echo $__env->make('partials.headpa', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</head>
	<body class="hold-transition skin-blue-light sidebar-mini">
		<div class="wrapper">
			<?php echo $__env->make('partials.navhead', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php echo $__env->make('partials.leftsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php echo $__env->yieldContent('content'); ?>
			<?php echo $__env->make('partials.mainfooter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php echo $__env->make('partials.controlsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
		<?php echo $__env->make('partials.scriptspa', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</body>
</html>
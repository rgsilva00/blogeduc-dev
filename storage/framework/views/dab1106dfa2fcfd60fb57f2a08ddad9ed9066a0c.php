<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <?php echo $__env->make('partials.headapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>
        <div id="app">
            <?php echo $__env->make('partials.navapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <?php echo $__env->make('partials.scriptsapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
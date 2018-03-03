<!-- #Head Painel Administrativo -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>BlogEduc &#8211; <?php echo $__env->yieldContent('subtitle'); ?></title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<!-- .Head Painel Administrativo -->
<!-- #Styles -->
<?php echo $__env->make('partials.stylespa', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- .Styles -->
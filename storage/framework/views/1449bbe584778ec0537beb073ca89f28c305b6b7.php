<?php $__env->startSection('subtitle', 'Metodologia do Ensino de Informática'); ?>
<?php $__env->startSection('content'); ?>

<!-- #Breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Blog</li>
  </ol>
</nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
    <li class="breadcrumb-item"><a>Metodologia do Ensino de Informática</a></li>
  </ol>
</nav>
<!-- .Breadcrumb -->

<div class="row">
	<div class="col-3" align="center"></div>
	<div class="col-6" align="center">
		col-6
	</div>
	<div  class="col-3" align="center"></div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webblog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
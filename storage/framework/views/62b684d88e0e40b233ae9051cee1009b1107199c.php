<?php $__env->startSection('subtitle', 'Tecnologia Educacional'); ?>

<!-- #Breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tecnologia Educacional</li>
  </ol>
</nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
    <li class="breadcrumb-item"><a>Tecnologia Educacional</a></li>
  </ol>
</nav>
<!-- .Breadcrumb -->

<?php $__env->startSection('content'); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
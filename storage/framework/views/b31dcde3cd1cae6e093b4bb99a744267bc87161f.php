<?php $__env->startSection('subtitle', 'home'); ?>

<?php $__env->startSection('content'); ?>

<header class="masthead">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0"
          class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo e(asset('img/1.png')); ?>" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo e(asset('img/2.png')); ?>" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo e(asset('img/3.png')); ?>" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators"
        role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators"
        role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>
<section id="about" class="section-padding">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 text-center">
          <h3 class="large-heading">
            <span># BlogEduc</span>
          </h3>
          <p>
            Inserir o conteúdo.
          </p>
      </div>
    </div>
  </div>
</section>
<section id="about-app" class="section-padding">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 text-center">
          <h3 class="large-heading">
            <span># Youtube</span>
          </h3>
          <p>
            Inserir o conteúdo.
          </p>
      </div>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
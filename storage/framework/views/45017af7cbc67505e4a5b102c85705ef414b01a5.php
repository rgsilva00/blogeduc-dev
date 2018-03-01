<!-- #Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
  <div class="container">
    <!-- <a class="navbar-brand" href="#">BlogEduc</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo e(url('/')); ?>">
              Início<span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="<?php echo e(url('educacao')); ?>">Educação</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('informatica')); ?>">Informática</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('teceduc')); ?>">Tecnologia Educacional</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"
            href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
              Blog
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo e(url('mei')); ?>">Metodologia do Ensino de Informática</a>
            <a class="dropdown-item" href="<?php echo e(url('progweb')); ?>">Programação Web</a>
            <a class="dropdown-item" href="<?php echo e(url('roboeduc')); ?>">Robótica Educacional</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- .Navigation -->
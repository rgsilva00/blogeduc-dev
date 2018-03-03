<?php $__env->startSection('subtitle', 'Painel Mídia'); ?>

<!-- Content Wrapper -->
<?php $__env->startSection('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Painel
        <small>Version 0.1</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('paineladmin/paineladmin')); ?>"><i class="fa fa-dashboard"></i> Painel</a></li>
        <li class="active">Mídias</li>
      </ol>
    </section>
    <!-- #Main content -->
    <section class="content">
      Inserir Conteúdo
    </section>
    <!-- .Content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.paineladmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
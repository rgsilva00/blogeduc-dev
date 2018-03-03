<?php $__env->startSection('subtitle', 'Painel Administativo'); ?>

<?php $__env->startSection('content'); ?>
  <!-- #Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('paineladmin/gerenciar/paineladmin')); ?>"><i class="fa fa-dashboard"></i> Painel</a></li>
        <li class="active">Gerenciar</li>
      </ol>
    </section>
    <!-- #Main content -->
    <section class="content">
      Inserir conteúdo
    </section>
    <!-- .Content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.paineladmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
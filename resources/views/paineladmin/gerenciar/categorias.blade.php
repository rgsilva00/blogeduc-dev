@extends('layouts.paineladmin')
@section('subtitle', 'Painel Categoria')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Painel
        <small>Version 0.1</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('paineladmin/paineladmin') }}"><i class="fa fa-dashboard"></i> Painel</a></li>
        <li class="active">Categorias</li>
      </ol>
    </section>
    <!-- #Main content -->
    <section class="content">
      Inserir Conteúdo
    </section>
    <!-- .Content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
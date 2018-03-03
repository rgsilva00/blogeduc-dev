@extends('layouts.paineladmin')
@section('subtitle', 'Painel Administativo')

@section('content')
  <!-- #Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="{{ url('paineladmin/paineladmin') }}"><i class="fa fa-dashboard"></i> Painel</a></li>
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
@endsection
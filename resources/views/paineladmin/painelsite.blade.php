@extends('layouts.paineladmin')
@section('subtitle', 'Painel Administativo')

<!-- Content Wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Painel Site
            <small>Version 0.0.1</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('painelsite') }}"><i class="fa fa-dashboard"></i>Painel</a></li>
            <li class="active">Painel Site</li>
        </ol>
    </section>
    <!-- #Main content -->
    @section('content')

    <!-- .Content -->
</div>
<!-- .Content-wrapper -->

@endsection
@extends('layouts.website')
@section('subtitle', 'Informática')

<!-- #Breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Informática</li>
  </ol>
</nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item"><a>Informática</a></li>
  </ol>
</nav>
<!-- .Breadcrumb -->

@section('content')


@endsection

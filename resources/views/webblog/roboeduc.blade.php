@extends('layouts.webblog')
@section('subtitle', 'Robótica Educacional ')
@section('content')

<!-- #Breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Blog</li>
  </ol>
</nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item"><a>Robótica Educacional</a></li>
  </ol>
</nav>
<!-- .Breadcrumb -->

<div class="row">
	<div class="col-3" align="center">
		coluna-3
	</div>
	<div class="col-6" align="center">
		coluna-6
	</div>
	<div class="col-3" align="center">
		coluna-3
	</div>
</div>

@endsection

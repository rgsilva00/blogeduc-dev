<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		@include('partials.head')
	</head>
	<body>
		@include('partials.nav')
		<!-- #Content -->
		@yield('content')
		<!-- .Content -->
		@include('partials.footer')
		@include('partials.scripts')
	</body>
</html>
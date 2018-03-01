<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		@include('partials.headpa')
	</head>
	<body class="hold-transition skin-blue-light sidebar-mini">
		<div class="wrapper">
			@include('partials.navhead')
			@include('partials.leftsidebar')
			<!-- #Content -->
			@yield('content')
			<!-- .Content -->
			@include('partials.mainfooter')
			@include('partials.controlsidebar')
		</div>
		@include('partials.scriptspa')
	</body>
</html>
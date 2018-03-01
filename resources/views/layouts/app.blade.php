<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partials.headapp')
    </head>
    <body>
        <div id="app">
            @include('partials.navapp')
            @yield('content')
        </div>
        @include('partials.scriptsapp')
    </body>
</html>
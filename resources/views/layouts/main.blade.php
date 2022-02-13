<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.header')
    </head>
    <body>
        <!-- This is for the content of every webpage -->
        <div class="wrap__body">
            @yield('content')
        </div>
        @include('partials.javascripts')
    </body>  
</html>

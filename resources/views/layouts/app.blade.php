<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        @yield('head')
    </head>
    <body>
      @yield('content')

      @yield('foot-script')
    </body>
</html>

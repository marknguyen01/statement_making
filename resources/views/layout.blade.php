<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ env("APP_NAME") }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset("css/app.css") }}" rel="stylesheet">
    </head>
    <body>
      <div id="app">
        @yield('content')
      </div>
      <script type="text/javascript" src="{{ asset("js/app.js") }}"></script>
    </body>
</html>

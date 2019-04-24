<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env("APP_NAME") }}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @yield('content')
    </div>
    <script type="text/javascript" src="{{ asset("js/app.js") }}"></script>
    <div class="audio-control">
        <p id="audio-control" class="white-circle">
          <i class="fas fa-microphone"></i>
        </p>
        <p><span id="message"></span></p>
    </div>
    <script src="https://sdk.amazonaws.com/js/aws-sdk-2.48.0.min.js"></script>
    <script src="{{ asset("js/aws-lex-audio.js") }}" type="text/javascript"></script>
    <script src="{{ asset("js/aws-bot.js") }}" type="text/javascript"></script>
</body>

</html>

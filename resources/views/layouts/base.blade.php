<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-behavior: smooth;" class="scroll-smooth h-full">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" sizes="16x16 32x32"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/29f99118dd.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abel&family=Source+Code+Pro:wght@200&display=swap');
    </style>
    <title>TBC</title>
</head>
<body class="antialiased h-full">
<div id="app" class="h-full">
    @yield('content')
</div>

<script src="{{ mix('js/app.js') }}" type="application/javascript"></script>
</body>
</html>

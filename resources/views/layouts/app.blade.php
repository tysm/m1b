<!DOCTYPE html>
<html>
<head>

    @section('head')
        <meta charset="utf-8">
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robot" content="All">
        <meta name="rating" content="general">
        <meta name="distribution" content="global">
        <meta name="language" content="pt-br">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="theme-color" content="#2F3BA2" />

        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Weather PWA">
        <link rel="apple-touch-icon" href="/images/icons/icon-152x152.png">

        <meta name="description" content="A sample weather app">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" media ="screen" title="no title">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel=”manifest” href="{{ asset('manifest.json')}}">

        <!-- Favicon -->

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('icons/site.webmanifest') }}">
        <meta name="msapplication-TileColor" content="#da532c">


    @show

    <title>Nome | @yield('title')</title>
    
</head>
<body>
    <div id="app">
        @section('navbar')
            @include('includes.navbar')
        @show 

        @yield('content')


    </div>

    <!-- Scripts -->

    @section('script')
        @include('includes.script')
        <script>
        // Check that service workers are supported
        if ('serviceWorker' in navigator) {
          // Use the window load event to keep the page load performant
          window.addEventListener('load', () => {
            navigator.serviceWorker.register('/service-worker.js');
          });
        }
        </script>
    @show

</body>
</html>

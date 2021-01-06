<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('style')    
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts.header')

        @include('layouts.sidebar')

        <div class="content-wrapper">
            @yield('content') 
        </div>
    </div>

    @include('layouts.footer')

    <script src="{{ asset('public/plugins/jquery/adminlte.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- TODO change title for selected lang-->
    <title>Dashboard</title>

    <link href="{{ asset('css/dashboard/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
<div id="app">
    <div class="container body">
        <div class="main_container">
            @include('partials.dashboard.head')
            @include('partials.dashboard.sidebar')
            <!-- page content -->
            <div class="right_col" role="main">
                @yield('content')
            </div>
            <!-- /page content -->
        </div>
    </div>
</div>

<script src="{{ asset('js/dashboard/dashboard.js') }}"></script>
<script src="{{ asset('js/dashboard/custom.min.js') }}"></script>
</body>
</html>
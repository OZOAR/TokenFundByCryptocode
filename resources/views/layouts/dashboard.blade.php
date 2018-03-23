<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(session('auth-token'))
        <meta name="auth-token" content="{{ session('auth-token') }}">
    @endif

    <title>{{ config('app.dashboard', 'Dashboard') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/dashboard/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
<div id="app">
    <!-- Content here -->
</div>

<!-- Scripts -->
<script src="{{ asset('js/dashboard/dashboard.js') }}"></script>
<script src="{{ asset('js/dashboard/custom.min.js') }}"></script>
</body>
</html>
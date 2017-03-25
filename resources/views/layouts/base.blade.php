<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title.' | ' : '' }} {{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ mix('build/css/app.css') }}" rel="stylesheet">

    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>

    @include('layouts._google_analytics')
</head>
<body class="{{ $bodyClass or '' }}">

<div id="app">
    @include('layouts._nav')

    @yield('body')

    @include('layouts._footer')
</div>

<script src="{{ asset('build/custom/markdown.js') }}"></script>
<script src="{{ mix('build/js/app.js') }}"></script>

</body>
</html>

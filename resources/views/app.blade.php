<!DOCTYPE html>
<html>

<head>
    @vite('resources/vue/app.js')
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets') }}/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/fonts/unicons/unicons.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/colors/grape.css">
    <link rel="preload" href="{{ asset('assets') }}/css/fonts/space.css" as="style" onload="this.rel='stylesheet'">
    @inertiaHead
</head>

<body>
    @inertia
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>

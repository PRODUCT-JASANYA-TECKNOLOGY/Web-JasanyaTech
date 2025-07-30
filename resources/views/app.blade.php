<!DOCTYPE html>
<html>

<head>
    @vite('resources/vue/app.js')
    @inertiaHead
</head>

<body>
    @inertia
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
</body>

</html>

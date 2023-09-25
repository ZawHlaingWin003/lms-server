<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <meta content="{{ csrf_token() }}" name="csrf-token" />

    @stack('meta')

    <title>@yield('title')</title>
    <link href="#" rel="shortcut icon" type="image/x-icon">

    @stack('styles')
</head>

<body>
    @yield('content')

    @stack('modals')

    @stack('scripts')
</body>

</html>

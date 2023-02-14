<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body class="@yield('body-class')">
    @yield('body')
</body>

<script type="text/javascript" src=""></script>

@vite(['resources/css/app.css', 'resources/js/app.js'])

@stack('css')
@stack('script')

</html>

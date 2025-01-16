<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @include('layouts.head')
    @yield('head')
</head>
<body class="crm_body_bg">

@yield('content')

@include('layouts.script')
@yield('footer')
</body>

</html>
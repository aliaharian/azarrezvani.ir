<!doctype html>
<html>

<head>

    @include('includes.headLinks')

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-language" content="fa-IR">


    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="mobile-web-app-capable" content="yes">
    <meta name="google" value="notranslate">



    <meta charset="utf-8" />


    @yield('headSection')
</head>

<body class="@yield('pagename') light">
    @include('includes.header', ['page' => $page ?? ''])
    @yield('bodySection')
    @include('includes.footer')
    @include('includes.footerLinks')
    @yield('scriptsSection')

 
</body>

</html>
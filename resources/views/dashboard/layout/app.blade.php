<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">

<head>
    <!--Head-->
    @include('dashboard/layout/head')
</head>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">
    @if (isset($result) && $result == true)
        @include('dashboard/layout/header')
        <!--Sidebaer-->
        @include('dashboard/layout/sidebar')
        <!--Content-->
        @yield('content')
        <!--footer-->
        @include('dashboard/layout/footer')
    @else
        @yield('content')
    @endif
    @include('dashboard/layout/js')
</body>

</html>

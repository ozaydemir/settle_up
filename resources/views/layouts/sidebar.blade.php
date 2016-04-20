<!doctype html>
<html class="no-js" lang="en">
    <head>
        @include('includes.head')
    </head>
    <body class="sidebar-layout">

        <div class="page-wrapper">
            @include('includes.header-sidebar')
            @yield('content')
            @include('includes.footer')
        </div>

        @include('includes.sidebar')
    </body>
</html>

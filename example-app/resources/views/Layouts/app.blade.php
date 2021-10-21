<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Classwork @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div id="app">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
            <ul class="navbar-nav">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('dashboard') }}" class="brand-link">
                <img src="{{ Config::get('settings.logo') }}" alt="{{ Config::get('settings.name') }}"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{ Config::get('settings.name') }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item has-treeview ">
                            <a href="{{ route('dashboard') }}" class="nav-link ">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    {{ __('dashboard') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link ">
                                <i class="nav-icon fas fa-play"></i>
                                <p>
                                    {{ __('dashboard') }}
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                        @can('view_admin')
                            <li class="nav-header">@lang('menus.administration')</li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard') }}" class="nav-link">
                                    <i class="nav-icon fas fa-lock"></i>
                                    <p>

                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard') }}" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>

                                    </p>
                                </a>
                            </li>
                        @endcan
                        <li class="nav-header"></li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="nav-icon fas fa-power-off red"></i>
                                <p>
                                    {{ __('Logout') }}
                                </p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>

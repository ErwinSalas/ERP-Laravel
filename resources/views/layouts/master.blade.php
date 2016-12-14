<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/sidebar.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/form.css')}}" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class=" mini-container ">
            <div class="navbar-header">
                <form id="custom-search-form" class="form-search form-horizontal pull-right">
                    <div class="input-append span12">
                        <input type="text" id="input-search" class="search-query mac-style" placeholder="Search">
                        <button type="submit"  class="btn"><i class="material-icons" id="btn-search">search</i></button>
                    </div>
                </form>
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand pull-left" href="{{ url('/') }}">
                    {{ config('app.name', 'Home') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>

                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="side-container" style="padding-left: 10px;">
        <div class="row">
            <div class="wrapper">
                <div class="side-bar">
                    <ul>
                        <li class="menu-head">
                            ERP COMMERCE <a href="#" class="push_menu"><i class="material-icons pull-right">view_list</i></a>
                        </li>
                        <div class="menu">
                            <li>
                                <a href="#">Dashboard <i class="material-icons pull-right">perm_identity</i></a>
                            </li>
                            <li>
                                <a  href="{{ url('/products') }}" >Productost<i class="material-icons pull-right">shop</i></a>
                            </li>
                            <li>
                                <a href="{{ url('/clients') }}">Clientes <i class="material-icons pull-right">user</i></a>
                            </li>
                            <li>
                                <a href="#">Settings <span class="glyphicon glyphicon-cog pull-right"></span></a>
                            </li>
                        </div>

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="container margin-top">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">

                        @yield('content')

                </div>
            </div>
        </div>
    </div>

</div>

<!-- Scripts -->
<script src="/js/app.js"></script>

@yield('scripts')
</body>
</html>
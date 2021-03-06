<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
        </main>
    </div>
    
    
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">Dashboard</li>
                <li><a href="{{ route('dashboard') }}" class="{{ Route::currentRouteNamed('dashboard') ? 'active2' : '' }}">Chi sono</a></li>
                <li><a href="{{ route('myFavourites') }}" class="{{ Route::currentRouteNamed('myFavourites') ? 'active2' : '' }}">Cosa mi piace</a></li>
                <li><a href="{{ route('mySocial') }}" class="{{ Route::currentRouteNamed('mySocial') ? 'active2' : '' }}">I miei contatti social</a></li>
                <li><a href="{{ route('contactMe') }}" class="{{ Route::currentRouteNamed('contactMe') ? 'active2' : '' }}">Contattami</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            {{-- <a href="#menu-toggle" class="btn btn-dark" id="menu-toggle">Chiudi Menu</a> --}}
                            <a class="btn btn-dark fas fa-arrow-alt-circle-left" id="menu-toggle" href="#menu-toggle" value="<"
                                       onclick="event.preventDefault();
                                       document.getElementById('wrapper').classList.toggle('toggled');
                                       document.getElementById('menu-toggle').classList.contains('btn-dark') ? this.classList.replace('btn-dark', 'btn-primary') : this.classList.replace('btn-primary','btn-dark')
                                    document.getElementById('menu-toggle').classList.contains('fa-arrow-alt-circle-left') ? this.classList.replace('fa-arrow-alt-circle-left', 'fa-arrow-alt-circle-right') : this.classList.replace('fa-arrow-alt-circle-right','fa-arrow-alt-circle-left')
                                       "></a>
                            @yield('content')
                                    
                        </div>
                    </div>
                </div>
            </div>
    <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    {{-- <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            console.log(e);
            $("#wrapper").toggleClass("toggled");
        });
    </script> --}}
</body>
</html>

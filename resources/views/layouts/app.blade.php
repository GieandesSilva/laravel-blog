<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.min.css') }}">
    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
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
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <img src="{{ asset(Auth::user()->profile->avatar) }}" style=" height: 40px; margin-top: 5px; border-radius:50%; float: left; text-align: inline-block">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="float: left; text-align: inline-block">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('user.profile') }}"> My Profile </a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            
            <div class="row">

                
            @if(Auth::check())
                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-3">
                    
                    <ul class="list-group">
                    
                        <li class="list-group-item">
                            <a href="{{ route('home') }}"> Dashboard </a>
                        </li>    
                        <li class="list-group-item">
                            <a href="{{ route('post.create') }}"> Create a new Post </a>                                
                        </li>    
                        <li class="list-group-item">
                            <a href="{{ route('posts') }}"> All Posts </a>                                
                        </li>    
                        <li class="list-group-item">
                            <a href="{{ route('posts.trashed') }}"> All Trashed Posts </a>                                
                        </li>    
                        <li class="list-group-item">
                            <a href="{{ route('category.create') }}"> Create a new Category </a>                                
                        </li>    
                        <li class="list-group-item">
                            <a href="{{ route('categories') }}"> All Categories </a>                                
                        </li>    
                        <li class="list-group-item">
                            <a href="{{ route('tags') }}"> All Tags </a>                                
                        </li>    
                        <li class="list-group-item">
                            <a href="{{ route('tag.create') }}"> Create a new Tag </a>                                
                        </li>    
                        @if(Auth::user()->admin)

                            <li class="list-group-item">
                                <a href="{{ route('users') }}"> All Users </a>                                
                            </li>    
                            <li class="list-group-item">
                                <a href="{{ route('user.create') }}"> Create a new User </a>                                
                            </li>    
                            <li class="list-group-item">
                                <a href="{{ route('settings') }}"> Settings </a>                                
                            </li>    

                        @endif
                    </ul>

                </div>

            @endif

                <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">
                    
                    @yield('content')
        
                </div>
                
            </div>

        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        
        @if(Session::has('success'))

            toastr.success("{{ Session::get('success') }}")

        @endif

        @if(Session::has('info'))

            toastr.info("{{ Session::get('info') }}")

        @endif
    </script>

    @yield('scripts')
</body>
</html>

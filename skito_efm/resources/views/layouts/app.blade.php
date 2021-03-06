<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('none.png')}}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
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

                        @guest
                        <li class="nav-item active">
                            <a class="nav-link">None <span class="sr-only">My Courses</span></a>
                        </li>
                        @else
                            @if(Auth::user()->id_user_type == 2)
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('all_courses')}}">All Courses <span class="sr-only">My Courses</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('GetUserSkills',['id'=>Auth::user()->id])}}">My Skills <span class="sr-only">My Courses</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('All_Quizes')}}">All Quizes <span class="sr-only">My Courses</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('get_all_taatcher')}}">All Teatchers <span class="sr-only">My Courses</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('get_student_message',['std_id'=>Auth::user()->id])}}">My Questions <span class="sr-only">My </span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('quize_data_user',['id_u'=>Auth::user()->id])}}">My Exames Data <span class="sr-only">My </span></a>
                                </li>
                            @else
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('all_courses')}}">All Courses <span class="sr-only">My Courses</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('get_Courses')}}">My Courses <span class="sr-only">My Courses</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('GetUserSkills',['id'=>Auth::user()->id])}}">My Skills <span class="sr-only">My Courses</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('All_Quizes')}}">All Quizes <span class="sr-only">My Courses</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('Teatcher_Quizes')}}">My Quizes <span class="sr-only">My Courses</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('get_teatcher_message')}}">My Questions <span class="sr-only">My Courses</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('quize_data_user',['id_u'=>Auth::user()->id])}}">My Exames Data <span class="sr-only">My </span></a>
                                </li>
                            @endif
                        @endguest

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

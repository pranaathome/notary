<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg mb-3 navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @can('logged-in')
                            @can('is-admin')
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('admin.users.index') }}">Users</a>
                                </li>
                            @endcan

                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('notary.index') }}">Notary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('ppat.index') }}">PPAT</a>
                            </li>
                        @endcan



                        <div class="projects">
                            {{-- <button>Projects</button> --}}
                            {{-- <ul>
                                <li><a href="#">Sample Text</a></li>
                                <li><a href="#">Sample Text</a></li>
                                <li><a href="#">Sample Text</a></li>
                            </ul> --}}
                        </div>

                        <div class="products">
                            {{-- <button>Products</button> --}}
                            {{-- <ul>
                                <li><a href="#">Sample Text</a></li>
                                <li><a href="#">Sample Text</a></li>
                                <li><a href="#">Sample Text</a></li>
                            </ul> --}}
                        </div>
                    </ul>
                </div>

                @if (Route::has('login'))
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @auth
                            <li class="nav-item">
                                <a href="" class="nav-link active">{{ auth()->user()->name }}</a>
                            </li>
                            <li class="nav-item">
                                <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: inline">
                                    @csrf
                                    <button class="logout-btn nav-link active" type="submit">Logout</button>
                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('login') }}">Login</a>
                            </li>
                        @endauth
                    </ul>
                @endif
            </div>
        </nav>

        <main class="container">
            @include('partials.alerts')
            @yield('content')
        </main>
    </body>
</html>

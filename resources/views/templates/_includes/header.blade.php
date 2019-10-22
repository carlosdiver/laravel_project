<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>

    <header>
        <nav>
            <div class="nav-wrapper deep-orange">
                <div class="container">
                    <a href="#!" class="brand-logo">Curso Laravel Udemy</a>
                    <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/">Home</a></li>
                        @if(Auth::guest())
                         <li><a href="{{route('login')}}">Login</a></li>
                        @else
                        <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
                        <li><a href="#">{{ Auth::user()->name }}</a></li>
                        <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
                        @endif
                        
                    </ul>
                    
                    <ul class="sidenav hide-on-large-only" id="mobile">
                        <li><a href="/">Home</a></li>
                        @if(Auth::guest())
                         <li><a href="{{route('login')}}">Login</a></li>
                        @else
                        <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
                        <li><a href="#">Bem vindo {{ Auth::user()->name }}</a></li>
                        <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
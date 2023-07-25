<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Topscan') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    {{-- @include('layouts.navigation') --}}
<div class="container">
    <nav class="navbar navbar-expand-lg m-auto">
        <a class="navbar-brand" href="/">TOPSCAN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('service') }}">Our Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About us</a>
            </li>
          </ul>

        </div>
          @auth
            <ul class="navbar-nav">
              <li class="nav-item">
                  <p class="nav-link fw-bold"> You are logged in as : <span style="color:rgb(255, 222, 4);">{{ Auth::user()->name }}</span> </p>
              </li>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
              <li class="nav-item">
                  <button class="nav-link btn btn-default">Logout</button>
              </li>
            </form>
            </ul>
          @else
            <ul class="navbar-nav">

              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">Register</a>
              </li>
            </ul>
          @endauth       
      </nav>
</div>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
</body>
</html>
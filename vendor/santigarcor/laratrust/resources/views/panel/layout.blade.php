<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{ asset('/vendor/laratrust/img/logo.png') }}">
  <title>Stratizen - @yield('title')</title>
  <link href="{{ asset(mix('laratrust.css', 'vendor/laratrust')) }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
<div>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex" href="{{ route('posts.index') }}">
        <div><img src="{{ asset('/vendor/laratrust/img/logo.png') }}" style="height:40px; border-right: 1px solid #333;" class="pr-3" a></div>
            <div class="pl-3 pt-2" style="color:#000;">{{ config('app.name', 'StratizenAsk') }}</div>
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
              <li class="nav-item">
                  <a href="{{config('laratrust.panel.go_back_route')}}" class="nav-link pt-3 pl-4" style="color: #000; font-size:16px;">← Go Back</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('laratrust.roles-assignment.index') }}" class="nav-link pt-3 pl-4" style="color: #000; font-size:16px;">
                  Roles & Permissions Assignment
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('laratrust.roles.index')}}" class="nav-link pt-3 pl-4" style="color: #000; font-size:16px;">
                  Roles
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('laratrust.permissions.index') }}" class="nav-link pt-3 pl-4" style="color: #000; font-size:16px;">
                  Permissions
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link pt-3 pl-4" style="color: #000; font-size:16px;">
                  Users
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('courses.index')}}" class="nav-link pt-3 pl-4" style="color: #000; font-size:16px;">
                  Courses
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('index_admin')}}" class="nav-link pt-3 pl-4" style="color: #000; font-size:16px;">
                  Posts
                </a>
              </li>
            </ul>
        </div>
    </div>
  </nav>
  <header class="bg-white shadow">
    <div class="max-w-6xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold leading-tight text-gray-900">
        @yield('title')
      </h1>
    </div>
  </header>
  <main>
    <div class="max-w-6xl mx-auto py-6 sm:px-6 lg:px-8">
      @foreach (['error', 'warning', 'success'] as $msg)
        @if(Session::has('laratrust-' . $msg))
        <div class="alert-{{ $msg }}" role="alert">
          <p>{{ Session::get('laratrust-' . $msg) }}</p>
        </div>
        @endif
      @endforeach
      <div class="px-4 py-6 sm:px-0">
        @yield('content')
      </div>
    </div>
  </main>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">New</a>
        </li>
        @auth
          <a href="{{route('login')}}" class="nav-link active">{{auth()->user()->name}} </a>
        @endauth
        @guest
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('signup')}}">Signup</a>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
<!-- dynamic content -->
    @yield('content')
</body>
</html>
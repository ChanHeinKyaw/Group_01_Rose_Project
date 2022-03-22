<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <!-- Styles -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
  <div id="content">
    <header class="top-sec">
      <div class="inner-container">
        <nav class="hdr">
          <h1>
            <a href="{{ url('/') }}" class="logo">နှင်းဆီ🌹</a>
          </h1>
          <ul class="menu">
            <li class="item @yield('login-active')"><a href="{{ route('login') }}">အကောင့်ဝင်ရန်</a></li>
            <li class="item @yield('register-active')"><a href="{{ route('register') }}">အကောင့်အသစ်ဖွင့်ရန်</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="blank-space"></div>
    @yield('content')
  </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/ui/reset.css') }}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="{{ asset('css/ui/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/ui/article.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/ui/report.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/ui/profile.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/ui/contact.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/ui/about.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/ui/password.css') }}" />
</head>

<body>
  <button class="floating-button" id="showForm">
    🌹
  </button>
  <div class="form-popup" id="myForm">
    <form  action="{{ route("post#report") }}" method="post" class="form-container">
      @csrf
      <p class="pop-up-txt"> ပို့မှာ သေချာလား? </p>
      <div class="pop-btn">

        <button type="submit" class="btn send" onclick="this.form.submit();this.disabled = true;">ပို့မည်။ </button>

        <button type="button" class="btn cancel" id="closeForm">မပို့ဘူး။</button>
      </div>
    </form>
  </div>

  <div id="jsScroll" class="scroll" onclick="scrollToTop()">
    ⬆️
  </div>

  <header class="top-sec">
    <div class="inner-container">
      <nav class="hdr">
        <h1>နှင်းဆီ🌹</h1>
        <ul class="menu">
          @if (Auth::user()->type == 1)
          <li class="item"><a href="{{ url('/admin/dashboard') }}">စီမံခန့်ခွဲသူ</a></li>
          @endif
          <li class="item @yield('home-active')"><a href="/">ပင်မစာမျက်နှာ</a></li>
          <li class="item @yield('report-active')"><a href="{{ url('/report') }}">တိုင်ကြားရန်</a></li>
          <li class="item @yield('contact-active')"><a href="{{ url('/contact') }}">ဆက်သွယ်ရန်</a></li>
          <li class="item @yield('about-active')"><a href="{{ url('/about') }}">ကျွန်ုပ်တို့အကြောင်း</a></li>
          <li class="item has-submenu dropdown">
            <a tabindex="0" class="dropbtn" id="toggle-btn">ကိုယ်ရေးအကျဉ်း</a>
            <div class="dropdown-content">
              @if (Auth::user()->type == 0 )
              <a href="{{ url('/profile') }}">ကိုယ်ရေးအကျဉ်းကြည့်မည်</a>
              @elseif (Auth::user()->type == 1)
              <a href="{{ url('/admin/profile') }}">ကိုယ်ရေးအကျဉ်းကြည့်မည်</a>
              @endif

              @if (Auth::user()->type == 0 )
              <a href="{{ url('/change-password') }}">စကားဝှက်ပြောင်းမည်</a>
              @elseif (Auth::user()->type == 1)
              <a href="{{ url('/admin/change-password') }}">စကားဝှက်ပြောင်းမည်</a>
              @endif
            

              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                အကောင့်ထွက်မည်
              </a>
            

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        </ul>
        <p class="menu-trigger">
          <span></span>
          <span></span>
          <span></span>
        </p>
      </nav>
    </div>
  </header>

  @yield('content')

  <script src="{{ asset('js/library/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('js/common.js') }}"></script>
</body>

</html>

@yield('scripts')
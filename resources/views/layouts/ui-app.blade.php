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
    đš
  </button>
  <div class="form-popup" id="myForm">
    <form  action="{{ route("post#report") }}" method="post" class="form-container">
      @csrf
      <p class="pop-up-txt"> áá­áŻáˇáážáŹ ááąááťáŹááŹá¸? </p>
      <div class="pop-btn">

        <button type="submit" class="btn send" onclick="this.form.submit();this.disabled = true;">áá­áŻáˇáááşá </button>

        <button type="button" class="btn cancel" id="closeForm">ááá­áŻáˇáá°á¸á</button>
      </div>
    </form>
  </div>

  <div id="jsScroll" class="scroll" onclick="scrollToTop()">
    âŹď¸
  </div>

  <header class="top-sec">
    <div class="inner-container">
      <nav class="hdr">
        <a style="color: #000000" href="/"><h1>áážááşá¸ááŽđš</h1></a>
        <ul class="menu">
          @if (Auth::user()->type == 1)
          <li class="item"><a href="{{ url('/admin/dashboard') }}">ááŽááśáááˇáşáá˝á˛áá°</a></li>
          @endif
          <li class="item @yield('home-active')"><a href="/">áááşáááŹááťááşáážáŹ</a></li>
          <li class="item @yield('report-active')"><a href="{{ url('/report') }}">áá­áŻááşááźáŹá¸áááş</a></li>
          <li class="item @yield('contact-active')"><a href="{{ url('/contact') }}">áááşáá˝ááşáááş</a></li>
          <li class="item @yield('about-active')"><a href="{{ url('/about') }}">ááťá˝ááşáŻááşáá­áŻáˇáĄááźáąáŹááşá¸</a></li>
          <li class="item has-submenu dropdown">
            <a tabindex="0" class="dropbtn" id="toggle-btn">áá­áŻááşááąá¸áĄááťááşá¸</a>
            <div class="dropdown-content">
              <a href="{{ url('/profile') }}">áá­áŻááşááąá¸áĄááťááşá¸ááźááˇáşáááş</a>

              <a href="{{ url('/change-password') }}">áááŹá¸áážááşááźáąáŹááşá¸áááş</a>
            
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                áĄááąáŹááˇáşáá˝ááşáááş
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
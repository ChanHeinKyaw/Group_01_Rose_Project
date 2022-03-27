<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">

  <!-- CSS Reset -->

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700"
  rel="stylesheet">
   <!-- CSS Reset -->

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700"
  rel="stylesheet">
   <!-- CSS Reset -->
  <link rel="stylesheet" href="{{ asset('css/admin/reset.css') }}">

  <!-- Template Styles -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

  <!-- Milligram CSS minified -->
  <link rel="stylesheet" href="{{ asset('css/admin/milligram.min.css') }}">

  <!-- Main Styles -->
  <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
 
</head>

<body>
  <div class="navbar">
  <div class="row">
    <div class="column column-30 col-site-title"><a href="{{ url('/') }}" class="site-title float-left">
      <h1>နှင်းဆီ🌹</h1>

    </a></div>
    <div class="column column-40 col-search"><a href="#" class="search-btn fa fa-search"></a>
    <input type="text" name="" value="" placeholder="Search..." />
    </div>
    <div class="column column-30">
    <div class="user-section"><a href="{{ url('/admin/profile') }}">
      @if( Auth::user()->profile)
      <img class="img-profile" src="{{ asset('storage/images/'.Auth::user()->profile ) }}" alt="" lass="circle float-left profile-photo" width="50" height="auto">
      @elseif ( Auth::user()->profile == null )
      <img src=" {{ asset('image/user.png') }}" alt="" title="" lass="circle float-left profile-photo" width="50" height="auto">
      @endif
      <div class="username">
        <h4>{{ Auth::user()->name }}</h4>
        <p>Administrator</p>
      </div>
      </a></div>
    </div>

    </a>
    <div class="column">
      <div class="user-section"><a href="{{ url('/admin/profile') }}">
        <img src="http://via.placeholder.com/50x50" alt="profile" class="circle float-left profile-photo" width="50"
          height="auto">
        <div class="username">
          <h4>Aye Myat Myat Soe</h4>
          <p>Administrator</p>
        </div>
        </a></div>
      </div>
  </div>

  </div>
  </div>
  <div class="row">

  <div id="sidebar" class="column">
    <h5>Navigation</h5>
    <ul>
    <li><a href="{{ url('/admin/dashboard') }}"><em class="fa fa fa-home"></em> DashBoard</a></li>
    <li><a href="{{ url('/admin/graph') }}"><em class="fa fa fa-bar-chart"></em> Graph</a></li>
    <li><a href="{{ url('/admin/record') }}"><em class="fa fa fa-database"></em> Records</a></li>
    <li><a href="{{ url('/admin/user') }}"><em class="fa fa fa-user"></em> User</a></li>
    <li><a href="{{ url('/admin/post') }}"><em class="fa fa fa-group"></em> Post</a></li>
    <li><a href="{{ url('/admin/contact') }}"><em class="fa fa fa-address-book"></em> Contact Us</a></li>
    <li>
      <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
      <em class="fa fa fa-sign-out"></em>Logout
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
      </form>
    </li>

    </ul>
  </div>

  @yield('content')
  </div>

  <script src="{{ asset('js/library/jquery-3.6.0.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  <script src="{{ asset('js/library/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('js/chart.min.js') }}"></script>
  <script src="{{ asset('js/chart-data.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
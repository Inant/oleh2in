<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/vendor/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/vendor/linearicons/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/vendor/chartist/css/chartist-custom.css') }}">
  <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('public/img/favicon.png') }}">
  <title>@yield('title')</title>
</head>
<body>
  {{-- <div id="loading">
    <center>
      <img src="{{ asset('public/img/loading.gif') }}">
      <p>Loading</p>
    </center>  
  </div> --}}

  {{-- Wrapper --}}
  <div id="wrapper">   
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <span class="lnr lnr-store" style="font-size:large; "></span> <span style="font-size: medium;">Oleh2IN</span>
      </div>
      <div class="container-fluid">
        <div class="navbar-btn">
          <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>

        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
            @if (\Auth::user())    
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user"></i><span>{{Auth::user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i> </a>
              <ul class="dropdown-menu">
                <li>
                  <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item btn btn-block" style="cursor: pointer"><i class="lnr lnr-exit"></i><span> Logout</span></button>
                  </form>
                </li>
              </ul> 
            </li>
            @endif 
          </ul>
        </div>
      </div>
    </nav>
    {{-- End Navbar --}}

    {{-- Sidebar --}}  
    <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
          <li><a href="{{ route('home') }}"><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
          <li><a href="{{ route('users.create') }}"><i class="lnr lnr-user"></i><span>Manage Users</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
    {{-- End Sidebar --}}
    {{-- Main --}}   
    @yield('content')
  </div>
  {{-- End Wrapper --}}


  <script src="{{ asset('public/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('public/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('public/scripts/klorofil-common.js') }}"></script>
</body>
</html>
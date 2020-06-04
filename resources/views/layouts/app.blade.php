<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>
        @yield('title')
    </title>
    <meta name="description" content=" i have used boostrap 4">
    <meta name="author" content="bazimyas@gmail.com">
    <meta name="keywords" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='asset/css/fonts.googleapis.css' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/preview.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="asset/img/Coat_of_arms_of_Rwanda.svg">
<script src="asset/js/jquery.min.js"></script>

</head>
<!-- <div class="spinner-grow" role="status">
    <span class="sr-only">Loading...</span>
</div> -->

<body data-spy="scroll" data-target="#scroll-menu" data-offset="100">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
            <img src="asset/img/download.png" alt="Logo" style="width:40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>


                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
            <li class="nav-item">
                <a style="margin-top: -10px !important;color: cornsilk !important;" class="nav-link" href="home">Home</a>
             </li>
            <div class="dropdown" style="color: cornsilk !important">
                <li class=" dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </li>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
                {{-- logout  --}}
                  <a class="dropdown-item" href="Setting">Setting</a>
                  @if (Auth::user()->User_type=='admin')
                  <a class="dropdown-item" href="dashboard">Dashboard</a>
                  @elseif(Auth::user()->User_type=='instution')
                  <a class="dropdown-item" href="dashboard">Dashboard</a>
                  @elseif(Auth::user()->User_type=='middle')
                  <a class="dropdown-item" href="dashboard">Dashboard</a>
                  @else
                  @endif

                </div>
              </div>



            @endguest



            </ul>

        </div>
    </nav>
    <!-- End Preloader -->
    <main class="container-flued">
        @yield('content')
    </main>

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
      <script src="asset/js/bootstrap.min.js"></script>
      <script src="asset/js/js.js"></script>
    @yield('script')
</body>

</html>

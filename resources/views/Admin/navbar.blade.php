<!DOCTYPE html>
<html lang="en">

<head>



    <!-- Title Page-->
    <title>Hoda Dashboard</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('') }}" type="image/png">

    <!-- Fontfaces CSS-->
    <link href=" {{ asset('public/dashboard/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href=" {{ asset('public/dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('public/dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('public/dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('public/dashboard/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <!-- Vendor CSS-->
    <link href="{{ asset('public/dashboard/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('public/dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('public/dashboard/vendor/wow/animate.css') }} " rel="stylesheet" media="all">
    <link href="{{ asset('public/dashboard/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{asset('public/dashboard/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/dashboard/vendor/select2/select2.min.css') }} " rel="stylesheet" media="all">
    <link href="{{asset('public/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('public/dashboard/css/theme.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a >
                    {{-- <img src="{{ asset('assets/images/LOGO.png') }}"  width="120px" /> --}}
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Home</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                {{-- <li>
                                    <a href={{url('/slider/index')}}>
                                        <i class="far fa-check-square"></i>Slider</a>
                                </li> --}}
                            </ul>
                        </li>



                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        @yield('content')
    </div>

      <!-- Jquery JS-->
      <script src="{{ asset('public/dashboard/vendor/jquery-3.2.1.min.js') }}"></script>
      <!-- Bootstrap JS-->
      <script src="{{ asset('public/dashboard/vendor/bootstrap-4.1/popper.min.js') }}"></script>
      <script src="{{ asset('public/dashboard/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
      <!-- Vendor JS       -->
      <script src="{{ asset('public/dashboard/vendor/slick/slick.min.js') }}">
      </script>
      <script src="{{ asset('public/dashboard/vendor/wow/wow.min.js') }}"></script>
      <script src="{{ asset('public/dashboard/vendor/animsition/animsition.min.js') }}"></script>
      <script src="{{ asset('public/dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
      </script>
      <script src="{{ asset('public/dashboard/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
      <script src="{{ asset('public/dashboard/vendor/counter-up/jquery.counterup.min.js') }}">
      </script>
      <script src="{{ asset('public/dashboard/vendor/circle-progress/circle-progress.min.js') }}"></script>
      <script src="{{ asset('public/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
      <script src="{{ asset('public/dashboard/vendor/chartjs/Chart.bundle.min.js') }}"></script>
      <script src="{{ asset('public/dashboard/vendor/select2/select2.min.js') }}">
      <script src="{{asset('public/assets/ckeditor/ckeditor.js')}}" type="text/javascript"></script>

      </script>

      <!-- Main JS-->
      <script src="{{ asset('public/dashboard/js/main.js') }}"></script>

  </body>

  </html>
  <!-- end document-->


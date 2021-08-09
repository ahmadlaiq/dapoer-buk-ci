<!DOCTYPE html>
<html lang="en">

<head>
  <title> Dapoer Buk Ci </title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="apple-touch-icon" href="assets/img/apple-icon.png" />
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/img/favicon.svg')}}" />

  <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('user/css/templatemo.css') }}" />
  <link rel="stylesheet" href="{{ asset('user/css/custom.css') }}" />

  <!-- Template CSS Files -->
  <link rel="stylesheet" href={{ asset("css/bootstrap.min.css") }}>
  <link rel="stylesheet" href={{ asset("css/bootstrap-select.min.css") }}>
  <link rel="stylesheet" href={{ asset("css/line-awesome.css") }}>
  <link rel="stylesheet" href={{ asset("css/owl.carousel.min.css") }}>
  <link rel="stylesheet" href={{ asset("css/owl.theme.default.min.css") }}>
  <link rel="stylesheet" href={{ asset("css/jquery.fancybox.min.css") }}>
  <link rel="stylesheet" href={{ asset("css/daterangepicker.css") }}>
  <link rel="stylesheet" href={{ asset("css/animate.min.css") }}>
  <link rel="stylesheet" href={{ asset("css/animated-headline.css") }}>
  <link rel="stylesheet" href={{ asset("css/jquery-ui.css") }}>
  <link rel="stylesheet" href={{ asset("css/flag-icon.min.css") }}>
  <link rel="stylesheet" href={{ asset("css/style.css") }}>

  <!-- Load fonts style after rendering the layout styles -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap" />
  <link rel="stylesheet" href="{{ asset('user/css/fontawesome.min.css') }}" />
</head>

<body>

  <!-- start cssload-loader -->
<div class="preloader" id="preloader">
  <div class="loader">
      <svg class="spinner" viewBox="0 0 50 50">
          <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
      </svg>
  </div>
</div>
<!-- end cssload-loader -->
  <!-- Header -->
  @include('user.layouts.header')

  <!-- Content -->
  @yield('content')

  <!-- Footer -->
  @include('user.layouts.footer')

  @stack('before-scripts')
  <!-- Start Script -->
  <script src="{{ asset('user/js/jquery-1.11.0.min.js') }}"></script>
  <script src="{{ asset('user/js/jquery-migrate-1.2.1.min.js') }}"></script>
  <script src="{{ asset('user/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('user/js/templatemo.js') }}"></script>
  <script src="{{ asset('user/js/custom.js') }}"></script>
  <!-- End Script -->

  @stack('page-scripts')

  <!-- Template JS Files -->
<script src={{ asset("js/jquery-3.4.1.min.js") }}></script>
<script src={{ asset("js/jquery-ui.js") }}></script>
<script src={{ asset("js/popper.min.js") }}></script>
<script src={{ asset("js/bootstrap.min.js") }}></script>
<script src={{ asset("js/bootstrap-select.min.js") }}></script>
<script src={{ asset("js/moment.min.js") }}></script>
<script src={{ asset("js/daterangepicker.js") }}></script>
<script src={{ asset("js/owl.carousel.min.js") }}></script>
<script src={{ asset("js/jquery.fancybox.min.js") }}></script>
<script src={{ asset("js/jquery.countTo.min.js") }}></script>
<script src={{ asset("js/animated-headline.js") }}></script>
<script src={{ asset("js/jquery.sparkline.js") }}></script>
<script src={{ asset("js/dashboard.js") }}></script>
<script src={{ asset("js/chart.js") }}></script>
<script src={{ asset("js/chart.extension.js") }}></script>
<script src={{ asset("js/bar-chart.js") }}></script>
<script src={{ asset("js/line-chart.js") }}></script>
<script src={{ asset("js/jquery.ripples-min.js") }}></script>
<script src={{ asset("js/main.js") }}></script>
@stack('after-scripts')

</body>

</html>
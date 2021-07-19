<!DOCTYPE html>
<html lang="en">

<head>
  <title>{{ $title }} Dapoer Buk Ci </title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="apple-touch-icon" href="assets/img/apple-icon.png" />
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

  <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('user/css/templatemo.css') }}" />
  <link rel="stylesheet" href="{{ asset('user/css/custom.css') }}" />

  <!-- Load fonts style after rendering the layout styles -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap" />
  <link rel="stylesheet" href="{{ asset('user/css/fontawesome.min.css') }}" />
</head>

<body>
  <!-- Header -->
  @include('user.layouts.header')

  <!-- Content -->
  @yield('content')

  <!-- Footer -->
  @include('user.layouts.footer')

  <!-- Start Script -->
  <script src="user/js/jquery-1.11.0.min.js"></script>
  <script src="user/js/jquery-migrate-1.2.1.min.js"></script>
  <script src="user/js/bootstrap.bundle.min.js"></script>
  <script src="user/js/templatemo.js"></script>
  <script src="user/js/custom.js"></script>
  <!-- End Script -->
</body>

</html>
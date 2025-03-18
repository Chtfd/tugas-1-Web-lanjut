<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <link href="{{ asset('assets/css/adminlte.css') }}" rel="stylesheet">
</head>
<body>
  @include('layouts.header')

  <div class="content">
    @yield('content')
  </div>

  @include('layouts.footer')
  
  <script src="{{ asset('assets/js/adminlte.js') }}"></script>
</body>
</html>
<html>

<head>
  <title>Blog - @yield('title')</title>
  <style>
    html,
    body {
      background: #f5f5f5;
    }
  </style>
</head>

<body>
  @section('sidebar')
  This is the master sidebar.
  @show

  <div class="container">
    @yield('content')
  </div>
</body>

</html>
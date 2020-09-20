<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device.width, initial-scale=1">
        <title>Bigscreen</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
<body>

<div class="container">
  <div class="row">
    <div class="justify-content-center">
        @yield('content')
    </div>
  </div>  
</div>

 <script src="/js/bootstrap.min.js"></script>
</body>
</html>
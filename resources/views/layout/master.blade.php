<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device.width, initial-scale=1">
        <title>Bigscreen</title>
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
<body>

<div class="container">
  <div class="row justify-content-centerr">
        @yield('content')
  </div>  
</div>

 <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>
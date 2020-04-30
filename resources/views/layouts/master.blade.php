<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{URL::to('src/css/main.css')}}">
@yield('style')
 
    <title> @yield('title')</title>
</head>
<body>
    @include('includes.header')
    <div class="main">
      @yield("content")
    </div>
</body>
</html>
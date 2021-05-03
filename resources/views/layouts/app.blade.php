<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    
    <!-- Styles -->
  
   
</head>
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

<body>
    <div id="app">
          @include('partials.menu')
          @include('partials.flash')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
  
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>

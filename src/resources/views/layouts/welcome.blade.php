<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>

  @include('layouts.header')
  @include('layouts.search')

  <div class="main">

    <div class="main-content">
      @foreach ($places ?? '' as $place)
      <a href="http://127.0.0.1:8080/place_details/?id={{$place->id}}" class="item" >
        <div class="place_data">
          <div class="place_name">
            {{$place->place_name}}
          </div>
          <div class="place_address">
            {{$place->place_prefecture}}/{{$place->place_cat}}
          </div>
          <div class="place_budget">
            予算：{{$place->place_budget}}
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</body>

</html>
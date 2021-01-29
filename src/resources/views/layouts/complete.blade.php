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

@include('layouts.header')

  <body>
    <div class="complete">
      <a href="{{ route('top') }}">HOMEへ戻る</a>
      @if( Auth::check() )
      <a href="http://127.0.0.1:8080/home/?id={{ Auth::id() }}">マイページへ戻る</a>
      @endif
    </div>
  </body>

<!-- Scripts -->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script src="{{ secure_asset('js/app.js') }}" defer></script>
<script src="{{ secure_asset('js/custom.js') }}"></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ secure_asset('css/welcome.css') }}">

@include('layouts.header')

  <body>
    <div class="complete">
      <a href="{{ route('top') }}">HOMEへ戻る</a>
      @if( Auth::check() )
      <a href="http://dosomething.tokyo/home/?id={{ Auth::id() }}">マイページへ戻る</a>
      @endif
    </div>
  </body>

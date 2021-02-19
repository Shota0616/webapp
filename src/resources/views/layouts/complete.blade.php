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
<link href="css/app.css" rel="stylesheet">
<link rel="stylesheet" href="css/welcome.css">

@include('layouts.header')

  <body>
    <div class="complete">
      <a href="{{ route('top') }}">HOMEへ戻る</a>
      @if( Auth::check() )
      <a href="https://asonavi.tokyo/home/?id={{ Auth::id() }}">マイページへ戻る</a>
      @endif
    </div>
  </body>

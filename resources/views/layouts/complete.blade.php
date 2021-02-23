<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('layouts.head')
<body>
@include('layouts.header')
  <div class="complete">
    <a href="{{ route('top') }}">HOMEへ戻る</a>
    @if( Auth::check() )
    <a href="home/?id={{ Auth::id() }}">マイページへ戻る</a>
    @endif
  </div>
</body>
@include('layouts.footer')
</html>

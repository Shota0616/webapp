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


<div class="container home-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ダッシュボード') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
@foreach ($user ?? '' as $user)
                    {{ __('こんにちは！') }}{{$user->name}}さん！
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach



@foreach ($review ?? '' as $review)

<div class="user_review_all">
<div class="user_review_item">
  <a class="user_review_item_place" href="http://127.0.0.1:8080/place_details/?id={{$review->places_id}}">
    {{$review->review_place_name}}
  </a>
  <div class="evaluation{{$review->review_evaluation}}">
    <span>★</span>
    <span>★</span>
    <span>★</span>
    <span>★</span>
    <span>★</span>
  </div>
  <div class="user_review_item_date">
    {{$review->created_at->format('Y年m月d日')}}
  </div>
  <div class="user_review_item_title">
    {{$review->review_title}}
  </div>
  <div class="user_review_item_comment">
    {{$review->review_comment}}
  </div>
  <div class="user_review_edit">
    <a class="btn btn--orange" href="http://127.0.0.1:8080/review_edit/?id={{$review->id}}">
      編集
    </a>
    <a class="btn btn--orange" href="http://127.0.0.1:8080/review_delete/?id={{$review->id}}">
      削除
    </a>
  </div>
</div>
</div>
@endforeach
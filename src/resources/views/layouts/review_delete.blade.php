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

@foreach ($review ?? '' as $review)
<div class="delete_review">
  <div class="delete_review_item">
    <div class="review_item_place">
      {{$review->review_place_name}}
    </div>
    <div class="evaluation{{$review->review_evaluation}}">
      <span>★</span>
      <span>★</span>
      <span>★</span>
      <span>★</span>
      <span>★</span>
    </div>
    <div class="review_item_date">
      {{$review->created_at->format('Y年m月d日')}}
    </div>
    <div class="review_item_title">
      {{$review->review_title}}
    </div>
    <div class="review_item_comment">
      {{$review->review_comment}}
    </div>
  </div>
  <form class="" action="{{ route('review_remove') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$review->id}}">
    <input type="submit" name="" value="削除する" class="review_delete_btn">
  </form>
</div>
@endforeach

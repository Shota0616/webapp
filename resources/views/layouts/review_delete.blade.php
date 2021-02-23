<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('layouts.head')
<body>
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
</body>
@include('layouts.footer')
</html>

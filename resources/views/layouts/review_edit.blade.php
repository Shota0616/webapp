<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('layouts.head')
<body>
@include('layouts.header')

<div class="reviews">
  <div class="review_post_edit">
    <form action="{{ route('review_update') }}" method="POST">
      @csrf
      <p class="review_place_name">{{$review->review_place_name}}</p>
      <div class="form_group">
        <label for="review_evaluation" class="review_evaluation">{{ __('評価') }}</label>
        <div class="evaluation">
          <input id="review_evaluation5" type="radio" checked name="review_evaluation" value="5" />
          <label for="review_evaluation5">★</label>
          <input id="review_evaluation4" type="radio" name="review_evaluation" value="4" />
          <label for="review_evaluation4">★</label>
          <input id="review_evaluation3" type="radio" name="review_evaluation" value="3" />
          <label for="review_evaluation3">★</label>
          <input id="review_evaluation2" type="radio" name="review_evaluation" value="2" />
          <label for="review_evaluation2">★</label>
          <input id="review_evaluation1" type="radio" name="review_evaluation" value="1" />
          <label for="review_evaluation1">★</label>
        </div>
      </div>
      <div class="form_group">
        <label for="review_title" class="review_title">{{ __('タイトル') }}</label>
        <input id="review_title" type="text" name="review_title" value="{{$review->review_title}}">
      </div>
      <div class="form_group">
        <label for="review_comment" class="review_comment">{{ __('本文') }}</label>
        <textarea id="review_comment" name="review_comment" rows="8" cols="80" value="{{$review->review_comment}}">{{$review->review_comment}}</textarea>
      </div>
      <input type="hidden" name="id" value="{{$review->id}}">
      <input type="hidden" name="places_id" value="{{$review->places_id}}">
      <input type="hidden" name="review_place_name" value="{{$review->review_place_name}}">
      @auth
      <input type="hidden" name="users_id" value="{{ Auth::id() }}">
      <input type="hidden" name="review_user_name" value="{{Auth::user()->name}}">
      @endauth
      @guest
      <input type="hidden" name="users_id" value="1">
      <input type="hidden" name="review_user_name" value="ゲスト">
      @endguest
      <div class="review_post_btn">
        <button type="submit" class="btn--orange btn btn-primary review_post_btn_inner">{{ __('編集') }}</button>
      </div>
      </form>
  </div>
  </div>
  </body>
  @include('layouts.footer')
  </html>

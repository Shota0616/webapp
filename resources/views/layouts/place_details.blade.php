<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('layouts.head')
<body>

  @include('layouts.header')
  @include('layouts.search')

  @if(count($errors) > 0)
  　<ul class="errmsg">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
  @endif

  <div class="place_details">
    @foreach ($place ?? '' as $place)
    <table class="information">
      <p class="information_p">基本情報</p>
      <div class="place_edit">
        <a href="../place_edit?id={{$place->id}}" class="place_edit_btn">編集</a>
      </div>
      <tr class="information_row">
        <td>名称</td>
        <td>{{$place->place_name}}</td>
      </tr>
      <tr class="information_row">
        <td>ジャンル</td>
        <td>{{$place->place_cat}}</td>
      </tr>
      <tr class="information_row">
        <td>住所</td>
        <td>{{$place->place_prefecture}}{{$place->place_city}}{{$place->place_block}}</td>
      </tr>
      <tr class="information_row">
        <td>電話番号</td>
        <td>{{$place->place_tel}}</td>
      </tr>
      <tr class="information_row">
        <td>営業時間</td>
        <td>{{$place->place_busihours}}</td>
      </tr>
      <tr class="information_row">
        <td>定休日</td>
        <td>{{$place->place_holiday}}</td>
      </tr>
      <tr class="information_row">
        <td>予算</td>
        <td>{{$place->place_budget}}</td>
      </tr>
    </table>

  </div>

  <div class="reviews">
    <div class="review_header">
      <h3>レビュー</h3>
      <a href="" class="review_post_modal">レビューを書く</a>
    </div>
    <div class="review_post">
      <form action="{{ request()->fullUrl() }}" method="POST">
        @csrf
        <input type="hidden" name="review_place_name" value="{{$place->place_name}}">
        <a href="" class="review_modal_close">閉じる</a>
        <p class="review_place_name">{{$place->place_name}}</p>
        <div class="form_group">
          <label for="review_evaluation" class="review_evaluation">{{ __('評価') }}</label>
          <div class="evaluation">
            <input id="review_evaluation5" type="radio" name="review_evaluation" value="5" />
            <label for="review_evaluation5">★</label>
            <input id="review_evaluation4" type="radio" name="review_evaluation" value="4" />
            <label for="review_evaluation4">★</label>
            <input id="review_evaluation3" type="radio" name="review_evaluation" value="3" />
            <label for="review_evaluation3">★</label>
            <input id="review_evaluation2" type="radio" name="review_evaluation" value="2" />
            <label for="review_evaluation2">★</label>
            <input id="review_evaluation1" type="radio" name="review_evaluation" value="1" checked/>
            <label for="review_evaluation1">★</label>
          </div>
        </div>
        <div class="form_group">
          <label for="review_title" class="review_title">{{ __('タイトル') }}</label>
          <input id="review_title" type="text" name="review_title" value="{{ old('review_title') }}">
        </div>
        <div class="form_group">
          <label for="review_comment" class="review_comment">{{ __('本文') }}</label>
          <textarea id="review_comment" name="review_comment" rows="8" cols="80" value="{{ old('review_comment') }}"></textarea>
        </div>
        <input type="hidden" name="places_id" value="{{$place->id}}">
        @endforeach
        @auth
        <input type="hidden" name="users_id" value="{{ Auth::id() }}">
        <input type="hidden" name="review_user_name" value="{{Auth::user()->name}}">
        @endauth
        @guest
        <input type="hidden" name="users_id" value="1">
        <input type="hidden" name="review_user_name" value="ゲスト">
        @endguest
        <div class="review_post_btn">
          <button type="submit" class="btn btn-primary review_post_btn_inner">{{ __('投稿') }}</button>
        </div>
        </form>
    </div>
      <div class="review_all">
      @foreach ($review ?? '' as $review)
      <a class="review_item">
        <div class="review_user_name">
          {{$review->review_user_name}}<span>さんの口コミ</span>
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
      </a>
      @endforeach

      </div>
    </div>

</body>
@include('layouts.footer')
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('layouts.head')
<body>

  @include('layouts.header')
  @include('layouts.search')

  <div class="main">
    <div class="main-content">
      @foreach ($places ?? '' as $place)
      <a href="place_details?id={{$place->id}}" class="item" >
        <div class="place_data">
          <div class="place_name">
            {{$place->place_name}}
          </div>
          <div class="place_address">
            {{$place->place_prefecture}}
          </div>
          <div class="place_cat">
            {{$place->place_cat}}
          </div>
          <div class="place_budget">
            予算：{{$place->place_budget}}
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
  {{ $places->links('vendor.pagination.pagination_view') }}
</body>
@include('layouts.footer')
</html>

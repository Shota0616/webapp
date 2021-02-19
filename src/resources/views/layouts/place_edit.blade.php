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


  <body>
    @include('layouts.header')

    <script src="{{ secure_asset('/js/ajaxzip3.js') }}"></script>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 place_add">
                <div class="card">
                    <div class="card-header">{{ __('情報更新') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('place_update') }}">
                          @csrf
                          <input type="hidden" name="id" value="{{$place->id}}">

                          <div class="form-group row">
                            <label for="place_name" class="col-md-4 col-form-label text-md-right">{{ __('名称') }}</label>
                            <div class="col-md-6">
                              <input id="place_name" type="text" class="place_add_form" name="place_name" value="{{$place->place_name}}">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="place_furigana" class="col-md-4 col-form-label text-md-right">{{ __('フリガナ(全角カナ)') }}</label>
                            <div class="col-md-6">
                              <input id="place_furigana" type="text" class="place_add_form" name="place_furigana" value="{{$place->place_furigana}}">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="place_tel" class="col-md-4 col-form-label text-md-right">{{ __('電話番号') }}</label>
                            <div class="col-md-6">
                              <input id="place_tel" type="tel" maxlength="11" pattern="[\d]*" class="place_add_form" name="place_tel" value="{{$place->place_tel}}" placeholder="ハイフンなしで入力してください">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="place_cat" class="col-md-4 col-form-label text-md-right">{{ __('ジャンル') }}</label>
                            <div class="col-md-6">
                              <select id="place_cat" name="place_cat" type="text" class="place_add_form" value="{{$place->place_cat}}">
                                <option value="{{$place->place_cat}}">{{$place->place_cat}}</option>
                                <optgroup label="アウトドア">
                                  <option value="海水浴場">海水浴場</option>
                                  <option value="マリンスポーツ">マリンスポーツ</option>
                                  <option value="登山・ハイキング">登山・ハイキング</option>
                                  <option value="アスレチック">アスレチック</option>
                                  <option value="キャンプ">キャンプ</option>
                                  <option value="釣り">釣り</option>
                                  <option value="スキー">スキー</option>
                                  <option value="川">川</option>
                                  <option value="プール">プール</option>
                                  <option value="アウトドア/その他">アウトドア/その他</option>
                                <optgroup label="エンタメ">
                                  <option value="カラオケ">カラオケ</option>
                                  <option value="ゲームセンター">ゲームセンター</option>
                                  <option value="ボーリング">ボーリング</option>
                                  <option value="ビリヤード">ビリヤード</option>
                                  <option value="スポーツ観戦">スポーツ観戦</option>
                                  <option value="ライブハウス・クラブ">ライブハウス・クラブ</option>
                                  <option value="映画館">映画館</option>
                                  <option value="劇場">劇場</option>
                                  <option value="プラネタリウム">プラネタリウム</option>
                                  <option value="エンタメ/その他">エンタメ/その他</option>
                                <optgroup label="観光">
                                  <option value="温泉">温泉</option>
                                  <option value="食べ歩き">食べ歩き</option>
                                  <option value="ロープウェイ">ロープウェイ</option>
                                  <option value="工場見学">工場見学</option>
                                  <option value="花火大会">花火大会</option>
                                  <option value="神社・寺">神社・寺</option>
                                  <option value="城">城</option>
                                  <option value="観光/その他">観光/その他</option>
                                <optgroup label="遊園地・テーマパーク・公園">
                                  <option value="遊園地・テーマパーク">遊園地・テーマパーク</option>
                                  <option value="水族館">水族館</option>
                                  <option value="動物園">動物園</option>
                                  <option value="博物館・科学館">博物館・科学館</option>
                                  <option value="美術館">美術館</option>
                                  <option value="イルミネーション">イルミネーション</option>
                                  <option value="ショッピングモール・アウトレットモール">ショッピングモール・アウトレットモール</option>
                                  <option value="フラワーパーク">フラワーパーク</option>
                                  <option value="公園">公園</option>
                                  <option value="夜景スポット">夜景スポット</option>
                                  <option value="遊園地・テーマパーク・公園/その他">遊園地・テーマパーク・公園/その他</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="place_postcode" class="col-md-4 col-form-label text-md-right">{{ __('郵便番号') }}</label>
                            <div class="col-md-6">
                              <input id="place_postcode" type="text" name="place_postcode" size="10" class="place_add_form" value="{{$place->place_postcode}}" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','place_prefecture','place_city');">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="place_prefecture" class="col-md-4 col-form-label text-md-right">{{ __('都道府県') }}</label>
                            <div class="col-md-6">
                              <select id="place_prefecture" type="text" name="place_prefecture" class="place_add_form" value="{{$place->place_prefecture}}">
                                <option value="{{$place->place_prefecture}}">{{$place->place_prefecture}}</option>
                                <option value="">都道府県</option>
                                <option value="北海道">北海道</option>
                                <option value="青森県">青森県</option>
                                <option value="岩手県">岩手県</option>
                                <option value="宮城県">宮城県</option>
                                <option value="秋田県">秋田県</option>
                                <option value="山形県">山形県</option>
                                <option value="福島県">福島県</option>
                                <option value="茨城県">茨城県</option>
                                <option value="栃木県">栃木県</option>
                                <option value="群馬県">群馬県</option>
                                <option value="埼玉県">埼玉県</option>
                                <option value="千葉県">千葉県</option>
                                <option value="東京都">東京都</option>
                                <option value="神奈川県">神奈川県</option>
                                <option value="新潟県">新潟県</option>
                                <option value="富山県">富山県</option>
                                <option value="石川県">石川県</option>
                                <option value="福井県">福井県</option>
                                <option value="山梨県">山梨県</option>
                                <option value="長野県">長野県</option>
                                <option value="岐阜県">岐阜県</option>
                                <option value="静岡県">静岡県</option>
                                <option value="愛知県">愛知県</option>
                                <option value="三重県">三重県</option>
                                <option value="滋賀県">滋賀県</option>
                                <option value="京都府">京都府</option>
                                <option value="大阪府">大阪府</option>
                                <option value="兵庫県">兵庫県</option>
                                <option value="奈良県">奈良県</option>
                                <option value="和歌山県">和歌山県</option>
                                <option value="鳥取県">鳥取県</option>
                                <option value="島根県">島根県</option>
                                <option value="岡山県">岡山県</option>
                                <option value="広島県">広島県</option>
                                <option value="山口県">山口県</option>
                                <option value="徳島県">徳島県</option>
                                <option value="香川県">香川県</option>
                                <option value="愛媛県">愛媛県</option>
                                <option value="高知県">高知県</option>
                                <option value="福岡県">福岡県</option>
                                <option value="佐賀県">佐賀県</option>
                                <option value="長崎県">長崎県</option>
                                <option value="熊本県">熊本県</option>
                                <option value="大分県">大分県</option>
                                <option value="宮崎県">宮崎県</option>
                                <option value="鹿児島県">鹿児島県</option>
                                <option value="沖縄県">沖縄県</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="place_city" class="col-md-4 col-form-label text-md-right">{{ __('市区町村') }}</label>
                            <div class="col-md-6">
                              <input id="place_city" type="text" name="place_city" size="60" class="place_add_form" value="{{$place->place_city}}" maxlength="8">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="place_block" class="col-md-4 col-form-label text-md-right">{{ __('以降の住所') }}</label>
                            <div class="col-md-6">
                              <input id="place_block" type="text" name="place_block" class="place_add_form" value="{{$place->place_block}}">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="place_busihours" class="col-md-4 col-form-label text-md-right">{{ __('営業時間') }}</label>
                            <div class="col-md-6">
                              <textarea id="place_busihours" type="text" name="place_busihours" class="place_add_form" value="{{$place->place_busihours}}" rows="8" cols="80" placeholder="例     [月〜金]10:00〜21:00
         [土・日・祝]9:00〜22:00">{{$place->place_busihours}}</textarea>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="place_holiday" class="col-md-4 col-form-label text-md-right">{{ __('定休日') }}</label>
                            <div class="col-md-6">
                              <input id="place_holiday" type="text" name="place_holiday" class="place_add_form" value="{{$place->place_holiday}}" placeholder="例     不定休">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="place_budget" class="col-md-4 col-form-label text-md-right">{{ __('予算') }}</label>
                            <div class="col-md-6">
                              <select id="place_budget" type="text" name="place_budget" class="place_add_form" value="{{$place->place_budget}}">
                                <option value="">選択してください</option>
                                <option value="〜¥999">〜¥999</option>
                                <option value="¥1,000〜¥1,999">¥1,000〜¥1,999</option>
                                <option value="¥2,000〜¥2,999">¥2,000〜¥2,999</option>
                                <option value="¥3,000〜¥3,999">¥3,000〜¥3,999</option>
                                <option value="¥4,000〜¥4,999">¥4,000〜¥4,999</option>
                                <option value="¥5,000〜¥5,999">¥5,000〜¥5,999</option>
                                <option value="¥6,000〜¥6,999">¥6,000〜¥6,999</option>
                                <option value="¥7,000〜¥7,999">¥7,000〜¥7,999</option>
                                <option value="¥8,000〜¥8,999">¥8,000〜¥8,999</option>
                                <option value="¥9,000〜¥9,999">¥9,000〜¥9,999</option>
                                <option value="¥10,000〜¥14,999">¥10,000〜¥14,999</option>
                                <option value="¥15,000〜¥19,999">¥15,000〜¥19,999</option>
                                <option value="¥20,000〜¥29,999">¥20,000〜¥29,999</option>
                                <option value="¥30,000〜¥39,999">¥30,000〜¥39,999</option>
                                <option value="¥40,000〜¥49,999">¥40,000〜¥49,999</option>
                                <option value="¥50,000〜¥59,999">¥50,000〜¥59,999</option>
                                <option value="¥60,000〜¥79,999">¥60,000〜¥79,999</option>
                                <option value="¥80,000〜¥99,999">¥80,000〜¥99,999</option>
                                <option value="¥100,000〜">¥100,000〜</option>
                              </select>
                            </div>
                          </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('登録') }}
                                  </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>

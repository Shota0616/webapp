@section('search')
<div class="content">
  <div class="top">
    <div class="search">
      <form class="" action="{{ route('search') }}" method="GET">
        @csrf

          <input type="text" name="keyword" placeholder="キーワードを入力" class="search_keyword">

            <select type="text" name="prefecture" class="search_prefecture">
              <option value="" disabled selected style='display:none;'>都道府県</option>
              <optgroup label="北海道地方">
                <option value="北海道">北海道</option>
              <optgroup label="東北地方">
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
              <optgroup label="関東地方">
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
              <optgroup label="中部地方">
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
              <optgroup label="関西地方">
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
              <optgroup label="中国地方">
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
              <optgroup label="四国地方">
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
              <optgroup label="九州地方・沖縄地方">
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
            </select>
            <select name="category" type="text" class="search_cat">
              <option value="" disabled selected style='display:none;'>ジャンル</option>
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

        <button type="submit" class="search_btn">検索</button>
      </form>
    </div>
    <div class="addbtn">
      <button type="button" name="button"><a href="{{ route('place_add') }}">地点登録</a></button>
    </div>
  </div>
</div>
@show

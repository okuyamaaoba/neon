<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
<meta charset="UTF-8">
<title>シーシャ＆カジノBar Neon【神戸三ノ宮店】</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/fixed.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
</head>

<body>
  <section class="contact">
      <div class="input_form">
          <h2>　予約変更　</h2>
          <div class="wrapper">
            <form action="{{ route('reseveChange') }}" method="post">
                  @csrf
                  <p>{{ $user->kana }}　さん</p>
                  <input type="hidden" value="{{ $user->kana }}" name="kana">
                  <input type="hidden" value="{{ $user->mail }}" name="mail">
                  <input type="hidden" value="{{ $user->password }}" name="password">

                  <p>日時<span>*</span></p>

                  <input id="date" name="date" autocomplete="off">

                  @error('date')
                    <p class="error-msg">{{ $errors->first('date') }}</p>
                  @enderror

                  <p>時間<span>*</span></p>
                  @error('time')
                    <p class="error-msg">{{ $errors->first('time') }}</p>
                  @enderror


                  <select name="time" id="time">
                  @foreach ($times as $time)
                    echo '<option value="{{ $time->hour }}">{{ $time->hour }}</option>';
                  @endforeach

                  </select>

                  <p>人数<span>*</span></p>

                  @error('people')
                    <p class="error-msg">{{ $errors->first('people') }}</p>
                  @enderror

                  <select name="people" id="people">
                    <option value="未定">未定</option>
                    <option value="1人">1人</option>
                    <option value="2人">2人</option>
                    <option value="3人">3人</option>
                    <option value="4人">4人</option>
                    <option value="5人">5人</option>
                    <option value="6人">6人</option>
                    <option value="7人">7人</option>
                    <option value="8人">8人</option>
                    <option value="9人">9人</option>
                    <option value="10人">10人〜</option>
                  </select>


                  <p>メニュー<span>*</span></p>
                  @error('menu')
                    <p class="error-msg">{{ $errors->first('menu') }}</p>
                  @enderror

                  <select name="menu" id="menu">
                  @foreach ($menus as $menu)
                    echo '<option value="{{ $menu->menu }}">{{ $menu->menu }}</option>';
                  @endforeach

                  </select>

                  <div class="btn_wrapper">
                    <button type="submit" class="btn" name="submit" id="submit" onclick="return confirm('変更してもよろしいですか？')">予約変更する</button>
                  </div>
              </form>
              <script src="/js/main.js"></script>
        </div>
      </div>
  </section>
</body>
</html>

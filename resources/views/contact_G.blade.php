<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
<meta charset="UTF-8">
<title>シーシャ＆カジノBar Neon【神戸三ノ宮店】</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/fixed.css">
<link rel="stylesheet" href="/css/style.css">

<!-- <link rel="stylesheet" href="/css/style.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
</head>

<body>
  @include('header')
  <!-- <table class="table table-striped">
      <tr id="all_show_result">
          <th>営業不可日</th>
      </tr>
  </table> -->

    <section class="contact">
        <div class="input_form">
            <h2>　来店予約　</h2>
            <div class="wrapper">
              <form action="{{ route('confirm_G') }}" method="post" name="contact_form">

                    @csrf

                    <p>フルネーム<span>*</span>　※カタカナ</p>
                    @error('kana')
                      <p class="error-msg">{{ $errors->first('kana') }}</p>
                    @enderror
                    <input type="text" class="input_field" placeholder="ヤマダタロウ" name="kana"
                    id="kana" value="{{ old('kana', session('inputs.kana')) }}">

                    <p>メールアドレス<span>*</span></p>
                    @error('mail')
                      <p class="error-msg">{{ $errors->first('mail') }}</p>
                    @enderror
                    <input type="text" class="input_field" placeholder="test@test.co.jp" name="mail"
                    id="mail" value="{{ old('mail', session('inputs.mail')) }}">

                    <p>日時<span>*</span></p>

                    <input id="date" name="date" value="{{ old('date', session('inputs.date')) }}">

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

                    <div class="buttons">
                        <button type="submit" class="send" name="submit" id="submit" onclick="return contactCheck()">予約確認へ</button>
                    </div>
                </form>
                <script src="/js/main.js"></script>

          </div>
        </div>
    </section>

    @include('footer')
</body>

</html>

<script>

</script>

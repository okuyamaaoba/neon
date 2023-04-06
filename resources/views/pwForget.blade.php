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
  <section class="contact">
      <div class="input_form">
          <h2>　パスワード再設定　</h2>
          <p>登録したメールアドレス・生年月日を入力してください</p>

          <div class="wrapper">
            <form action="{{ route('pwReset') }}" method="post" name="pwReset">
              @if($signNG !== null)
                <p class="error-msg">メールアドレスまたは生年月日が誤っています</p>
              @endif

              @csrf
                  <p>メールアドレス</p>
                  @error('mail')
                    <p class="error-msg">{{ $errors->first('mail') }}</p>
                  @enderror
                  <input type="text" class="input_field" name="mail" autocomplete="off"
                  id="mail">

                  <p>生年月日 (例：19980101)</p>
                  @error('birth')
                    <p class="error-msg">{{ $errors->first('birth') }}</p>
                  @enderror
                  <input type="text" class="input_field" name="birth" autocomplete="off"
                  id="birth">
                  <div class="btn_wrapper">
                    <button type="submit" class="btn pwreset" name="submit">パスワードリセット画面へ</button>
                  </div>
                </form>
            </div>



      </div>

  </section>
  @include('footer')

  </body>
</html>

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
</head>

<body>
  @include('header')
  <section class="contact">
      <div class="input_form">
          <h2>　パスワード再設定　</h2>
          <p>登録したメールアドレス・生年月日を入力してください</p>

          <div class="wrapper">
            <form action="{{ route('pwReset') }}" method="post">
                  @csrf
                  <p>メールアドレス</p>
                  @error('mail')
                    <p class="error-msg">{{ $errors->first('mail') }}</p>
                  @enderror
                  <input type="text" class="input_field" name="mail"
                  id="mail" value="{{ old('mail', session('inputs.mail')) }}">

                  <p>生年月日 (例：19980101)</p>
                  @error('birth')
                    <p class="error-msg">{{ $errors->first('birth') }}</p>
                  @enderror
                  <input type="text" class="input_field" name="birth"
                  id="birth" value="{{ old('birth', session('inputs.birth')) }}">

                  <button type="submit" class="send pwreset" name="submit">パスワードリセット画面へ</button>
                </form>
            </div>



      </div>

  </section>
  @include('footer')

  </body>
</html>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
<meta charset="UTF-8">
<title>シーシャ＆カジノBar Neon【神戸三ノ宮店】</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/fixed.css">
<link rel="stylesheet" href="/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  @include('header')
  <section class="contact">
      <div class="input_form">
          <h2>　ログインしてください　</h2>
          <div class="wrapper">
            <form action="{{ route('membership') }}" method="post" name="sign_form">

                  @csrf

                  @if($signNG !== null)
                    <p class="error-msg">メールアドレスまたはパスワードが誤っています</p>
                  @endif

                  <p>メールアドレス</p>
                  @error('mail')
                    <p class="error-msg">{{ $errors->first('mail') }}</p>
                  @enderror
                  <input type="text" class="input_field" name="mail"
                  id="mail" value="{{ old('mail', session('inputs.mail')) }}" autocomplete="off">

                  <p>パスワード</p>
                  @error('password')
                    <p class="error-msg">{{ $errors->first('password') }}</p>
                  @enderror


                  <input type="password" class="input_field" name="password"
                  id="password" value="{{ old('password', session('inputs.password')) }}">

                  <!-- <input type="hidden" class="total_point" name="total_point" value="0"> -->
                  <div class="btn_wrapper">
                    <button type="submit" class="btn" name="signin" onclick="return membership()">会員ページへ</button>
                  </div>
              </form>

            </div>
      <div class="other">
          <a class="border back" href="{{ route('pwForget') }}">パスワードをお忘れの方</a>

          <a class="border back" href="{{ route('signUp') }}">新規登録はこちら</a></p>
      </div>
  </section>
  @include('footer')
  </body>
  <script src="js/main.js"></script>

</html>

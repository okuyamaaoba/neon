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
        <section class="contact">
              <div class="input_form">
                  <h2>　ログインしてください　</h2>
                  <div class="wrapper">
                    <form action="{{ route('orner') }}" method="post" name="orner">

                          @csrf
                          <p>管理者ID</p>
                          @error('mail')
                            <p class="error-msg">{{ $errors->first('mail') }}</p>
                          @enderror
                          <input type="text" class="input_field" placeholder="test@test.co.jp" name="mail"
                          id="mail" value="{{ old('mail', session('inputs.mail')) }}">

                          <p>管理者パスワード</p>
                          @error('password')
                            <p class="error-msg">{{ $errors->first('password') }}</p>
                          @enderror
                          <input type="password" class="input_field" placeholder="パスワード" name="password"
                          id="password" value="{{ old('password', session('inputs.password')) }}">

                          <div class="btn_wrapper">
                            <button type="submit" class="btn" name="submit" id="orner" onclick="return orner()">管理者ページへ</button>
                          </div>
                      </form>
                      <script src="js/main.js"></script>
                    </div>
              </div>
          </section>

  </body>
</html>

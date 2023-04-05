<?php

// ランダムな英数字の生成
$random = '1234567890ABCDEFGHIJKLMNOPUQRSTUVWXYZ';
$member_code = substr(
  str_shuffle($random), 2, 5);
?>
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
        <h2>　新規会員登録　</h2>
          <div class="wrapper">
              <form action="{{ route('signConfirm') }}" method="post" name="signup">

                @csrf

              <p>名前（フルネーム）</p>
              @error('kana')
                <p class="error-msg">{{ $errors->first('kana') }}</p>
              @enderror
              <input class="input_field" placeholder="" name="kana" id="kana"
              value="{{ old('kana', session('inputs.kana')) }}">


              <p>メールアドレス</p>
              @error('mail')
                <p class="error-msg">{{ $errors->first('mail') }}</p>
              @enderror
              <input class="input_field" placeholder="" name="mail" id="mail"
              value="{{ old('mail', session('inputs.mail')) }}">

              <p>生年月日<span>*</span>(例：19980101)</p>
              @error('birth')
                <p class="error-msg">{{ $errors->first('birth') }}</p>
              @enderror
              <input type="text" class="input_field" placeholder="" name="birth"
              id="birth" value="{{ old('birth', session('inputs.birth')) }}">

              <p>パスワード<span>*</span></p>
              @error('password1')
                <p class="error-msg">{{ $errors->first('password1') }}</p>
              @enderror
              <input type="password" class="input_field" name="password1"
              id="password1" value="{{ old('password1', session('inputs.password1')) }}">

              <p>パスワード(確認用)<span>*</span></p>
              @error('password')
                <p class="error-msg">{{ $errors->first('password') }}</p>
              @enderror
              <input type="password" class="input_field" name="password"
              id="password" value="{{ old('password', session('inputs.password')) }}">


              <input type="hidden" name="member_code" id="member_code" value="{{ $member_code }}">

              <div class="btn_wrapper">
                <button type="submit" class="btn" name="action" id="submit" onclick="return formCheck()">新規登録</button>
              </div>
            </form>
            <script src="/js/main.js"></script>

      </div>
    </div>
  </section>
  @include('footer')
  </body>
</html>

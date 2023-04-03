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
  <section class="contact">
      <div class="input_form">
          <h2>　パスワードを再設定します　</h2>
          <p>新しいパスワードをご入力ください</p>

          <div class="wrapper">
            <form action="{{ route('pwUpdate') }}" method="post" name="pw">
                  @csrf
                  <p>パスワード<span>*</span></p>
                  @error('password1')
                    <p class="error-msg">{{ $errors->first('password1') }}</p>
                  @enderror
                  <input type="password" class="input_field" name="password1"　id="password1"
                  value="{{ old('password1', session('inputs.password1')) }}">

                  <p>パスワード(確認用)<span>*</span></p>
                  @error('password')
                    <p class="error-msg">{{ $errors->first('password') }}</p>
                  @enderror
                  <input type="password" class="input_field" name="password"
                  id="password" value="{{ old('password', session('inputs.password')) }}">


                  <input type="hidden" value="{{ $user->mail }}" name="mail">

                  <button type="submit" class="send" name="submit" onclick="return pwReset()">パスワード変更</button>
              </form>
            </div>
      </div>
      <script src="js/main.js"></script>
  </section>

</body>

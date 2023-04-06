<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
<meta charset="UTF-8">
<title>シーシャ＆カジノBar Neon【神戸三ノ宮店】</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/fixed.css">
<link rel="stylesheet" href="/css/style.css">
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
          <h2>　パスワードを再設定します　</h2>
          <p>新しいパスワードをご入力ください</p>

          <div class="wrapper">
            <form action="{{ route('pwUpdate') }}" method="post">
              @if($resetNG !== null)
                <p class="error-msg">入力したパスワードが一致しません</p>
              @endif


              @csrf

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

                  <input type="hidden" value="{{ $user->mail }}" name="mail">

                  <div class="btn_wrapper">
                    <button type="submit" class="btn" name="submit" id="submit">パスワード変更</button>
                  </div>
                </form>
            </div>
      </div>
      <script src="js/main.js"></script>
  </section>
  @include('footer')
</body>
</html>

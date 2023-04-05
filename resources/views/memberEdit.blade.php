

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
  <section class="member_data">
    <div class="member_wrapper">
    <form action="{{ route('memberUpdate') }}" method="post">
    @csrf
    <h2>　会員情報編集画面　</h2>

    <p>フルネーム　※カタカナ<span>*</span></p>
    @error('kana')
      <p class="error-msg">{{ $errors->first('kana') }}</p>
    @enderror
    <input type="text" class="input_field" name="kana" placeholder="{{ $value->kana }}"
    id="kana" value="{{ $value->kana }}">


    <p>メールアドレス<span>*</span></p>
    @error('mail')
      <p class="error-msg">{{ $errors->first('mail') }}</p>
    @enderror
    <input type="text" class="input_field" name="mail" placeholder="{{ $value->mail }}"
    id="mail" value="{{ $value->mail }}">


    <p>生年月日<span>*</span></p>
    @error('birth')
      <p class="error-msg">{{ $errors->first('birth') }}</p>
    @enderror
    <input type="text" class="input_field" name="birth" placeholder="{{ $value->birth }}"
    id="birth" value="{{ $value->birth }}">


    <p>パスワード<span>*</span></p>
    @error('password')
      <p class="error-msg">{{ $errors->first('password') }}</p>
    @enderror
    <input type="password" class="input_field" placeholder="xxxxxxxxxx"
    id="password" value="{{ $value->password }}">

    <p>パスワード(確認用)<span>*</span></p>
    @error('kana')
      <p class="error-msg">{{ $errors->first('password') }}</p>
    @enderror
    <input type="password" class="input_field" name="password" placeholder="xxxxxxxxxx"
    id="password" value="{{ $value->password }}">

    <input type="hidden" name="id" value="{{ $value->id }}">
    <div class="btn_wrapper">
     <button type="submit" id="submit" class="btn" name="update">更新</button>
    </div>

  </form>
</div>
</section>
</body>
</html>

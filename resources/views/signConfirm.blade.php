
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

    <section class="confirm">
        <div class="input_form">
          <h2>　会員内容　確認　</h2>
                <div class="wrapper">
                    <form action="{{ route('sendSign') }}" method="POST">
                        @csrf

                        <h3>フリガナ</h3>
                        <p>{{ $inputs['kana'] }}</p>
                        <input name="kana" value="{{ $inputs['kana'] }}" type="hidden">

                        <h3>メールアドレス</h3>
                        <p>{{ $inputs['mail'] }}</p>
                        <input name="mail" value="{{ $inputs['mail'] }}" type="hidden">

                        <h3>生年月日</h3>
                        <p>{{ $inputs['birth'] }}</p>
                        <input name="birth" value="{{ $inputs['birth'] }}" type="hidden">

                        <h3>パスワード</h3>
                        <p>非表示</p>
                        <input name="password" value="{{ $inputs['password'] }}" type="hidden">

                        <input name="member_code" value="{{ $inputs['member_code'] }}" type="hidden">



                        <div class="btn_wrapper">
                            <button type="submit" class="btn" name="action">会員登録する</button>
                            <button type="submit" class="btn" name="action"><a href="{{ route('signUp') }}">修正</a></button>
                        </div>
                      </form>

                        <!-- <div class="buttons">
                            <button type="submit" class="send" name="action"><a href="{{ route('signUp') }}">修正</a></button>
                        </div> -->

                    </form>
                </div>
            </div>
    </section>

 @include('footer')

 <script src="/js/main.js"></script>
</body>
</html>

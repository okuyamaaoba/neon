<!-- ・valueの値は全変更すること！
・form actionのsendは多分ルーティングのところ確認して！ -->

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
          <h2>　予約内容　確認　</h2>
                <div class="wrapper">

                    <form action="{{ route('send') }}" method="POST">
                        @csrf
                        <h3>フリガナ</h3>
                        <p>{{ $inputs['kana'] }}</p>
                        <input name="kana" value="{{ $inputs['kana'] }}"type="hidden">

                        <h3>メールアドレス</h3>
                        <p>{{ $inputs['mail'] }}</p>
                        <input name="mail" value="{{ $inputs['mail'] }}"type="hidden">

                        <h3>日時</h3>
                        <p>{{ $inputs['date'] }}</p>
                        <input name="date" value="{{ $inputs['date'] }}"type="hidden">

                        <h3>時間</h3>
                        <p>{{ $inputs['time'] }}</p>
                        <input name="time" value="{{ $inputs['time'] }}"type="hidden">

                        <h3>人数</h3>
                        <p>{{ $inputs['people'] }}</p>
                        <input name="people" value="{{ $inputs['people'] }}"type="hidden">

                        <h3>メニュー</h3>
                        <p>{{ $inputs['menu'] }}</p>
                        <input name="menu" value="{{ $inputs['menu'] }}" type="hidden">

                        <div class="btn_wrapper">

                            <button type="submit" class="btn" name="action">予約する</button>
                            <button type="submit" class="btn" name="action"><a href="{{ route('contact_G') }}">修正</a></button>

                        </div>
                      </form>

                        <!-- <div class="buttons">
                            <button type="submit" class="send" name="action"><a href="{{ route('contact_G') }}">修正</a></button>
                        </div> -->

                </div>
            </div>
    </section>

 @include('footer')

 <!-- <script src="/js/main.js"></script> -->
</body>
</html>

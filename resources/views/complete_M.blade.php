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

    <section class="complete">
        <div class="input_form">
          <h2>　予約内容が完了しました　</h2>
              <form method="post" action="{{ route('membership') }}">
                @csrf
                <div class="wrapper">
                  <p>ご予約ありがとうございます。</p>
                  <input type="hidden" value="{{ $mail }}" name="mail" id="mail">
                  <input type="hidden" value="{{ $password }}" name="password" id="password">

                  <button type="submit" class="send" name="submit">会員ページへ</button>
                  </div>
              </form>
          </div>
          <div>
            <a class="border" href="{{ route('top') }}">トップへ戻る</a>
          </div>
    </section>

    @include('footer')

    <script src="/js/main.js"></script>
</body>
</html>

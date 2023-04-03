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
          <h2>　パスワードを再設定しました　</h2>
                <div class="wrapper">
                  <div>
                    <form method="post" action="{{ route('membership') }}">
                      @csrf
                      <input type="hidden" value="{{ $mail }}" name="mail" id="mail">
                    <button type="submit" class="send" name="submit">会員ページへ</button>
                  </form>
                  </div>
                </div>
            </div>
    </section>

    @include('footer')

    <script src="/js/main.js"></script>
</body>
</html>

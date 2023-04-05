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
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
</head>

<body>
  @include('header')
    <section class="complete">
        <div class="input_form">
          <h2>　パスワードを再設定しました　</h2>
                <div class="wrapper">
                  <div>
                    <form method="post" action="{{ route('backMembership') }}">
                      @csrf
                      <input type="hidden" value="{{ $mail }}" name="mail" id="mail">
                      <div class="btn_wrapper">
                        <button type="submit" class="btn" name="submit">会員ページへ</button>
                      </div>
                  </form>
                  </div>
                </div>
            </div>
    </section>

    @include('footer')

    <script src="/js/main.js"></script>
</body>
</html>

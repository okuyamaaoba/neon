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
    <section class="complete">
        <div class="input_form">
                <h2>更新完了</h2>
                <div class="wrapper">
                  <div>
                    <form method="post" action="{{ route('membership') }}">
                      @csrf
                      <p>会員情報を更新しました。</p>
                      <input type="hidden" value="{{ $mail }}" name="mail" id="mail">
                      <input type="hidden" value="{{ $password }}" name="password" id="password">
                      <div class="btn_wrapper">
                        <button type="submit" class="btn" name="submit">会員ページへ</button>
                      </div>
                  </form>
                  </div>
                </div>
            </div>
    </section>


</body>
</html>

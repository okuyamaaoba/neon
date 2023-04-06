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
  <section>
    <div class="orner-wrapper">
      <h1>WELCOME TO MYPAGE</h1>
    </div>
  </section>
        <section class="member_top">
          <li class="point">
            <h4>現在のポイント数</h4>
            <p>{{ $total_point }}PT</p>
          </li>
          <li class="member_code">
            <h4>会員コード</h4>
            <p>{{ $user->member_code }}</p>
          </li>
          <li class="reserve_member">
            <h4>予約情報</h4>

            @if($contact !== null)
            <form method="post">
              @csrf
              <h5>日付：{{ $contact->date }}</h5>
              <input type="hidden" value="{{ $contact->date }}" name="kana">

              <h5>時間：{{ $contact->time }}</h5>
              <input type="hidden" value="{{ $contact->time }}" name="time">

              <h5>人数：{{ $contact->people }}</h5>
              <input type="hidden" value="{{ $contact->people }}" name="people">

              <h5>メニュー：</br>{{ $contact->menu }}</h5>
              <input type="hidden" value="{{ $contact->menu }}" name="menu">

              <input type="hidden" value="{{ $user->mail }}" name="mail">
              <input type="hidden" value="{{ $user->id }}" name="id">


              <div class="btn1_wrapper">
                <button type="submit" class="btn1" formaction="{{ route('reserveEdit') }}" >予約変更</button>
                <button type="submit" class="btn1" formaction="{{ route('delete') }}" onclick="return confirm('予約をキャンセルしますか？')">予約キャンセル</button>
              </div>

            </form>
            @elseif($contact == null)
            <p>予約なし</p>
        @endif
          </li>
        </section>

        <section class="member_data">
          <div class="member_wrapper">
            <form method="post">
            @csrf
            <h2>ユーザー情報</h2>

              <h3>名前</h3>
              <p>{{ $user->kana }}</p>
              <input type="hidden" value="{{ $user->kana }}" name="kana">

              <h3>メールアドレス</h3>
              <p>{{ $user->mail }}</p>
              <input type="hidden" value="{{ $user->mail }}" name="mail">


              <h3>生年月日</h3>
              <p>{{ $user->birth }}</p>
              <input type="hidden" value="{{ $user->birth }}" name="birth">
              <h3>パスワード</h3>
              <p>非表示</p>
              <input type="hidden" value="{{ $user->password }}" name="password">

              <!-- <input type="hidden" value="{{ $total_point }}" name="password"> -->

                 <div class="btn_wrapper">
                     <button type="submit" class="btn" formaction="{{ route('memberEdit') }}" >編集する</button>
                     <button type="submit" class="btn" formaction="{{ route('contact_M') }}" >予約する</button>
                 </div>
              </form>


              <div class="complete-other logout">
                <a class="border back" href="{{ route('top') }}"> ログアウトしてTOPへ </a>
              </div>
            </div>
            <script src="/js/main.js"></script>
          </section>


  </body>
</html>

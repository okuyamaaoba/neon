<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"　lang="ja">
<head>
<meta charset="UTF-8">
<title>シーシャ＆カジノBar Neon【神戸三ノ宮店】</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/fixed.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

</head>
<body>
  <!-- <div class="icon">
    <i class="fa fa-glass-martini-alt neon_icon"></i>
  </div> -->
  @include('header')
  <section class="lead-body">
    <div class="lead-wrapper">
      <h1>神戸１映える！<br>シーシャ＆アミューズメントBAR</h1>

      <div class="image-wrapper">
        <h2>＃カラオケ付きVIPルーム </br>
            ＃女子会/二次会/誕生日貸切パーティー予約OK</br>
            ＃店内インスタ映えスポットあり</h2>
          <p>
          神戸三ノ宮で遊ぶならNeonにお任せ下さい！</br>

          シーシャだけ吸いたい…  カジノだけ遊びたい…  両方してみたい… お酒だけ飲みたい…など</br>

          カラオケ付きVIPルーム・テーブルゲームでも遊べる神戸最大のアミューズメントBAR</p>

        </div>

    </div>
  </section>
  <section class="photo-body">

    <div class="slider">
      <img src="img/slide1.jpg" alt="">
      <img src="img/slide2.jpg" alt="">
      <img src="img/slide3.jpg" alt="">
      <img src="img/slide4.jpg" alt="">
    </div>
  </section>

  <section class="shisha-body">
    <div class="shisha-wrapper">
      <h1>シーシャ</h1>
      <li>フレーバーは人気のものからちょっと変わったものまで多数取り揃えています</li>
      <li>  初めての方でも吸いやすいノンニコチンも!</li>
        </br>
        <li>メニュー以外でも「こんな味吸ってみたい」等があれば</li>
        <li>お客様のお好みに合わせてお作り可能です</li>
    </div>
  </section>

  <section class="casino-body">
    <div class="casino-wrapper">
      <h1>カジノ</h1>
      <li>当店はアミューズメントカジノですが、 実際のカジノで使われる</li>
        <li>ルーレット台を置いているので本格気分を味わえること間違いなし！</li>
        <li>・ルーレット</li>
        <li>・ポーカー</li>
        <li>・ブラックジャック</li>
        <li>で遊んでいただけます</li>

  <li>初めての方もスタッフがルール説明をしっかりさせて頂き練習も可能ですので安心してお越しください</li>
    </div>
  </section>

  <section class="menu-body">
    <div class="menu-wrapper">
      <h1>料金・コースについて</h1>
      <li class="border">〈飲み放題メニュー〉〜2H</li>
          <li>  男性 3000円／女性 2000円</li>
          <li>  学生はそれぞれ500円OFF  ※学生証の提示が必要になります</li>
        </br>
        <li class="border">〈フロア貸切〉〜2H<li>
            <li> 飲み放題付きパック・3000円/人 ※30-70人まで</li>
            <li> </li>
            <li> ※貸切予約希望の方は要DM</li>
            <li> サプライズの相談やマイク等の貸出可能ですのでお気軽にお問い合わせください！</li>
        </br>
        <li class="border">〈ビュッフェ＆飲み放題〉〜2H</li>
            <li> 5000円/人</li>
        </br>
        <li class="border">〈VIPルーム〉〜2H ※2-10人まで</li>
            <li> チャージ料：10000円</li>
            <li> </li>
            <li> 平日の火～木曜日はVIPルームのチャージ料金が半額！</li>
            <li> 完全個室でシーシャやカラオケを楽しみたい方や</li>
            <li> 誕生日のサプライズにおすすめです！</li>
    </div>
  </section>

    @include('footer')
    <!-- <script src="/js/main.js"></script> -->
</body>
</html>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
<meta charset="UTF-8">
<title>シーシャ＆カジノBar Neon【神戸三ノ宮店】</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/fixed.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script></head>
<body>
<section>
  <div class="orner-wrapper">
    <h1>ADMIN　PAGE</h1>
  </div>
</section>
<section class="contact">
<div class="ajax">
 <div class="ajax_wrapper">
   <h2>予約簡単検索</h2>
        <div class="reserch-wrapper">
              <div>
                <input type="text" id="date" name="date" placeholder="日付を選択">
              </div>
              <div>
                  <button type="button" id="serch_reserve" class="btn styled">検索</button>
              </div>
        </div>
        <div class="result_wrapper">
              <div id="result_reserve" name="name"></div>
              <div id="not_result" name="name"></div>

        </div>
  </div>

  <div class="ajax_wrapper">
    <h2>ポイント付与</h2>
    <div>会員コード:(テストコードKHPUR,5UPIQ,Y8JSD)</div>

        <div class="reserch-wrapper">
              <div class="search_bar">
                 <i class="fa fa-search search_icon"></i>
                 <input type="text" name="id_number" id="id_number">
              </div>
              <div>
              <button type="button" id="ajax_show" class="btn styled">検索</button>
              </div>
        </div>

        <div class="result_wrapper">
          <form method="post" action="{{ route('getPoint') }}" name="point">
            @csrf
            <div id="result1" name="name"></div>
            <input type="hidden" name="id" id="result2">
            <input type="text" class="input_field" placeholder="ポイント数を入力" name="get_point"
            id="getpoint">

            <button type="submit" class="get" name="action" onclick="return getPoint()">ポイント付与！</button>
          </form>

        </div>

 </div>

 <a  class="border" href="{{ route('top') }}"> Neonホームページへ </a>
</div>
</section>


  <!--非同期通信処理-->
  <script src="js/ajax.js"></script>
  <script src="js/main.js"></script>
  <script src="js/get_date.js"></script>
  </body>

  </html>

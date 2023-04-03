<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
<meta charset="UTF-8">
<title>シーシャ＆カジノBar Neon【神戸三ノ宮店】</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="/css/fixed.css">
<!-- <link rel="stylesheet" href="/css/style.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

  <table class="table table-striped">
      <tr id="all_show_result">
          <th>id</th><th>氏名</th><th>メールアドレス</th>
      </tr>
  </table>

：
<div class="card mb-5">
    <h2>会員検索</h2>
    <div class="card-body">
        <p class="card-text">
        <div class="form-group row">
            <div class="col-md-4">会員コード:(テストコードDEF67890,ABC12345,GHI44444)
            </div>
            <div class="col-md-4">
                <input class="form-control" id="id_number">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <button type="button" id="ajax_show" class="btn btn-info text-white">会員検索</button>
            </div>
        </div>
    </div>
    <div class="result_wrapper">
      <form method="post" action="{{ route('getPoint') }}">
        @csrf
        <div class="col-md-12" id="result1" name="name"></div>
        <input type="hidden" name="user_id" id="result2">
        <input type="text" class="input_field" placeholder="ポイント数" name="get_point"
        id="getpoint">PT
        <button type="submit" class="send" name="action">ポイント付与！</button>

      </form>
    </div>
</div>

  <!--非同期通信処理-->
  <script src="js/ajax.js"></script>

  </body>

  </html>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
<meta charset="UTF-8">
<title>シーシャ＆カジノBar Neon【神戸三ノ宮店】</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/fixed.css">
<!-- <link rel="stylesheet" href="/css/style.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="search-wrapper col-sm-4">
  <div class="user-search-form">
    {{ Form::text('search_name', null, ['id' => 'search_name', 'class' => 'form-control shadow', 'placeholder' => 'ユーザーを検索する']) }}
    {{ Form::button('<i class="fa fa-search" aria-hidden="true"></i>', ['class' => 'btn search-icon', 'type' => 'button']) }}
  </div>
</div>

<table class="table table-striped">
    <tr id="all_show_result">
        <th>id</th><th>商品名</th><th>価格</th>
    </tr>
</table>
：
<!--非同期通信処理-->
<script src="js/ajax.js"></script>
</body>

</html>

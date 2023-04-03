<!--
<?php
//管理者画面のカレンダー（日付クリックで詳細確認）
// タイムゾーンを設定
date_default_timezone_set('Asia/Tokyo');
// 前月・次月リンクが押された場合は、GETパラメーターから年月を取得
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // 今月の年月を表示
    $ym = date('Y-m');
}

// タイムスタンプを作成し、フォーマットをチェックする
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

$today = date('Y-m-j');

// カレンダーのタイトルを作成　例）2021年6月
$html_title = date('Y年n月', $timestamp);

// 前月・次月の年月を取得
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));

// 該当月の日数を取得
$day_count = date('t', $timestamp);

// １日が何曜日か　0:日 1:月 2:火 ... 6:土
$youbi = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));

// カレンダー作成の準備
$weeks = [];
$week = '';

// 第１週目：空のセルを追加
// 例）１日が火曜日だった場合、日・月曜日の２つ分の空セルを追加する
$week .= str_repeat('<td></td>', $youbi);

for ( $day = 1; $day <= $day_count; $day++, $youbi++) {
    // 2021-06-3
    $date = $ym . '-' . $day;
    $days = $ym .'-'. $day;
// print_r(array_intersect($reservedates, $days));
    // for ($i = 0; $i < count($reservedates);$i++){
    //     if($reservedates[$i] == $days){
    //       $week .= '<td><a>' . $day. '</a>';
    //     }
//配列の個数分回してしまっている。。
    // foreach ($reservedates as $reservedate){
    // // for ($i = 0; $i < count($reservedates);$i++){
    //     // if($reservedates[$i] == $days){
    //         if($reservedate == $days){
    //       $week .= '<td><a href="" onclick="return days">'. $day.'<input type="checkbox" name="date" value='.$days.'</a>';
    //
    //   }

    if($today == $date) {
       // 今日の日付の場合は、class="today"をつけて背景色を変える
       $week .= '<td class="today"><a href="" onclick="return days()">'. $day.'<input type="checkbox" name="date" class="days" value="'.$days.'"></a>' ;
     }
      else {
        $week .= '<td><a href="" onclick="return days()">' . $day.'<input type="checkbox" name="date" class="days" value="'.$days.'"></a>';



 }
   $week .= '</td>';

// print_r(array_intersect($reservedates, $days));


          // 週終わり、または、月終わりの場合
          if ($youbi % 7 == 6 || $day == $day_count) {
              if ($day == $day_count) {
                  // 月の最終日の場合、空セルを追加
                  // 例）最終日が水曜日の場合、木・金・土曜日の空セルを追加
                  $week .= str_repeat('<td></td>', 6 - $youbi % 7);
              }
              $weeks[] = '<tr>' . $week . '</tr>';
              // weekをリセット
              $week = '';
    }

}



?>



<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
<meta charset="UTF-8">
<title>シーシャ＆カジノBar Neon【神戸三ノ宮店】</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="/css/calendar.css">
<link rel="stylesheet" href="/css/fixed.css">

<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script></head>
<body>
<h3>
管理者画面TOP</br>
contact_G
</h3>


<div>ポイント付与にすすむ</div>
<a href="{{ route('orner') }}">こちら</a>



      <div class="result_wrapper">


      </div>
  </div>


      <h3 class="mb-5"><a href="?ym=<?php echo $prev; ?>">&lt;&lt;</a>
        <?php echo $html_title; ?><a href="?ym=<?php echo $next; ?>">&gt;&gt;</a>
      </h3>

        <table class="table table-bordered">
          <form action="{{ route('reserveNG') }}" method="post">
            @csrf
            <tr class="reservedate">
                <th>日</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
            </tr>
            <?php
                foreach ($weeks as $week) {
                  echo $week;
                }
            ?>
            <button type="submit" class="send" name="submit" id="submit">営業しません！</button>
          </form>
        </table>
    </div>

</body>
</html> -->

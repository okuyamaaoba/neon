// function ornerSign(){
//   console.log('ok');
//     var err = [];
//     if((orner.mail.value) == '' ){
//       err.push('・メールアドレスは必須入力です');
//     }
//     // else if((orner.mail.value) !== 'orner@gmail.com'){
//     //   err.push('・メールアドレスが違います');
//     // }
//     //パスワード
//     if((orner.password.value) == '' ){
//       err.push('・パスワードは必須入力です。');
//     }
//     // else if((orner.password.value) !== '0326neon'){
//     //     err.push('・パスワードが一致しません');
//     // }
//     // エラー文は改行して表示する
//     if( err.length >= 1){
//       alert(err.join("\n"));
//     }
// };

// 新規登録画面
function formCheck(){
    var err = [];
    // フリガナ
    if((signup.kana.value) == '' ){
      err.push('・名前は必須入力です。');
    }else if((signup.kana.value).length > 10 ){
      err.push('・名前は10文字以下で入力してください。');
    }

    // メールアドレス
    if((signup.mail.value) == '' ){
      err.push('・メールアドレスは必須入力です');
    }else if((signup.mail.value).match(/^[a-zA-Z0-9_+-]+(.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/) == null){
      err.push('・有効なメールアドレスを入力してください');
    }

    //生年月日
    if((signup.birth.value) == '' ){
      err.push('・生年月日は必須入力です。');
    } else if((signup.birth.value).length != 8 ){
        err.push('・生年月日は正しい形式で入力してください');
    }

    //パスワード
    if((signup.password1.value) == '' ){
      err.push('・パスワードは必須入力です。');
    }
    else if((signup.password1.value) != (signup.password.value)){
        err.push('・パスワードが一致しません');
    }
    // エラー文は改行して表示する
    if( err.length >= 1){
      alert(err.join("\n"));
    }

};

//ゲスト予約画面
function contactCheck(){

    var err = [];
    // フリガナ
    if((contact_form.kana.value) == '' ){
      err.push('・名前は必須入力です。');
    }else if((sign_form.kana.value).length > 10 ){
      err.push('・名前は10文字以下で入力してください。');
    }

    // メールアドレス
    if((contact_form.mail.value) == '' ){
      err.push('・メールアドレスは必須入力です');
    }else if((contact_form.mail.value).match(/^[a-zA-Z0-9_+-]+(.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/) == null){
      err.push('・有効なメールアドレスを入力してください');
    }
    if((contact_form.date.value) == '' ){
      err.push('・日付は必須入力です。');
    }

    // エラー文改行
    if( err.length >= 1){
      alert(err.join("\n"));
    }
};

//サインイン画面
function membership(){

  var err = [];
  if((sign_form.mail.value) == '' ){
    err.push('メールアドレスを入力してください');
  }
  if( err.length >= 1){
    alert(err.join("\n"));
  }
};

// 新規登録画面
function pwReset(){
    var err = [];
    //パスワード
    if((pw.password1.value) == '' ){
      err.push('・パスワードは必須入力です。');
    }
    else if((pw.password1.value) != (pw.password.value)){
        err.push('・パスワードが一致しません');
    }
    // エラー文は改行して表示する
    if( err.length >= 1){
      alert(err.join("\n"));
    }
};
function getPoint(){
    var err = [];
    //パスワード
    if((point.result2.value) == '' ){
      err.push('・対象ユーザーが見つかません');
    }
    if((point.getpoint.value) == ''){
        err.push('・ポイント数を入力してください');
    }
    // エラー文は改行して表示する
    if( err.length >= 1){
      alert(err.join("\n"));
    }
};

// function orner(){
//   console.log('ok');
//     var err = [];
//     // メールアドレス
//     if((orner.mail.value) == '' ){
//       err.push('・メールアドレスは必須入力です');
//     }else if((orner.mail.value).match(/^[a-zA-Z0-9_+-]+(.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/) == null){
//       err.push('・有効なメールアドレスを入力してください');
//     }
//
//     //パスワード
//     if((orner.password.value) == '' ){
//       err.push('・パスワードは必須入力です。');
//     }
//     else if((orner.password.value) != (orner.password.value)){
//         err.push('・パスワードが一致しません');
//     }
//     // エラー文は改行して表示する
//     if( err.length >= 1){
//       alert(err.join("\n"));
//     }
//
// };





// var disableDates = array;

$(function() {

//ここにOpening->dateを格納したい
// var disableDates = ['2015/01/01', '2015/01/03'];
$("#date").datepicker({
    dateFormat: 'yy-mm-dd',
    minDate: '0',
    autoclose   : true,
    clear       : '閉じる',
    startDate   : 'today',
    beforeShowDay: function(date) {
        if(date.getDay() == 1 ) {
            // 日曜日、土曜日は非表示
            return [false, 'ui-state-disabled'];
        }
        else {
            // 平日
            return [true, ''];
        }
    }
    // beforeShowDay : function(date) {
    //     var disableDate = $.datepicker.formatDate(dateFormat, date);
    //     return ( disableDates.indexOf(disableDate) == -1 );
    // }
});
});

// function getAllData(){
//
//     fetch('orner/show_all', { // 第1引数に送り先
//     })
//         .then(response => response.json()) // 返ってきたレスポンスをjsonで受け取って次のthenへ渡す
//         .then(res => {
//          /*--------------------
//               PHPからの受取成功
//              --------------------*/
//             // 取得したレコードをeachで順次取り出す
//             res.forEach(elm =>{
//                 var insertHTML = "<tr class=\"target\"><td>" + elm['id'] + "</td><td>" + elm['name'] + "</td><td>" + elm['mail'] + "</td></tr>"
//                 var all_show_result = document.getElementById("all_show_result");
//                 all_show_result.insertAdjacentHTML('afterend', insertHTML);
//             })innerHTML
//             console.log("通信成功");
//             console.log(res); // 返ってきたデータ
//         })
//
//         .catch(error => {
//             console.log(error); // エラー表示
//         })
// }
//
// // 関数を実行
// getAllData();
//

ajax_show.addEventListener('click', () => {

    console.log("イベント発火");

    /*--------------------
     POST送信
     -------------------*/
    const postData = new FormData; // フォーム方式で送る場
    postData.set('member_code', document.getElementById('id_number').value); // set()で格納する
    fetch('orner/show', { // 第1引数に送り先
        method: 'POST',
        headers: {'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content}, // CSRFトークン対策
        body: postData
    })
        .then(response => response.json()) // 返ってきたレスポンスをjsonで受け取って次のthenへ渡す
        .then(res => {
            console.log('res: '+res[0].id); // やりたい処理
            document.getElementById("result1").innerHTML = "<p class=\"ajax\">ユーザーネーム :  " + res[0].name +"  さん</p>";
            document.getElementById("result2").value =  res[0].id ;

        })
        .catch(error => {
            console.log(error); // エラー表示
            document.getElementById("result1").innerHTML = "<p class=\"ajax\">会員コードがちがいます</p>";
        });
});

serch_reserve.addEventListener('click', () => {

    console.log("イベント発火");
    // $('reserve_serch').off();
    // element.remove();
    /*--------------------
     POST送信
     -------------------*/
    const postData = new FormData; // フォーム方式で送る場
    postData.set('serch_date', document.getElementById('date').value); // set()で格納する
    fetch('orner/reserve_serch', { // 第1引数に送り先
        method: 'POST',
        headers: {'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content}, // CSRFトークン対策
        body: postData

    })


.then(response => response.json()) // 返ってきたレスポンスをjsonで受け取って次のthenへ渡す
.then(res => {
  //前の検索結果を空にする
  document.getElementById("result_reserve").innerHTML = "";

              res.forEach(elm =>{
                    document.getElementById("result_reserve").innerHTML += " <p class=\"ajax\">" + elm.time +"~ " + elm.name +"様 / " + elm.people +" / " + elm.menu +" </br></p>";
                  })
              })
.catch(error => {
    console.log(error); // エラー表示
    document.getElementById("result_reserve").innerHTML = "<p class=\"ajax\">予約はありません</p>";
});
});

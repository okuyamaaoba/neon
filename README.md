# neon
PHP自作

## 概要

友人が運営するシーシャバーの予約管理サイトを作成しました。

ゲストユーザー・会員ユーザー・管理ユーザーにわけ、来店予約や会員登録・ポイント利用ができます。


## 使い方
- ゲストユーザー

ゲスト予約をクリックすると会員登録なしで、予約フォームに遷移します。

また、来店予約完了後、そのまま会員登録にも進めます。

- 会員ユーザー

会員登録をすると、お会計額に応じたポイントが貯まります。

ポイントは１pt＝１円で次回来店時利用できます。

会員画面では自身の会員コード・ポイント数の確認に加え、会員情報の編集やパスワードリセットが行えます。


- 管理ユーザー

管理者ページでは日付を入力すると、該当日の予約者リスト（時間・予約者名・人数・メニュー）が一覧で表示されます。

また、会員コードを入力することで、ユーザー名が表示され、対象ユーザーに入力したポイントが付与されます。

## 環境
MAMP/MySQL/Laravel/PHP

## データベース
データベース名：educure7

テーブル

- Contactsテーブル

・id(AI) ・kana　　・mail　　・date　　・time　　・people　　・menu

- Usersテーブル

・id　　・kana　　・mail　　・user_id　　・member_code

- Menusテーブル

・id ・menu_id ・menu

- Timesテーブル

・id ・time_id ・hour

- Recordsテーブル

・id　　・user_id　　・get_points

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# neon
# neon
# neon
# git_neon
# neon

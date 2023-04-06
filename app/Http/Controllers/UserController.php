<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\MembercontactRequest;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\SigninRequest;
use App\Http\Requests\pwResetRequest;
use App\Http\Requests\pwUpdateRequest;
// use App\Http\Requests\OrnerRequest;

use App\Models\Contact;
use App\Models\User;
use App\Models\Menu;
use App\Models\Time;
use App\Models\Record;


use Illuminate\Http\Request;


class UserController extends Controller
{
     public function top(){
       session()->flush();

         return view('top');
     }


     public function contact_G(){

       $menus = Menu::all();
       $times = Time::all();

       return view('contact_G', compact('menus','times'));
     }

     //
     // public function contact_M(SigninRequest $request){
     //   $mail = $request->mail;
     //   $password = $request->password;
     //   $total_point = $request->total_point;
     //   $user = User::where('mail','=',$mail)->first();
     //
     //   $menus = Menu::all();
     //   $times = Time::all();
     //   //
     //   // $openings = User::get();
     //   // $openingList = array();
     //   // foreach($openings as $opening){
     //   //     $openingList[] = array(
     //   //       'date'  => $opening->date,
     //   //     );
     //   //     }
     //   // // htmlへ渡す配列$productListをjsonに変換する
     //   // echo json_encode($openingList);
     //
     //   return view('contact_M', compact('menus','times','user'));
     // }


     public function confirm_G(ContactRequest $request){
        $inputs = $request->all();
        $request->session()->put('inputs', $inputs);

         return view('confirm_G',  compact('inputs'));
      }


      public function send(ContactRequest $request){
        $action = $request->input('action');
        $inputs = $request->except('action', '_token');

          $contact = new Contact();
          $contact->kana = $request->kana;
          $contact->mail = $request->mail;
          $contact->date = $request->date;
          $contact->time = $request->time;
          $contact->people = $request->people;
          $contact->menu = $request->menu;
          $contact->timestamps = false;
          $contact->save();

          return view('complete_G');
       }


       public function confirm_M(MembercontactRequest $request){
         $inputs = $request->all();
         $request->session()->put('inputs', $inputs);
         $mail = $request->mail;
         $user = User::where('mail','=',$mail)->first();

       return view('confirm_M', compact('inputs','user'));
     }


     public function send_M(MembercontactRequest $request){
       $action = $request->input('action');
       $inputs = $request->except('action', '_token');
       $password = $request->password;
       $mail = $request->mail;
       $user = User::where('mail','=',$mail)->first();


         $contact = new Contact();
         $contact->kana = $user->kana;
         $contact->mail = $user->mail;
         $contact->date = $request->date;
         $contact->time = $request->time;
         $contact->people = $request->people;
         $contact->menu = $request->menu;
         $contact->timestamps = false;
         $contact->save();

         return view('complete_M',compact('mail','password'));
      }


     public function signUp() {
         return view('signUp');
     }


     public function signConfirm(SignUpRequest $request){
       //フォームから受け取ったすべてのinputの値を取得
       $inputs = $request->all();
       $request->session()->put('inputs', $inputs);
       $member_code = $_POST['member_code'];

       return view('signConfirm', compact('inputs'));
     }

      public function sendSign(Request $request){
              $action = $request->input('action');
              $inputs = $request->except('action', '_token');

              $mail =$_POST['mail'];
              $password =$_POST['password'];

                $user = new User();
                // $user->id = $request->id;
                $user->kana = $request->kana;
                $user->mail = $request->mail;
                $user->birth = $request->birth;
                $user->password = $request->password;
                $user->member_code = $request->member_code;

                $user->timestamps = false;
                $user->save();

        return view('signComplete',compact('mail','password'));
      }



//サインイン画面
     public function signIn(){
         $signNG = null;

         return view('signIn',compact('signNG'));
     }

  //会員ログイン
     public function membership(SigninRequest $request){

       $user = User::where('mail','=',$_POST['mail'])->first();
       $contact = Contact::where('mail','=',$_POST['mail'])->first();
         if($_POST['password'] == $user->password){

           $records = Record::where('user_id','=',$user->id)->get();
           $total_point = 0;
           foreach($records as $record){
               $point = $record->get_point;
               $total_point += $point;
             }
               return view('membership', compact('user','total_point','contact'));

         }else{
           $signNG = '作ってるだけ表示しない';

           return view('signIn', compact('signNG'));
         };
     }


   //会員編集に遷移
    public function memberEdit(Request $request){

      $value = User::where('mail','=',$_POST['mail'])->first();
      return view('memberEdit', compact('value'));
      }

      //会員ページからの遷移
      public function contact_M(SigninRequest $request){
        $inputs = $request->all();
        $request->session()->put('inputs', $inputs);
        $mail = $request->mail;
        $user = User::where('mail','=',$mail)->first();

        $menus = Menu::all();
        $times = Time::all();

        return view('contact_M', compact('menus','times','user'));
      }


    //予約変更画面に遷移
      public function reserveEdit(Request $request){
        $user = User::where('mail','=',$_POST['mail'])->first();
        $menus = Menu::all();
        $times = Time::all();
        return view('reserveEdit', compact('menus','times','user'));
        }


    //予約変更
      public function reseveChange(Request $request){
        $mail = $request->mail;
        $password = $request->password;
        $contact = Contact::where('mail','=',$mail)->first();
        $user = User::where('mail','=',$mail)->first();

          $contact->kana = $request->kana;
          $contact->date = $request->date;
          $contact->time = $request->time;
          $contact->people = $request->people;
          $contact->menu = $request->menu;
          $contact->timestamps = false;
          $contact->save();

              $records = Record::where('user_id','=',$user->id)->get();
              $total_point = 0;
              foreach($records as $record){
                  $point = $record->get_point;
                  $total_point += $point;
                }
                  return view('membership', compact('user','total_point','contact'));
        }

          //予約キャンセル（削除）
          public function delete(Request $request){
            $mail = $request->mail;
            $contact = Contact::where('mail','=',$mail)->delete();
            // レコードを削除
            $user = User::where('mail','=',$mail)->first();

            $records = Record::where('user_id','=',$user->id)->get();
            $total_point = 0;
            foreach($records as $record){
                $point = $record->get_point;
                $total_point += $point;
              }
              $contact = Contact::where('mail','=',$mail)->first();

                return view('membership', compact('user','total_point','contact'));
            }

            // public function destroy($id)
            //     {
            //         // Booksテーブルから指定のIDのレコード1件を取得
            //         $contact = Contact::find($id);
            //         // レコードを削除
            //         $contact->delete();
            //         // 削除したら一覧画面にリダイレクト
            //         return redirect()->route('book.index');
            //     }




    //サインイン画面からの遷移
      public function contact_sign(SigninRequest $request){
        // $total_point = $_POST['total_point'];
        // $mail = $request->mail;
        $password = "$request->password";
        $user = User::where('mail','=',$_POST['mail'])->first();

          if($password == $user->password){
            $menus = Menu::all();
            $times = Time::all();
            return view('contact_M', compact('menus','times','user'));
          }else{
            return redirect('signIn');
          };
      }

    //会員編集完了
    public function memberUpdate(Request $request){

      $mail = $request->mail;
      $password = $request->password;

      $user = User::where('mail','=',$_POST['mail'])->first();

        $user->kana = $request->kana;
        $user->mail = $request->mail;
        $user->birth = $request->birth;
        $user->password = $request->password;
        $user->timestamps = false;
        $user->save();

        return view('memberUpdate',compact('mail','password'));
      }

      // public function signConfirm(SignUpRequest $request){
      //   //フォームから受け取ったすべてのinputの値を取得
      //   $inputs = $request->all();
      //   $request->session()->put('inputs', $inputs);
      //   $member_code = $_POST['member_code'];
      //
      //   return view('signConfirm', compact('inputs'));
      // }


      // public function getIndex()
      // {
      //     return view('orner');
      // }
      //
      // public function showAll()
      // {
      //   $openings = Opening::get();
      //   $openingList = array();
      //   foreach($openings as $opening){
      //       $openingList[] = array(
      //         'date'    => $opening->date
      //       );
      //       }
      //   // htmlへ渡す配列$productListをjsonに変換する
      //   echo json_encode($openingList);
      //   $json = json_encode($openingList);
      //   return view('contact_G',compact('json'));
      // }


    public function show(Request $request)
    {
    $member_code = $request->input('member_code');
    $users = User::where('member_code',$member_code)->get();

    $userList = array();
    foreach($users as $user){
        $userList[] = array(
            'id'    => $user->id,
            'name'  => $user->kana
        );
    }
    header('Content-type: application/json');
    echo json_encode($userList);
    }

    public function reserve_serch(Request $request)
    {
    $serch_date = $request->input('serch_date');
    $contacts = Contact::where('date',$serch_date)->get();

    $reserveList = array();
    foreach($contacts as $contact){

        $reserveList[] = array(
            'id'    => $contact->id,
            'name'  => $contact->kana,
            'time'  => $contact->time,
            'people'  => $contact->people,
            'menu'  => $contact->menu
        );
    }
    header('Content-type: application/json');
    echo json_encode($reserveList);
    }


  //ポイント付与
    public function getPoint(Request $request){
      $action = $request->input('action');
      $inputs = $request->except('action', '_token');

      if($_POST['id'] !== '' && $_POST['get_point'] !== ''){
        $records = new Record();
        $records->user_id = $request->id;
        $records->get_point = $request->get_point;
        $records->timestamps = false;
        $records->save();
        session()->flush();
        return view('getPoint');
      }else{
        return redirect('orner');
      };

     }


   //パスワード忘れた方はこちら
     public function pwForget(){
          $signNG = null;
         return view('pwForget',compact('signNG'));
     }


     // $user = User::where('mail','=',$_POST['mail'])->first();
     // $contact = Contact::where('mail','=',$_POST['mail'])->first();
     //   if($_POST['password'] == $user->password){
     //
     //
     //         return view('membership', compact('user','total_point','contact'));
     //
     //   }else{
     //     $signNG = '作ってるだけ表示しない';
     //
     //     return view('signIn', compact('signNG'));
     //   };



   //メールと生年月日あってたらOK、まちがっていたら画面戻る
     public function pwReset(pwResetRequest $request){
       $resetNG = null;

       $mail = $request->mail;
       $user = User::where('mail','=',$mail)->first();

       if($request->birth == $user->birth){
         return view('pwReset', compact('user','resetNG'));
       }else{
         $signNG = '作ってるだけ表示しない';
         return view('pwForget',compact('signNG'));
       };
      }

    //メールに一致する人のパスワード更新
       public function pwUpdate(pwUpdateRequest $request){

         $mail = $request->mail;
         $user = User::where('mail','=',$mail)->first();
         if($request->password === $request->password1){
           $user->password = $request->password;
           $user->timestamps = false;
           $user->save();

           return view('pwUpdate',compact('mail'));

         }else if($request->password !== $request->password1){
           $resetNG = '作ってるだけ表示しない';

           return view('pwReset',compact('user','resetNG'));
         };
        }

      //パスワードリセット画面から会員遷移
      public function backMembership(Request $request){
        $mail = $request->mail;

        $user = User::where('mail','=',$mail)->first();
        $contact = Contact::where('mail','=',$mail)->first();

              $records = Record::where('user_id','=',$user->id)->get();
              $total_point = 0;
              foreach($records as $record){
                  $point = $record->get_point;
                  $total_point += $point;
                }
            return view('membership', compact('user','total_point','contact'));
        }


//管理者ページ

    public function orner(){
        return view('orner');
    }

    //   public function orner(OrnerRequest $request){
    //
    //         return view('orner');
    // }
}

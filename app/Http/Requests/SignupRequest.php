<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{

  // protected function prepareForValidation()
  // {
  //   $this->merge(['tel' => mb_convert_kana($this->tel, 'n')]);
  // }


  public function rules(){
    return [
      'kana'      => 'required | max:10',
      'mail'      => 'required | email | unique:users',
      'birth'      => 'required | date',
      'password1'      => 'required ',
      'password'      => 'required| same:password1'

    ];
  }

  public function attributes(){
    return [
      'kana'       => '氏名',
      'mail'       => 'メールアドレス',
      'birth'       => '生年月日',
      'password1'       => 'パスワード',
      'password'       => 'パスワード',

    ];
  }

}

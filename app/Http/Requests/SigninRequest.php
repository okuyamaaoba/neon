<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SigninRequest extends FormRequest
{

  // protected function prepareForValidation()
  // {
  //   $this->merge(['tel' => mb_convert_kana($this->tel, 'n')]);
  // }


  public function rules(){
    return [
      'mail'      => 'required | exists:users',
      'password'      => 'required '
    ];
  }

  public function attributes(){
    return [

      'mail'       => 'メールアドレス',
      'password'       => 'パスワード'
    ];
  }

}

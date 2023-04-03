<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrnerRequest extends FormRequest
{

  // protected function prepareForValidation()
  // {
  //   $this->merge(['tel' => mb_convert_kana($this->tel, 'n')]);
  // }


  public function rules(){
    return [
      'mail'      => 'required | "orner@gmail.com"',
      'password'      => 'required | "neon0326"'
    ];
  }

  public function attributes(){
    return [
      'mail'       => 'メールアドレス',
      'password'      => 'パスワード'
    ];
  }

}

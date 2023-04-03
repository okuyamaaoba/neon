<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pwUpdateRequest extends FormRequest
{

  // protected function prepareForValidation()
  // {
  //   $this->merge(['tel' => mb_convert_kana($this->tel, 'n')]);
  // }


  public function rules(){
    return [
      'mail'      => 'required',
      'password1'      => 'required ',
      'password'      => 'required| same:password1'

    ];
  }

  public function attributes(){
    return [
      'mail'       => '',
      'password1'       => 'パスワード',
      'password'       => 'パスワード',

    ];
  }

}

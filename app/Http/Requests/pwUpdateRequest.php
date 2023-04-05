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
      'password1'      => 'required ',
      'password'      => 'required'

    ];
  }

  public function attributes(){
    return [
      'password1'       => 'パスワード',
      'password'       => 'パスワード'

    ];
  }

}

<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pwResetRequest extends FormRequest
{


  // protected function prepareForValidation()
  // {
  //   $this->merge(['tel' => mb_convert_kana($this->tel, 'n')]);
  // }


  public function rules(){
    return [
      'mail'      => 'required | exists:users',
      'birth'      => 'required '

    ];
  }

  public function attributes(){
    return [

      'mail'       => 'メールアドレス',
      'birth'       => '生年月日'


    ];
  }

}

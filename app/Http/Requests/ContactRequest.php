<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

  // protected function prepareForValidation()
  // {
  //   $this->merge(['tel' => mb_convert_kana($this->tel, 'n')]);
  // }


  public function rules(){
    return [
      'kana'      => 'required | max:10',
      'mail'      => 'required | email',
      'date'      => 'required',
      'time'      => 'required',
      'people'      => 'required',
      'menu'   => 'required'
    ];
  }

  public function attributes(){
    return [
      'kana'       => '氏名',
      'mail'       => 'メールアドレス',
      'date'      => '日付',
      'time'      => '時間',
      'people'       => '人数',
      'menu' => 'メニュー'
    ];
  }

}

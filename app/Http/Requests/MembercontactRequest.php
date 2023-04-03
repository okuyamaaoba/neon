<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MembercontactRequest extends FormRequest
{

  // protected function prepareForValidation()
  // {
  //   $this->merge(['tel' => mb_convert_kana($this->tel, 'n')]);
  // }


  public function rules(){
    return [
      'date'      => 'required',
      'people'      => 'required',
      'menu'   => 'required'
    ];
  }

  public function attributes(){
    return [
      'date'       => '日付',
      'people'       => '人数',
      'menu' => 'メニュー'
    ];
  }

}

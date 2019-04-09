<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditSpecRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
             'name'=>'unique:tb_specialist,spec_name,'.$this->segment(4).',spec_id'
        ];
    }

    public function messages(){

       return [
       //
            'name.unique'=>'Tên khoa khám bệnh đã bị trùng !'
       ];
   }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddDoctorRequest extends FormRequest
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
            'email'=>'unique:tb_users,email',
            'avatar'=>'image'
        ];
    }

    public function messages()
    {

       return [
       //
       'email.unique'=>'Email đã bị trùng !',
       'avatar.image'=>'Định dạng ảnh không đúng'
       ];
    }
}

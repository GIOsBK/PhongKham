<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddAssiRequest extends FormRequest
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
            'name'=>'unique:tb_assigned_shiftss,assi_name',
            'timeStart'=>'unique:tb_assigned_shiftss,assi_timeStart',
            'timeFinish'=>'unique:tb_assigned_shiftss,assi_timeFinish'
        ];
    }

    public function messages()
    {

       return [
       //
            'name.unique'=>'Tên ca đã bị trùng !',
            'timeStart.unique'=>'Thời gian bắt đầu không được trùng !',
            'timeFinish.unique'=>'Thời gian kết thúc không được trùng !',
       ];
    }
}

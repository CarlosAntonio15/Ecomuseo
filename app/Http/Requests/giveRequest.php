<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class giveRequest extends FormRequest
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
            'id'=>'required', 
            'name'=>'required',
            'lastname'=>'required', 
            'donationType'=>'required',
            'quantity'=>'required', 
            'description'=>'required',
            'currentDate'=>'required',
            'phone'=>'required', 
            'mail'=>'required'

        ];
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 03be68e9caba48fcf65250246fa5624fc968c925

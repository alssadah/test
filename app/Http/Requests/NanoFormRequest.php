<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NanoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'account_id' => [
                'required',
                'numeric',
                'digits_between:6,17',
            ],
            'account_type' => [
                'required',
                'numeric',
                'digits_between:1,2',
            ],
            'name' => [
                'required',
                //     'string',
                //     'regex:(^.{2,12}(?: .{2,12})?(?: .{2,12})$)',
            ],

            'email' => [
                'required',
                //     'string',
                //     'regex:(^.{2,12}(?: .{2,12})?(?: .{2,12})$)',
            ],

            'birthdate' => [
                'required',
                // 'date',
                // 'date_format:Y-m-d',
                // 'before:today',
            ],
            'gender' => [
                'required',
                'numeric',
                'between:1,2',
            ],
            'city' => [
                'required',
                'numeric',
                'between:1,22',
            ],
            'address' => [
                'required',
                'string',
            ],
            'is_employee' => [
                'required',
                'numeric',
                'between:1,6',
            ],
            'capital' => [
                'required',
                'numeric',
                'between:0,2',
            ],
            'emp_count' => [
                'required',
                'numeric',
                'between:0,3',
            ],
            'experience' => [
                'required',
                'numeric',
                'between:0,3',
            ],
            'monthly_income' => [
                'required',
                'numeric',
                'between:1,4',
            ],
            'marital_status' => [
                'required',
                'numeric',
                'between:1,4',
            ],
            'education' => [
                'required',
                'numeric',
                'between:1,6',
            ],
            'housing' => [
                'required',
                'numeric',
                'between:1,2',
            ],
            'has_car' => [
                'required',
                'numeric',
                'between:0,1',
            ],
            'followers' => [
                'required',
                'numeric',
                'between:1,3',
            ],
            // 'person_link1' => [
            //     'required',
            //     'numeric',
            // ],
            // 'person_link2' => [
            //     'required',
            //     'numeric',
            // ],
            // 'person_link3' => [
            //     'required',
            //     'numeric',
            // ],
            'idcard' => [
                'required',
                'numeric',
            ],

            'referred_platform' => [
                'required',
                'numeric',
                'between:1,6',
            ],

        ];
    }
}

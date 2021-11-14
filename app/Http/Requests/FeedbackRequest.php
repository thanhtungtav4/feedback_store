<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
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
            'datecheckin' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'question' => 'required',
            'question_02' => 'required',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'datecheckin.required'         => __('Vui lòng nhập ngày đến Showroom'),
            'name.required'         => __('Vui lòng nhập Họ & Tên'),
            'phone.required'         => __('Vui lòng nhập Số điện thoại'),
            'question.required'         => __('Vui lòng trả lời câu hỏi'),
            'question_02.required'         => __('Vui lòng trả lời câu hỏi thứ 2'),
        ];
    }
}

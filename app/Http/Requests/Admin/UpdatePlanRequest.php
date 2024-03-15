<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('update plans', Plan::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'sometimes|file|max:1024',
            'name' => 'required',
            'description' => 'required',
            'is_active' => 'sometimes',
            'price' => 'sometimes|numeric',
            'active_subscribers_limit' => 'sometimes|numeric',
            'invoice_period' => 'sometimes|numeric',
        ];
    }
}

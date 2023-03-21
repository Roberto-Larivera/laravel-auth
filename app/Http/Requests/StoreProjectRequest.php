<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:98',
            'name_repo' => 'required|unique:projects,name_repo|max:98',
            'link_repo' => 'required|max:255',
            'img_repo' => 'nullable|max:255',
            'description' => 'nullable|max:4096',
        ];
    }
}

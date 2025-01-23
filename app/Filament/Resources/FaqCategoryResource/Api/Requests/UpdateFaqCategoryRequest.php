<?php

namespace App\Filament\Resources\FaqCategoryResource\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFaqCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'name' => 'required|string',
			'sort' => 'required|integer',
			'is_active' => 'required|integer'
		];
    }
}

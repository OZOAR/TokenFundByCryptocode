<?php

namespace App\Http\Requests;

use App\Http\Middleware\Localization;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LocalizationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get all of the input and files for the request.
     *
     * @param  array|mixed  $keys
     * @return array
     */
    public function all($keys = null): array
    {
        return [
            'lang' => $this->route()->parameter('lang')
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'lang' => Rule::in(Localization::LANGUAGES)
        ];
    }
}

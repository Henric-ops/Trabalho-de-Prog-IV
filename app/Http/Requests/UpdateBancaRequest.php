<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBancaRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => ['required', 'string', 'max:255'],
            'titulacao' => ['required', 'string', 'max:255'],
            'tcc_id' => ['required', 'exists:tccs,id'],
            'avaliador_1' => ['required', 'string', 'max:255'],
            'avaliador_2' => ['nullable', 'string', 'max:255'],
            'avaliador_3' => ['nullable', 'string', 'max:255'],
        ];
    }
}

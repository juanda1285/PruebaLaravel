<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocDocumentoRequest extends FormRequest
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
			'doc_nombre' => 'required|string',
			'doc_codigo' => 'required',
			'doc_contenido' => 'required|string',
			'prod_id' => 'required',
			'tip_id' => 'required',
        ];
    }
}

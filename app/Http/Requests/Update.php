<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
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
            'txtnama'=>'required',
            'txtkondisi'=>'required',
            'txtjenis'=>'required',
            'txtberat'=>'required|numeric',
        ];
    }
    public function messages():array
    {
        return[
            'txtnama.required'=>':attribute Tidak Boleh Kosong',
            'txtkondisi.required'=>':attribute Tidak Boleh Kosong',
            'txtjenis.required'=>':attribute Tidak Boleh Kosong',
            'txtberat.required'=>':attribute Tidak Boleh Kosong',
        ];
    }

    public function attributes():array
    {
        return[
            'txtnama'=>'Nama',
            'txtkondisi'=>'Kondisi',
            'txtjenis'=>'Jenis',
            'txtberat'=>'Berat',
            
        ];
    }
}

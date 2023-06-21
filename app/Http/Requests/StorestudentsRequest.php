<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorestudentsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'txtid' => 'required|unique:students,idstudents|min:10|max:10',
            'txtfullname' => 'required',
            'txtgender' => 'required',
            'txtage' => 'required|numeric',
            'txtemail' => 'required|email|unique:students,email',
            'txtphone' => 'required|numeric',
            'txtaddress' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'txtid.required' => ':attribute Tidak boleh kosong',
            'txtid.unique' => ':attribute Sudah ada di dalam tabel',
            'txtfullname.required'=>':attribute Tidak boleh kosong',
            'txtage.required' => ':attribute Tidak boleh kosong',
            'taddress.required' => ':attribute Tidak boleh kosong',
            'txtemail.required' => ':attribute Tidak boleh kosong',
            'txtemail.unique' => ':attribute Sudah ada di dalam tabel',
            'txtphone.required' => ':attribute Tidak boleh kosong',
        ];
    }
    public function attributes(): array
    {
        return [
            'txtid' => 'ID Students',
            'txtfullname' => 'Nama Lengkap',
            'txtaddress' => 'Alamat',
            'txtemail' => 'Email',
            'txtphone' => 'No Telp',
            'txtage' => 'Usia'
        ];
    }
}

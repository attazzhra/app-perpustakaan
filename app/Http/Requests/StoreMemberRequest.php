<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'nama'          => 'required',
            'nim'           => 'required|unique:members,nim',
            'email'         => 'required|email|unique:members,email',
            'nomor_telepon' => 'required',
            'alamat'        => 'required',
            'status'        => 'required|in:aktif,nonaktif',
        ];
    }
    public function messages(): array
    {
        return [
            'nama.required'          => 'Nama wajib diisi.',
            'nim.required'           => 'NIM wajib diisi.',
            'nim.unique'             => 'NIM sudah terdaftar.',
            'email.required'         => 'Email wajib diisi.',
            'email.email'            => 'Format email tidak sesuai.',
            'email.unique'           => 'Email sudah terdaftar.',
            'nomor_telepon.required' => 'Nomor telepon wajib diisi.',
            'alamat.required'        => 'Alamat wajib diisi.',
            'status.required'        => 'Status wajib dipilih.',
            'status.in'              => 'Status harus aktif atau nonaktif.',
        ];
    }
}
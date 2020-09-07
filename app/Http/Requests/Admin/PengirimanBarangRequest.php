<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PengirimanBarangRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'tanggal_pengiriman' => 'required',
            'nama_pengirim' => 'required|max:255',
            'kota_asal' => 'required|max:255',
            'kota_tujuan' => 'required|max:255',
            'nama_penerima' => 'required',
            'organisasi_penerima' => 'required',
            'alamat' => 'required|max:255',
        ];
    }
}

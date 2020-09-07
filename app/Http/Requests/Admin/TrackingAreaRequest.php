<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TrackingAreaRequest extends FormRequest
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
            'resi' => 'required|max:255',
            'email' => 'required|max:255',
            'telepon' => 'required',
            'kota_asal' => 'required|max:255',
            'kota_tujuan' => 'required|max:255',
            'alamat' => 'required|max:255',
        ];
    }
}

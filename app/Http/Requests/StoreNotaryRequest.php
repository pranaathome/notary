<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNotaryRequest extends FormRequest
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
            'nomor_proyek' => 'required|unique:notaries',
            'nama_nasabah' => 'required',
            'jenis_pekerjaan' => 'required',
            'lingkup_pekerjaan' => 'required',
            'tahap_pekerjaan' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'harga_proyek' => 'required',
            'honor_notaris' => 'required',
            'biaya_pengurusan' => 'required',
            'jumlah_bayar' => 'required',
            'nomor_faktur' => 'required',
            'status_pembayaran' => 'required|not_in:Pilih Status Pembayaran',
            'status_proyek' => 'required|not_in:Pilih Status Proyek',
            'keterangan' => 'required',
        ];
    }
}

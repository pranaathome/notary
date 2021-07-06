<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotaryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nomor_proyek' => 'required',
            'nama_nasabah' => 'required|nullable',
            'jenis_pekerjaan' => 'required|nullable',
            'lingkup_pekerjaan' => 'required|nullable',
            'tahap_pekerjaan' => 'required|nullable',
            'tanggal_mulai' => 'required|nullable',
            'tanggal_selesai' => 'required|nullable',
            'harga_proyek' => 'required|nullable',
            'biaya_pengurusan' => 'required|nullable',
            'jumlah_bayar' => 'required|nullable',
            'nomor_faktur' => 'required|nullable',
            'status_pembayaran' => 'required|not_in:Pilih Status Pembayaran',
            'status_proyek' => 'required|not_in:Pilih Status Proyek',
            'keterangan' => 'required|nullable',
            'honor_notaris' => 'required|nullable',
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $dates = ['tanggal_mulai', 'tanggal_selesai'];

    protected $fillable = [
        'nomor_proyek',
        'nama_nasabah',
        'jenis_pekerjaan',
        'lingkup_pekerjaan',
        'tahap_pekerjaan',
        'tanggal_mulai',
        'tanggal_selesai',
        'harga_proyek',
        'biaya_pengurusan',
        'jumlah_bayar',
        'nomor_faktur',
        'status_pembayaran',
        'status_proyek',
        'keterangan'
    ];

    public function notaries()
    {
        return $this->hasMany(Notary::class);
    }

    public function ppats()
    {
        return $this->hasMany(PPAT::class);
    }
}

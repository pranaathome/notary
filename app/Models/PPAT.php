<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPAT extends Model
{
    use HasFactory;

    protected $dates = ['tanggal_mulai', 'tanggal_selesai'];

    // protected $primaryKey = 'nomor_proyek';

    // public $incrementing = false;

    // protected $keyType = 'string';

    protected $fillable = [
        'nomor_proyek',
        'nama_nasabah',
        'jenis_pekerjaan',
        'lingkup_pekerjaan',
        'tahap_pekerjaan',
        'tanggal_mulai',
        'tanggal_selesai',
        'harga_proyek',
        'honor_ppat',
        'biaya_pengurusan',
        'ppn',
        'pph',
        'bphtb',
        'jumlah_bayar',
        'nomor_faktur',
        'status_pembayaran',
        'status_proyek',
        'keterangan',
    ];
}

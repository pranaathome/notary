<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePPATSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_p_a_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_proyek')->unique();
            $table->string('nama_nasabah');
            $table->string('jenis_pekerjaan');
            $table->string('lingkup_pekerjaan');
            $table->string('tahap_pekerjaan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->float('harga_proyek', 10, 2, TRUE);
            $table->float('honor_ppat', 10, 2, TRUE);
            $table->float('biaya_pengurusan', 10, 2, TRUE);
            $table->float('ppn', 10, 2, TRUE);
            $table->float('pph', 10, 2, TRUE);
            $table->float('bphtb', 10, 2, TRUE);
            $table->float('jumlah_bayar', 10, 2, TRUE);
            $table->string('nomor_faktur');
            $table->enum('status_pembayaran', ['Lunas', 'Belum lunas']);
            $table->enum('status_proyek', ['Selesai', 'Belum selesai']);
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_p_a_t_s');
    }
}

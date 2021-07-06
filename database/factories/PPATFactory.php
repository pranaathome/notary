<?php

namespace Database\Factories;

use App\Models\PPAT;
use Illuminate\Database\Eloquent\Factories\Factory;

class PPATFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PPAT::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomor_proyek' => $this->faker->unique()->regexify('[0-9]{8}[A-Z]'),
            'nama_nasabah' => $this->faker->name,
            'jenis_pekerjaan' => $this->faker->jobTitle,
            'lingkup_pekerjaan' => $this->faker->catchPhrase,
            'tahap_pekerjaan' => $this->faker->sentence(6, true),
            'tanggal_mulai' => $this->faker->date('Y-m-d', 'now'),
            'tanggal_selesai' => $this->faker->date('Y-m-d', 'now'),
            'harga_proyek' => $this->faker->numberBetween(1000000, 50000000),
            'honor_ppat' => $this->faker->numberBetween(1000000, 50000000),
            'biaya_pengurusan' => $this->faker->numberBetween(1000000, 50000000),
            'ppn' => $this->faker->numberBetween(1000000, 50000000),
            'pph' => $this->faker->numberBetween(1000000, 50000000),
            'bphtb' => $this->faker->numberBetween(1000000, 50000000),
            'jumlah_bayar' => $this->faker->numberBetween(1000000, 50000000),
            'nomor_faktur' => $this->faker->unique()->bothify('##/NOT/#/V/2020'),
            'status_pembayaran' => $this->faker->randomElement(['Lunas', 'Belum lunas']),
            'status_proyek' => $this->faker->randomElement(['Selesai', 'Belum selesai']),
            'keterangan' => $this->faker->text(100),
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\PPAT;
use Illuminate\Database\Seeder;

class PPATSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PPAT::factory()->count(10)->create();
    }
}

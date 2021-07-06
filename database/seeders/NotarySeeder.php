<?php

namespace Database\Seeders;

use App\Models\Form;
use App\Models\Notary;
use Illuminate\Database\Seeder;

class NotarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notary::factory()->count(10)->create();
    }
}

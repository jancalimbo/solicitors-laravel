<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SolicitorsList;

class SolicitorsListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SolicitorsList::factory(50)->create();
    }
}

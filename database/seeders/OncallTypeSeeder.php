<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OncallType;

class OncallTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OncallType::create([
            'description'=> 'Turno fin de semana',
            'value'=> 10000
        ]);

        OncallType::create([
            'description'=> 'Turno dia de semana',
            'value'=> 15000
        ]);
    }
}

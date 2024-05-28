<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'name'=>'Payments'
        ]);

        Team::create([
            'name'=> 'DataCenter'
        ]);

        Team::create([
            'name'=> 'WebServices'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\Engineer;

class EngineerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teamPayments = Team::where('id', 1)->First();
        $teamDataCenter = Team::where('id', 2)->First();
        $teamWebServices = Team::where('id', 3)->First();

        Engineer::create([
            'name'=> 'Wilber Bocanegra',
            'phone'=> '+56949025368',
            'mail'=> 'wilber.bocanegra@haulmer.com',
            'id_team'=> $teamDataCenter->id
        ]);

        Engineer::create([
            'name'=> 'Daniel Pavez',
            'phone'=> '+56954973258',
            'mail'=> 'daniel.pavez@haulmer.com',
            'id_team'=> $teamPayments->id
        ]);

        Engineer::create([
            'name'=> 'Juan Cabezas',
            'phone'=> '+56954973258',
            'mail'=> 'juan.cabezas@haulmer.com',
            'id_team'=> $teamWebServices->id
        ]);

        Engineer::create([
            'name'=> 'Nicolas Valdivia',
            'phone'=> '+56949025368',
            'mail'=> 'nicolas.valdivia@haulmer.com',
            'id_team'=> $teamDataCenter->id
        ]);

        Engineer::create([
            'name'=> 'Victor Reyes',
            'phone'=> '+56949025368',
            'mail'=> 'victor.reyes@haulmer.com',
            'id_team'=> $teamPayments->id
        ]);

        Engineer::create([
            'name'=> 'Danilo Ibáñez',
            'phone'=> '+56949025368',
            'mail'=> 'Danilo.ibañez@haulmer.com',
            'id_team'=> $teamPayments->id
        ]);

        Engineer::create([
            'name'=> 'Fernando Guerra',
            'phone'=> '+56949025368',
            'mail'=> 'fernando.guerra@haulmer.com',
            'id_team'=> $teamWebServices->id
        ]);

        Engineer::create([
            'name'=> 'Juan Maldonado',
            'phone'=> '+56949025368',
            'mail'=> 'juan.maldonado@haulmer.com',
            'id_team'=> $teamPayments->id
        ]);
    }
}

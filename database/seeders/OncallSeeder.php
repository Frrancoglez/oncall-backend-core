<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Oncall;
use App\Models\OncallType;
use App\Models\Engineer;


class OncallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $idFinDeSemana = OncallType::where('id', 1)->first();
        $idDiaDeSemana = OncallType::where('id', 2)->first();

        $idWilberBocanegra = Engineer::where('id', 1)->first();
        $idDanielPavez = Engineer::where('id', 2)->first();
        $idJuanCabezas = Engineer::where('id', 3)->first();
        $idNicolasValdivia = Engineer::where('id', 4)->first();
        $idVictorReyes = Engineer::where('id', 5)->first();
        $idDaniloIbañez = Engineer::where('id', 6)->first();
        $idFernandoGuerra = Engineer::where('id', 7)->first();
        $idJuanMaldonado = Engineer::where('id', 8)->first();


        Oncall::create([
            'date'=> '2024-05-01',
            'id_type'=>$idDiaDeSemana->id,
            'id_engineer'=>$idWilberBocanegra->id
        ]);
        Oncall::create([
            'date'=> '2024-05-01',
            'id_type'=>$idDiaDeSemana->id,
            'id_engineer'=>$idDanielPavez->id
        ]);
        Oncall::create([
            'date'=> '2024-05-01',
            'id_type'=>$idDiaDeSemana->id,
            'id_engineer'=>$idJuanMaldonado->id
        ]);


// ------------------------ 04 05 ----------------------------

        Oncall::create([
            'date'=> '2024-05-04',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idWilberBocanegra->id
        ]);
        Oncall::create([
            'date'=> '2024-05-05',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idWilberBocanegra->id
        ]);

        Oncall::create([
            'date'=> '2024-05-04',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idDanielPavez->id
        ]);
        Oncall::create([
            'date'=> '2024-05-05',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idDanielPavez->id
        ]);

        Oncall::create([
            'date'=> '2024-05-04',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idJuanMaldonado->id
        ]);

        Oncall::create([
            'date'=> '2024-05-05',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idJuanMaldonado->id
        ]);
// ------------------------ 11 12 ----------------------------

        Oncall::create([
            'date'=> '2024-05-11',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idNicolasValdivia->id
        ]);
        Oncall::create([
            'date'=> '2024-05-12',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idNicolasValdivia->id
        ]);

        Oncall::create([
            'date'=> '2024-05-11',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idWilberBocanegra->id
        ]);
        Oncall::create([
            'date'=> '2024-05-12',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idWilberBocanegra->id
        ]);

        Oncall::create([
            'date'=> '2024-05-11',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idVictorReyes->id
        ]);
        Oncall::create([
            'date'=> '2024-05-12',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idVictorReyes->id
        ]);


        // -----------------------------------18 19----------------------------------------

        Oncall::create([
            'date'=> '2024-05-18',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idWilberBocanegra->id
        ]);
        Oncall::create([
            'date'=> '2024-05-19',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idWilberBocanegra->id
        ]);

        Oncall::create([
            'date'=> '2024-05-18',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idDaniloIbañez->id
        ]);
        Oncall::create([
            'date'=> '2024-05-19',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idDaniloIbañez->id
        ]);

        Oncall::create([
            'date'=> '2024-05-18',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idFernandoGuerra->id
        ]);
        Oncall::create([
            'date'=> '2024-05-19',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idFernandoGuerra->id
        ]);

        // ---------------------------------21-------------------------------

        Oncall::create([
            'date'=> '2024-05-21',
            'id_type'=>$idDiaDeSemana->id,
            'id_engineer'=>$idNicolasValdivia->id,
        ]);
        Oncall::create([
            'date'=> '2024-05-21',
            'id_type'=>$idDiaDeSemana->id,
            'id_engineer'=>$idVictorReyes->id,
        ]);

        // -------------------------------25 26---------------------------------

        Oncall::create([
            'date'=> '2024-05-25',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idNicolasValdivia->id,
        ]);
        Oncall::create([
            'date'=> '2024-05-26',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idNicolasValdivia->id,
        ]);

        Oncall::create([
            'date'=> '2024-05-25',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idJuanMaldonado->id
        ]);
        Oncall::create([
            'date'=> '2024-05-26',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idJuanMaldonado->id
        ]);

        Oncall::create([
            'date'=> '2024-05-25',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idFernandoGuerra->id
        ]);
        Oncall::create([
            'date'=> '2024-05-26',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idFernandoGuerra->id
        ]);

        // -----------------------------------------------------------------
        
        Oncall::create([
            'date'=> '2024-06-01',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idJuanCabezas->id
        ]);
        Oncall::create([
            'date'=> '2024-06-02',
            'id_type'=>$idFinDeSemana->id,
            'id_engineer'=>$idJuanCabezas->id
        ]);
        
        

        

       
    }
}

<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TreniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //$new_treno = new Treno();
        //$new_treno->name_azienda = "Italo";
        //$new_treno->name_station_p = "Napoli Centrale";
        //$new_treno->name_stattion_a = "Milano centrale";
        //$new_treno->orario_partenza = "12:00";
        //$new_treno->orario_arrivo = "15:00";
        //$new_treno->codice_treno ="fc54bn";
        //$new_treno->num_carrozze ="10";
        //$new_treno->treno_in_orario ="si";
        //$new_treno->treno_cancellato ="no";
        //$new_treno->save();
        //var_dump($new_treno);

        for($i = 0; $i <10; $i++){
        $new_treno = new Train();
        $new_treno->name_station_p = $faker->name();
        $new_treno->name_station_a = $faker->name();
        $new_treno->orario_partenza = $faker->time();
        $new_treno->orario_arrivo = $faker->time();
        $new_treno->codice_treno =$faker->numberBetween(1,10000);
        $new_treno->num_carrozze =$faker->numberBetween(1,10);
        $new_treno->treno_in_orario =$faker->boolean();
        $new_treno->cancellato =$faker->boolean();
        $new_treno->name_azienda=$faker->name();
        $new_treno->save();
        }





    }
}


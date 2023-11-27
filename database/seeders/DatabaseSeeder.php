<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // USUÁRIOS
        // \App\Models\User::factory(5)->create();

        

        // CASOS
        // for($i = 0; $i < 50; $i++)
        // {
        //     $situacao_caso = ["aberto", "resolvido", "fracassado", "arquivado"];
        //     $prioridade_caso = ["baixa", "media", "alta"];
        //     DB::table("casos")->insert([
        //         "numero_caso" => rand(10237, 98436)."-".uniqid()."/"
        //         .date("d")."_".date("m")."_".date("Y"),
        //         "titulo_caso" => fake()->text(15),
        //         "prioridade_caso" => $prioridade_caso[rand(0, 2)],
        //         "situacao_caso" => $situacao_caso[rand(0, 3)],
        //         "detalhes_caso" => fake()->text(1200),
        //         "ids_investigador" => "",
        //         "created_at" => now(),
        //         "updated_at" => now()
        //     ]);
        // }
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suspeito', function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw("(UUID())"));
            $table->string("nome_suspeito", 230);
            $table->string("idade_suspeito", 4);
            $table->string("profissao_suspeito", 50);
            $table->enum("genero_suspeito", ["masculino", "feminino", "outro"]);
            $table->string("altura_suspeito", 10);
            $table->string("peso_suspeito", 12);
            $table->string("etnia_suspeito", 20);
            $table->uuid("id_apreencoes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

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
        Schema::create('vitima', function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw("(UUID())"));
            $table->string("nome_vitima", 230);
            $table->string("idade_vitima", 4);
            $table->string("profissao_vitima", 50);
            $table->enum("genero_vitima", ["masculino", "feminino", "outro"]);
            $table->string("altura_vitima", 10);
            $table->string("peso_vitima", 12);
            $table->string("estado_vitima", 30);
            $table->string("etnia_vitima", 20);
            $table->uuid("id_ocorrencia")->nullable();
            $table->uuid("id_caso")->nullable();
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

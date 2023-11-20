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
        Schema::create('equipamento', function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw("(UUID())"));
            $table->string("numero_equipamento", 80);
            $table->string("nome_equipamento", 80);
            $table->string("tipo_equipamento", 40);
            $table->string("peso_equipamento", 20);
            $table->text("imagem_equipamento");
            $table->integer("estoque_equipamento");
            $table->uuid("id_equipe_equipamento");
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

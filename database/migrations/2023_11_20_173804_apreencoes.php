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
        Schema::create('apreencoes', function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw("(UUID())"));
            $table->string("nome_apreencao", 120);
            $table->enum("tipo_apreencao", ["objeto", "suspeito"]);
            $table->text("imagem_apreencao");
            $table->enum("situacao_apreencao", ["respondendo", "enjaulado","preventivo", "empacotado", "para transferencia", "transferido"]);
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

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
        Schema::create('veiculo', function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw("(UUID())"));
            $table->string("numero_veiculo", 80);
            $table->string("nome_veiculo", 40);
            $table->string("placa_veiculo", 10);
            $table->string("tipo_veiculo", 30);
            $table->text("imagem_veiculo");
            $table->enum("disponibilidade_veiculo", ["operando", "em manutencao", "disponivel"]);
            $table->uuid("id_equipe");
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

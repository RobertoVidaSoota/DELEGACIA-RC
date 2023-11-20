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
        Schema::create('denuncia', function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw("(UUID())"));
            $table->string("numero_denuncia", 80);
            $table->string("nome_denuncia", 200);
            $table->string("telefone", 25);
            $table->string("tipo_denuncia", 20);
            $table->text("detalhes_denuncia");
            $table->enum("disponibilidade_denuncia", ["ativada", "desativada"]);
            $table->uuid("id_delegado");
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

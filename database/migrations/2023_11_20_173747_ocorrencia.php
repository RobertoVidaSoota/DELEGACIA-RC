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
        Schema::create('ocorrencia', function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw("(UUID())"));
            $table->string("numero_ocorrencia", 80);
            $table->string("titulo_ocorrencia", 40);
            $table->string("tipo_ocorrencia", 20);
            $table->text("detalhes_ocorrencia");
            $table->enum("situacao_ocorrencia", ["em espera", "atendendo", "resolvida", "fracassada"]);
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

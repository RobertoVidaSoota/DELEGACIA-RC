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
        Schema::create('casos', function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw("(UUID())"));
            $table->string("numero_caso", 80);
            $table->string("titulo_caso", 40);
            $table->enum("prioridade_caso", ["baixa", "media", "alta"]);
            $table->enum("situacao_caso", ["aberto", "resolvido", "fracassado", "arquivado"]);
            $table->text("detalhes_caso");
            $table->uuid("ids_investigador");
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

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
        Schema::create('soldado', function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw("(UUID())"));
            $table->string("numero_soldado", 80);
            $table->string("nome_soldado", 230);
            $table->string("posto_soldado", 40);
            $table->text("imagem_soldado");
            $table->enum("disponibilidade_soldado", ["folga", "licenca", "descanso", "operando", "disponivel"]);
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

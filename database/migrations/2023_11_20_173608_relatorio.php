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
        Schema::create('relatorio', function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw("(UUID())"));
            $table->string("numero_relatorio", 80);
            $table->string("titulo_relatorio", 40);
            $table->text("texto_relatorio");
            $table->uuid("id_relator_iv_del");
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

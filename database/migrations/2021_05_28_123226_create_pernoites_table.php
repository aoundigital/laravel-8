<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePernoitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pernoites', function (Blueprint $table) {
            $table->id();
            $table->date('data_entrada');
            $table->date('data_saida');
            $table->integer('numero_pessoas');
            $table->integer('viagem_id'); //chave estrangeira
            $table->integer('socios_id'); //chave estrangeira
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
        Schema::dropIfExists('pernoites');
    }
}

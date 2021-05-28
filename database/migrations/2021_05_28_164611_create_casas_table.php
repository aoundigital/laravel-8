<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casas', function (Blueprint $table) {
            $table->id();
            $table->integer('acomoda_higiene');
            $table->integer('acomoda_conforto');
            $table->integer('acomoda_conservacao');
            $table->integer('acomoda_alimentacao');
            $table->integer('acomoda_seguranca');
            $table->integer('funcionarios_educacao');
            $table->integer('funcionarios_simpatia');
            $table->integer('funcionarios_higiene');
            $table->integer('funcionarios_proativo');
            $table->integer('funcionarios_honesto');
            $table->integer('equipamento_veiculo');
            $table->integer('equipamento_moto');
            $table->integer('equipamento_quadriciclo');
            $table->integer('equipamento_ar');
            $table->integer('equipamento_golf');
            $table->integer('ti_internet');
            $table->integer('ti_telefone');
            $table->integer('ti_tv');
            $table->integer('avaliacoes_id'); //chave estrangeira
            $table->string('ocorrencia_acomodacoes');
            $table->string('ocorrencia_funcionarios');
            $table->string('ocorrencia_equipamentos');
            $table->string('ocorrencia_ti');
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
        Schema::dropIfExists('casas');
    }
}

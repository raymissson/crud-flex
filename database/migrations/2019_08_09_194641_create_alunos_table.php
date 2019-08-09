<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aluno_nome');
            $table->date('aluno_nasc');
            $table->string('aluno_logra');
            $table->string('aluno_cep');
            $table->string('aluno_bairro');
            $table->string('aluno_cidade');
            $table->string('aluno_estado');
            $table->string('aluno_num');
            $table->unsignedInteger('curso_id');
            $table->foreign('curso_id')
                  ->references('id')
                  ->on('cursos');
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
        Schema::dropIfExists('alunos');
    }
}

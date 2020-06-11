<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('cod_banco', 3);
            $table->string('nome_banco', 100);
            $table->string('agencia', 9)->nullable();
            $table->string('conta', 15)->nullable();
            $table->string('nbeneficio', 50)->nullable();
            $table->string('ncartao_credito', 50)->nullable();
            $table->decimal('vbeneficio', 8, 2)->nullable();
            $table->decimal('vmargem', 8, 2)->nullable();
            $table->decimal('vemprestimo', 8, 2)->nullable();
            $table->string('customer_cpf', 11);
            $table->bigInteger('leads_id');


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
        Schema::dropIfExists('banks');
    }
}

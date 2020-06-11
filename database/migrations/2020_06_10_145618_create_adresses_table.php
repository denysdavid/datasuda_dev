<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->string('lougradouro', 255)->nullable();
            $table->string('numero', 255)->nullable();
            $table->string('endereco', 255)->nullable();
            $table->string('complemento', 255)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('cep', 10)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('uf', 2)->nullable();
            $table->string('customer_cpf', 11);
            $table->bigInteger('leads_id');
            //$table->foreign('costumer_cpf')->references('cpf')->on('costumers');
            //$table->foreignId('leads_id')->constrained('leads');

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
        Schema::dropIfExists('adresses');
    }
}
